@extends('partials.layout')


@section('content')



@if (!empty($applications) && $applications->count() > 0)

{{-- @php
dd($applications->status);
@endphp --}}

@if ($applications->status == 'approved')
@include('partials.status_lamaran_approved');
@elseif($applications->status == 'pending')
@include('partials.status_lamaran_pending');
@elseif($applications->status == 'rejected')
@include('partials.status_lamaran_rejected');
@endif

@else
@include('partials.form_pengajuan_lamaran');

@endif
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


@endsection