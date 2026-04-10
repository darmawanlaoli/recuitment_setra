<!DOCTYPE html>
<html>

<head>
    <title>Recruitment Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background: #f1f3f4;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border-top: 5px solid #673ab7;
        }

        .question-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .option {
            margin-bottom: 10px;
        }

        img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 10px;
        }

        textarea {
            width: 100%;
            padding: 10px;
        }

        .submit-btn {
            background: #673ab7;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .timer {
            font-size: 18px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>

    <div class="container">

        <form id="examForm" method="POST" action="{{ route('test.submit', $session->id) }}">
            @csrf

            <!-- HEADER -->
            <div class="card">
                <h3>Recruitment Test</h3>
                <p>Jawab semua pertanyaan dengan benar.</p>

                <div class="timer">
                    Waktu tersisa: <span id="timer"></span>
                </div>
            </div>

            <!-- QUESTIONS -->
            @foreach($questions as $index => $q)
            <div class="card">

                <div class="question-title">
                    {{ $index + 1 }}. {!! $q->question_text !!}
                </div>

                {{-- MEDIA SOAL --}}
                @if($q->media_type == 'image')
                <img src="{{ asset($q->media_path) }}">
                @elseif($q->media_type == 'link')
                <iframe width="100%" height="300" src="{{ $q->media_path }}" frameborder="0" allowfullscreen>
                </iframe>
                @endif

                {{-- MCQ --}}
                @if($q->question_type == 'mcq')

                @foreach($q->options as $opt)
                <div class="option">
                    <label>
                        <input type="radio" name="answers[{{ $q->id }}]" value="{{ $opt->id }}" required>

                        {{ $opt->option_text }}
                    </label>

                    {{-- IMAGE OPTION --}}
                    @if($opt->media_type == 'image')
                    <img width="120" src="{{ asset($opt->media_path) }}">
                    @endif
                </div>
                @endforeach

                @else

                {{-- ESSAY --}}
                <textarea name="answers[{{ $q->id }}]" rows="4" placeholder="Tulis jawaban..." required></textarea>

                @endif

            </div>
            @endforeach

            <button type="submit" class="submit-btn">
                Submit Jawaban
            </button>

        </form>

    </div>

    <!-- TIMER SCRIPT -->
    <script>
        let duration = {{ $session->duration_minutes ?? 30 }} * 60; // menit → detik
    let timerDisplay = document.getElementById('timer');
    let form = document.getElementById('examForm');

    function startTimer() {
        let timer = duration;

        let interval = setInterval(function () {

            let minutes = Math.floor(timer / 60);
            let seconds = timer % 60;

            timerDisplay.innerHTML =
                minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

            if (--timer < 0) {
                clearInterval(interval);
                alert('Waktu habis! Jawaban akan disubmit.');
                form.submit();
            }

        }, 1000);
    }

    startTimer();
    </script>

    <!-- PROTEKSI REFRESH -->
    <script>
        window.onbeforeunload = function () {
        return "Jawaban belum disubmit!";
    };
    </script>

</body>

</html>
