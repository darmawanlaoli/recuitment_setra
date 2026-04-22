<div class="card">

    <div class="flex items-center justify-between p-3 bg-success-50 rounded-lg">
        <span class="text-sm text-text-secondary">Status Lamaran</span>
        <span class="text-uppercase text-lg font-bold text-success-600 font-heading">
            {{
            $applications->status
            }}</span>
    </div>

    <p class="mb-6 mt-4">Selamat, lamaran kerja Anda telah disetujui. Berikut jadwal interview Anda: <b>{{
            date('d F Y', strtotime($applications->tanggal_interview)) }}.</b>
    </p>

    <hr>

    @if($is_profile_completed === false)

    <p class="text-danger mt-3">Profile Anda belum lengkap, segera lengkapi agar bisa lanjut ke tahap
        berikutnya
    </p>

    <a href="{{ route('profile.edit', $applications->id) }}" class="btn btn-primary mt-3">Lengkapi Data</a>

    <button class="btn btn-outline mt-3" onclick="alert('Silahkan lengkapi data pribadi terlebih dahulu')">Jawab
        Pertanyaan</button>


    @else

    <p class="text-primary">Terimakasih, profile Anda telah lengkap. Silahkan lanjut menjawab pertanyaan.</p>

    <a href="{{ route('profile.edit', $applications->id) }}" class="btn btn-primary mt-3">Lihat Profile</a>

    <a href="{{ route('interview.questions', $applications->id) }}" class="btn btn-outline mt-3">Jawab
        Pertanyaan</a>

    @endif

    <p>{{ $applications->remark }}</p>



</div>
