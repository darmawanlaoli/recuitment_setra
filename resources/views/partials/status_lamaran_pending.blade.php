<div class="card">
    <p class="mb-6">Anda telah mengajukan lamaran pada tanggal {{
        $applications->created_at->format('d F Y') }}.
        <b>Cek status lamaran Anda di bawah ini secara berkala</b>
    </p>

    <div class="mt-5 flex items-center justify-between p-3 bg-success-50 rounded-lg">
        <span class="text-sm text-text-secondary">Status Lamaran</span>
        <span class="text-uppercase text-lg font-bold text-success-600 font-heading">
            {{
            $applications->status
            }}</span>
    </div>
</div>