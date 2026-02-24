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
                                <span class="text-sm font-medium text-text-primary font-caption">Progres Lamaran
                                    Kerja</span>
                                <span class="text-2xl font-bold text-primary font-heading">85%</span>
                            </div>
                            <div class="w-full bg-neutral-200 rounded-full h-3 overflow-hidden">
                                <div class="bg-gradient-to-r from-primary to-secondary h-full rounded-full transition-all duration-500"
                                    style="width: 85%"></div>
                            </div>
                            <p class="text-xs text-text-secondary mt-3">
                                Click <a href="{{ route('profile') }}" class="text-primary hover:underline">disini</a>
                                untuk melihat progres lamaran kerja
                                Anda
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


                        @if ($applications->count() > 0)

                        @if ($applications->first()->status == 'approved')
                        @include('partials.status_lamaran_approved');
                        @elseif($applications->first()->status == 'pending')
                        @include('partials.status_lamaran_pending');
                        @elseif($applications->first()->status == 'rejected')
                        @include('partials.status_lamaran_rejected');
                        @endif

                        @else

                        @include('partials.form_pengajuan_lamaran');

                        @endif
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
        // document.querySelectorAll('form').forEach(form => {
        //     form.addEventListener('submit', (e) => {
        //         e.preventDefault();
        //         alert('Perubahan berhasil disimpan!');
        //     });
        // });

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