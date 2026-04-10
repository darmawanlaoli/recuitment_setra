<x-user-layout>

    <!DOCTYPE html>
    <html lang="id" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Kelola profil dan lacak riwayat lamaran Anda di PT. Setra Praba Perkasa Recruitment Portal">
        <title>Manajemen Profil</title>
        <link rel="stylesheet" href="{{ asset('../css/main.css') }}">

        <script type="module" async
            src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fsetrarecr6900back.builtwithrocket.new&_be=https%3A%2F%2Fappanalytics.rocket.new&_v=0.1.15">
        </script>
        <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <div class="grid {{ $sidebar == true ? 'lg:grid-cols-3' : 'lg:grid-cols-6' }} gap-8">

                        @if($sidebar == true)

                        @include('partials.sidebar')

                        @endif

                        @yield('content')

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


    <script>
        //message with sweetalert
            @if(session('alert'))

                Swal.fire({
                    title: "{{ session('alert') }}",
                    icon: "alert",
                    draggable: true
                });

            @elseif(session('error'))
                Swal.fire({
                    icon: "error",
                    title: "GAGAL!",
                    text: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 3000
                });

                Swal.fire({
                    icon: "error",
                    title: "Alert...",
                    text: "{{ session('error') }}",
                    });
            @endif

    </script>


</x-user-layout>
