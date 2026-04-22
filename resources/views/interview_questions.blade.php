@extends('partials.layout')


@section('content')


<div class="lg:col-span-2">
    <form method="POST" action="{{ route('store_interview_answer', $applicationId) }}" enctype="multipart/form-data">
        @csrf

        <!-- address -->
        <div class="card">
            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                <div class="w-12 h-12 rounded-xl bg-primary-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-text-primary font-heading">Jawab Pertanyaan
                    </h3>
                    <p class="text-sm text-text-secondary font-caption">Jawab pertanyaan di bawah ini dengan jujur
                    </p>
                </div>
            </div>

            <table class="table">
                <tr>
                    <th width="3px">No</th>
                    <th width="35%">Pertanyaan</th>
                    <th>Jawaban</th>
                    <th>Penjelasan</th>
                </tr>

                @foreach($questions as $question)
                @php
                $existingAnswer = $answers[$question->id] ?? null;
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $question->question_text }}</td>
                    <td>
                        {{-- YES / NO --}}
                        @if($question->question_type === 'yes_no' ||
                        $question->question_type === 'yes_no_with_explanation')

                        <label>
                            <input type="radio" name="answers[{{ $question->id }}][value]" value="YA" {{
                                old("answers.{$question->id}.value",
                            $existingAnswer->answer_value ?? '') == 'YA' ? 'checked' : '' }}>
                            YA
                        </label>

                        <label class="ml-4">
                            <input type="radio" name="answers[{{ $question->id }}][value]" value="TIDAK" {{
                                old("answers.{$question->id}.value",
                            $existingAnswer->answer_value ?? '') == 'TIDAK' ? 'checked' : '' }}>
                            TIDAK
                        </label>
                        @endif
                    </td>

                    <td>
                        {{-- Explanation --}}
                        @if($question->question_type === 'yes_no_with_explanation')
                        <div class="mt-3">
                            <textarea name="answers[{{ $question->id }}][explanation]" class="w-full border rounded p-2"
                                placeholder="Jika YA, jelaskan...">{{ old("answers.{$question->id}.explanation", $existingAnswer->explanation ?? '') }}</textarea>
                        </div>
                        @endif
                    </td>
                </tr>

                @endforeach
            </table>

            <!-- Action Buttons -->
            <div class="flex mt-5 flex-col sm:flex-row gap-4 justify-end">
                <a class="btn-ghost h-12 px-8" href="{{ route('dashboard') }}">Kembali</a>
                <button type="submit" class="btn-primary h-12 px-8 group">
                    <span>Simpan</span>
                </button>
            </div>

        </div>


    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('interview_error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Validasi Gagal',
        text: "{{ session('interview_error') }} Jawaban YA/TIDAK wajib diisi semua.",
    });
</script>
@endif

@endsection
