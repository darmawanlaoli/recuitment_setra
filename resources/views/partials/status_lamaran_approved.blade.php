<div class="card">

    <div class="flex items-center justify-between p-3 bg-success-50 rounded-lg">
        <span class="text-sm text-text-secondary">Status Lamaran</span>
        <span class="text-uppercase text-lg font-bold text-success-600 font-heading">
            {{
            $applications->first()->status
            }}</span>
    </div>

    <p class="mb-6 mt-4">Selamat, lamaran kerja Anda telah disetujui. Berikut jadwal interview Anda: <b>{{
            date('d F Y', strtotime($applications->first()->tanggal_interview)) }}.</b>
    </p>

    <p>Silahkan click link di bawah ini untuk melengkapi profile Anda.</p>

    <a href="{{ route('profile.edit', $applications->first()->id) }}" class="btn btn-primary mt-3">Lengkapi Profile</a>

</div>