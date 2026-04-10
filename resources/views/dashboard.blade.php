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

{{-- kabupaten --}}
<script>
    document.getElementById('provinsi').addEventListener('change', function(){
        let provinsi = this.value;

        fetch(`/get_regencies/${provinsi}`)
            .then(res => res.json())
            .then(data => {
                let kab = document.getElementById('kabupaten');
                kab.innerHTML = '<option value="">-- Pilih Kabupaten/Kota --</option>';

                data.data.forEach(item => {
                    kab.innerHTML += `<option value="${item.code}">${item.name}</option>`;
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
    document.getElementById('kabupaten').addEventListener('change', function(){

    let kabupaten = this.value;
    let areaSelect = document.getElementById('area');

    // tampilkan loading
    areaSelect.innerHTML = '<option value="">Mohon tunggu... sedang mengambil data area</option>';

    fetch(`/get_area/${kabupaten}`)
        .then(res => res.json())
        .then(data => {

            areaSelect.innerHTML = '<option value="">-- Pilih Area --</option>';

            if (data.data.length === 0) {
                areaSelect.innerHTML += '<option disabled>Tidak ada area tersedia pada Kabupaten/Kota yang Anda pilih</option>';
            } else {
                data.data.forEach(item => {
                    areaSelect.innerHTML += `<option value="${item.id}">${item.nama_area}</option>`;
                });
            }
        })
        .catch(error => {
            areaSelect.innerHTML = '<option value="">Gagal mengambil data, silahkan refresh halaman ini</option>';
            console.error(error);
        });

});
</script>


{{-- posisi / lowongan --}}
<script>
    document.getElementById('area').addEventListener('change', function(){
        let area = this.value;
        let posisiSelect = document.getElementById('posisi');

        // tampilkan loading
        posisiSelect.innerHTML = '<option value="">Mohon tunggu... sedang mengambil data posisi</option>';

        fetch(`/get_posisi/${area}`)
            .then(res => res.json())
            .then(data => {
                let pos = document.getElementById('posisi');

                pos.innerHTML = '<option value="">-- Pilih Posisi --</option>';

                if (data.data.length === 0) {

                pos.innerHTML += '<option disabled>Tidak ada lowongan tersedia berdasarkan area yang Anda pilih</option>';

                } else {

                data.data.forEach(item => {

                let option = document.createElement("option");
                option.value = item.id;
                option.textContent = item.nama_jabatan;

                pos.appendChild(option);

                });

                }
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
