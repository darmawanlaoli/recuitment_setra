<x-user-layout>

    <!DOCTYPE html>
    <html lang="id" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Kelola profil dan lacak riwayat lamaran Anda di PT. Setra Praba Perkasa Recruitment Portal">
        <title>Manajemen Profil</title>
        <link rel="stylesheet" href="../css/main.css">

        <script type="module" async
            src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fsetrarecr6900back.builtwithrocket.new&_be=https%3A%2F%2Fappanalytics.rocket.new&_v=0.1.15">
        </script>
        <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>
    </head>

    <body class="bg-background">

        <!-- Main Content -->
        <main class="section-spacing">
            <div class="container mx-auto container-padding">
                <!-- Page Header -->
                <div class="mb-12">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold text-text-primary mb-3 font-heading">
                                Formulir Lamaran
                            </h1>
                            <p class="text-lg text-text-secondary">
                                Formulir Lamaran Kerja PT. Setra Praba Perkasa
                            </p>
                        </div>
                        <!-- Profile Completion Indicator -->
                        <div class="card p-6 max-w-xs">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm font-medium text-text-primary font-caption">Kelengkapan
                                    Profil</span>
                                <span class="text-2xl font-bold text-primary font-heading">85%</span>
                            </div>
                            <div class="w-full bg-neutral-200 rounded-full h-3 overflow-hidden">
                                <div class="bg-gradient-to-r from-primary to-secondary h-full rounded-full transition-all duration-500"
                                    style="width: 85%"></div>
                            </div>
                            <p class="text-xs text-text-secondary mt-3">
                                Lengkapi profil untuk meningkatkan peluang diterima
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: Profile Information -->
                <div id="content-profile" class="tab-content">
                    <div class="grid lg:grid-cols-3 gap-8">
                        <!-- Profile Photo Section -->
                        <div class="lg:col-span-1">
                            <div class="card sticky top-24">
                                <div class="text-center">
                                    <div class="relative inline-block mb-6">
                                        <img src="{{ Auth::user()->avatar }}" alt="Foto profil"
                                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100 shadow-lg"
                                            onerror="this.src='https://cdn.vectorstock.com/i/500p/29/52/faceless-male-avatar-in-hoodie-vector-56412952.jpg'; this.onerror=null;">
                                        <button
                                            class="absolute bottom-0 right-0 w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center shadow-lg hover:bg-primary-700 transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h3 class="text-xl font-bold text-text-primary mb-2 font-heading">
                                        {{ Auth::user()->name }}</h3>
                                    <p class="text-sm text-text-secondary mb-4 font-caption">Pencari Kerja</p>
                                    <div
                                        class="flex items-center justify-center gap-2 text-sm text-text-secondary mb-6">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Tahap Melamar Kerja</span>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between p-3 bg-primary-50 rounded-lg">
                                            <span class="text-sm text-text-secondary">Ajukan Lamaran</span>
                                            <span class="text-lg font-bold text-primary font-heading">0</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-success-50 rounded-lg">
                                            <span class="text-sm text-text-secondary">Menunggu Approval</span>
                                            <span class="text-lg font-bold text-success-600 font-heading">0</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-warning-50 rounded-lg">
                                            <span class="text-sm text-text-secondary">Mengisi Data Diri</span>
                                            <span class="text-lg font-bold text-warning-600 font-heading">0</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-warning-50 rounded-lg">
                                            <span class="text-sm text-text-secondary">Mengisi Form Pertanyaan</span>
                                            <span class="text-lg font-bold text-warning-600 font-heading">0</span>
                                        </div>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Profile Form Section -->
                        <div class="lg:col-span-2">
                            <form class="space-y-8">
                                <!-- Personal Information -->
                                <div class="card">
                                    <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-primary-100 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-text-primary font-heading">Informasi
                                                Pribadi
                                            </h3>
                                            <p class="text-sm text-text-secondary font-caption">Data diri dan kontak
                                                Anda
                                            </p>
                                        </div>
                                    </div>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="fullname" class="label">Nama Lengkap *</label>
                                            <input type="text" id="fullname" value="{{ Auth::user()->name }}"
                                                class="input w-full" required>
                                        </div>
                                        <div>
                                            <label for="email" class="label">Email *</label>
                                            <input type="email" id="email" value="{{ Auth::user()->email }}"
                                                class="input w-full" required>
                                        </div>
                                        <div>
                                            <label for="phone" class="label">Nomor Telepon *</label>
                                            <input type="tel" id="phone" value="" class="input w-full" required>
                                        </div>
                                        <div>
                                            <label for="birthdate" class="label">Tanggal Lahir</label>
                                            <input type="date" id="birthdate" class="input w-full">
                                        </div>

                                    </div>
                                </div>


                                <!-- address -->
                                <div class="card">
                                    <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-primary-100 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-text-primary font-heading">Alamat
                                            </h3>
                                            <p class="text-sm text-text-secondary font-caption">Alamat dan lokasi
                                                penempatan
                                            </p>
                                        </div>
                                    </div>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div class="md:col-span-2">
                                            <label for="address" class="label">Provinsi *</label>

                                            <select id="provinsi" name="provinsi" class="input w-full">
                                                <option value="">-- Pilih Provinsi --</option>
                                                @foreach($provinsi as $p)
                                                <option value="{{ $p['kode_wilayah'] }}">
                                                    {{ $p['nama_wilayah'] }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label>Kabupaten / Kota</label>
                                            <select id="kabupaten" class="input w-full">
                                                <option value="">-- Pilih Kabupaten/Kota --</option>
                                            </select>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label>Kecamatan</label>
                                            <select id="kecamatan" class="input w-full">
                                                <option value="">-- Pilih Kecamatan --</option>
                                            </select>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label>Desa / Kelurahan</label>
                                            <select id="desa" class="input w-full">
                                                <option value="">-- Pilih Desa/Kelurahan --</option>
                                            </select>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="alamat" class="label">Alamat Lengkap</label>
                                            <input id="alamat" type="text" class="input w-full">
                                        </div>
                                    </div>
                                </div>


                                <!-- Professional Summary -->
                                <div class="card">
                                    <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-secondary-100 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-text-primary font-heading">Upload Berkas
                                            </h3>
                                            <p class="text-sm text-text-secondary font-caption">Upload berkas Anda</p>
                                        </div>
                                    </div>

                                    <div class="space-y-6">
                                        <div class="grid md:grid-cols-2 gap-6">

                                            <!-- Upload CV dan lamaran -->
                                            <div
                                                class="border-2 border-dashed border-border rounded-xl p-8 text-center hover:border-primary transition-colors cursor-pointer">

                                                <input type="file" id="cv-upload" class="hidden"
                                                    accept=".pdf,.doc,.docx">

                                                <label for="cv-upload" class="cursor-pointer">
                                                    <div
                                                        class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                                                        <svg class="w-8 h-8 text-primary" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                        </svg>
                                                    </div>

                                                    <h4 class="text-lg font-semibold text-text-primary mb-2">
                                                        Upload CV & Surat Lamaran
                                                    </h4>

                                                    <p class="text-sm text-text-secondary mb-4">
                                                        Klik untuk memilih file atau drag & drop
                                                    </p>

                                                    <p class="text-xs text-text-tertiary">
                                                        Format: PDF, DOC, DOCX (Max. 5MB)
                                                    </p>
                                                </label>

                                                <!-- Nama File -->
                                                <p id="cv-file-name"
                                                    class="mt-3 text-sm text-primary font-medium hidden"></p>
                                            </div>

                                            <!-- Upload KK -->
                                            <div
                                                class="border-2 border-dashed border-border rounded-xl p-8 text-center hover:border-primary transition-colors cursor-pointer">

                                                <input type="file" id="upload-kk" class="hidden"
                                                    accept=".pdf,.doc,.docx">

                                                <label for="upload-kk" class="cursor-pointer">
                                                    <div
                                                        class="w-16 h-16 rounded-full bg-secondary-50 flex items-center justify-center mx-auto mb-4">
                                                        <svg class="w-8 h-8 text-secondary" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                        </svg>
                                                    </div>

                                                    <h4 class="text-lg font-semibold text-text-primary mb-2">
                                                        Upload KK
                                                    </h4>

                                                    <p class="text-sm text-text-secondary mb-4">
                                                        Klik untuk memilih file atau drag & drop
                                                    </p>

                                                    <p class="text-xs text-text-tertiary">
                                                        Format: PDF, DOC, DOCX (Max. 5MB)
                                                    </p>
                                                </label>

                                                <!-- Nama File -->
                                                <p id="file-kk" class="mt-3 text-sm text-primary font-medium hidden">
                                                </p>
                                            </div>
                                        </div>


                                        <div class="grid md:grid-cols-2 gap-6">

                                            <!-- Upload KTP -->
                                            <div
                                                class="border-2 border-dashed border-border rounded-xl p-8 text-center hover:border-primary transition-colors cursor-pointer">

                                                <input type="file" id="file-ktp" class="hidden"
                                                    accept=".pdf,.doc,.docx">

                                                <label for="file-ktp" class="cursor-pointer">
                                                    <div
                                                        class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                                                        <svg class="w-8 h-8 text-primary" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                        </svg>
                                                    </div>

                                                    <h4 class="text-lg font-semibold text-text-primary mb-2">
                                                        Upload KTP
                                                    </h4>

                                                    <p class="text-sm text-text-secondary mb-4">
                                                        Klik untuk memilih file atau drag & drop
                                                    </p>

                                                    <p class="text-xs text-text-tertiary">
                                                        Format: PDF, DOC, DOCX (Max. 5MB)
                                                    </p>
                                                </label>

                                                <!-- Nama File -->
                                                <p id="file-ktp" class="mt-3 text-sm text-primary font-medium hidden">
                                                </p>
                                            </div>

                                            <!-- Upload SIM -->
                                            <div
                                                class="border-2 border-dashed border-border rounded-xl p-8 text-center hover:border-primary transition-colors cursor-pointer">

                                                <input type="file" id="upload-sim" class="hidden"
                                                    accept=".pdf,.doc,.docx">

                                                <label for="upload-sim" class="cursor-pointer">
                                                    <div
                                                        class="w-16 h-16 rounded-full bg-secondary-50 flex items-center justify-center mx-auto mb-4">
                                                        <svg class="w-8 h-8 text-secondary" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                        </svg>
                                                    </div>

                                                    <h4 class="text-lg font-semibold text-text-primary mb-2">
                                                        Upload SIM
                                                    </h4>

                                                    <p class="text-sm text-text-secondary mb-4">
                                                        Klik untuk memilih file atau drag & drop
                                                    </p>

                                                    <p class="text-xs text-text-tertiary">
                                                        Format: PDF, DOC, DOCX (Max. 5MB)
                                                    </p>
                                                </label>

                                                <!-- Nama File -->
                                                <p id="file-sim" class="mt-3 text-sm text-primary font-medium hidden">
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Social Links -->
                                <div class="card">
                                    <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-accent-100 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                                <path
                                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-text-primary font-heading">Data Lainnya
                                            </h3>
                                            <p class="text-sm text-text-secondary font-caption">Tambahkan data lainnya
                                            </p>
                                        </div>
                                    </div>

                                    <div class="space-y-6">
                                        <div>
                                            <label for="linkedin" class="label">Posisi yang Anda Lamar</label>
                                            <select name="posisi" class="input w-full">
                                                <option value="DRIVER">DRIVER</option>
                                                <option value="NON DRIVER">NON DRIVER</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="linkedin" class="label">Jenis SIM</label>
                                            <select name="posisi" class="input w-full">
                                                <option value="Pilih jenis SIM">Pilih jenis SIM</option>
                                                <option value="C">C</option>
                                                <option value="A">A</option>
                                                <option value="B1">B1</option>
                                                <option value="B2">B2</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="portfolio" class="label">Area Penempatan</label>
                                            <input type="text" class="input w-full">
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex flex-col sm:flex-row gap-4 justify-end">
                                    <button type="button" class="btn-ghost h-12 px-8">
                                        Batal
                                    </button>
                                    <button
                                        onclick="alert('Fitur ini masih dalam pengembangan, silahkan cek beberapa saat lagi')"
                                        type="submit" class="btn-primary h-12 px-8 group">
                                        <span>Simpan</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <!-- Tab Switching Script -->
        <script>
            // Tab switching functionality
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('active', 'text-primary', 'border-primary');
                    btn.classList.add('text-text-secondary', 'border-transparent');
                });

                // Add active class to clicked button
                button.classList.add('active', 'text-primary', 'border-primary');
                button.classList.remove('text-text-secondary', 'border-transparent');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show corresponding tab content
                const tabId = button.id.replace('tab-', 'content-');
                document.getElementById(tabId).classList.remove('hidden');
            });
        });

        // Form submission handlers
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Perubahan berhasil disimpan!');
            });
        });
        </script>
    </body>

    </html>

    <script>
        document.getElementById('provinsi').addEventListener('change', function(){
        let provinsi = this.value;


        fetch(`/api/kabupaten/${provinsi}`)
            .then(res => res.json())
            .then(data => {
                let kab = document.getElementById('kabupaten');
                kab.innerHTML = '<option value="">-- Pilih Kabupaten/Kota --</option>';

                data.data.forEach(item => {
                    kab.innerHTML += `<option value="${item.kode_wilayah}">${item.nama_wilayah}</option>`;
                });

                document.getElementById('kecamatan').innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                document.getElementById('desa').innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
            });
    });

    document.getElementById('kabupaten').addEventListener('change', function(){
        let kabupaten = this.value;

        fetch(`/api/kecamatan/${kabupaten}`)
            .then(res => res.json())
            .then(data => {
                let kec = document.getElementById('kecamatan');
                kec.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

                data.data.forEach(item => {
                    kec.innerHTML += `<option value="${item.kode_wilayah}">${item.nama_wilayah}</option>`;
                });

                document.getElementById('desa').innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
            });
    });

    document.getElementById('kecamatan').addEventListener('change', function(){
        let kecamatan = this.value;

        fetch(`/api/desa/${kecamatan}`)
            .then(res => res.json())
            .then(data => {
                let desa = document.getElementById('desa');
                desa.innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';

                data.data.forEach(item => {
                    desa.innerHTML += `<option value="${item.kode_wilayah}">${item.nama_wilayah}</option>`;
                });
            });
    });
    </script>


    <script>
        document.getElementById('cv-upload').addEventListener('change', function () {
            const fileNameEl = document.getElementById('cv-file-name');

            if (this.files && this.files.length > 0) {
                fileNameEl.textContent = 'File dipilih: ' + this.files[0].name;
                fileNameEl.classList.remove('hidden');
            } else {
                fileNameEl.textContent = '';
                fileNameEl.classList.add('hidden');
            }
        });

        document.getElementById('upload-kk').addEventListener('change', function () {
            const fileNameEl = document.getElementById('file-kk');

            if (this.files && this.files.length > 0) {
            fileNameEl.textContent = 'File dipilih: ' + this.files[0].name;
            fileNameEl.classList.remove('hidden');
            } else {
            fileNameEl.textContent = '';
            fileNameEl.classList.add('hidden');
            }
        });

        document.getElementById('upload-ktp').addEventListener('change', function () {
            const fileNameEl = document.getElementById('file-ktp');

            if (this.files && this.files.length > 0) {
            fileNameEl.textContent = 'File dipilih: ' + this.files[0].name;
            fileNameEl.classList.remove('hidden');
            } else {
            fileNameEl.textContent = '';
            fileNameEl.classList.add('hidden');
            }
        });

        document.getElementById('upload-sim').addEventListener('change', function () {
            const fileNameEl = document.getElementById('file-sim');

            if (this.files && this.files.length > 0) {
            fileNameEl.textContent = 'File dipilih: ' + this.files[0].name;
            fileNameEl.classList.remove('hidden');
            } else {
            fileNameEl.textContent = '';
            fileNameEl.classList.add('hidden');
            }
        });
    </script>


</x-user-layout>
