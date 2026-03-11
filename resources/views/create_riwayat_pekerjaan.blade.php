@extends('partials.layout')


@section('content')


<div class="lg:col-span-2">
    <form method="POST" action="{{ route('riwayat_pekerjaan.store') }}" enctype="multipart/form-data">
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
                    <h3 class="text-xl font-bold text-text-primary font-heading">Riwayat Pekerjaan
                    </h3>
                    <p class="text-sm text-text-secondary font-caption">Masukkan Riwayat Pekerjaan Anda di bawah ini.
                    </p>
                </div>
            </div>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
                crossorigin="anonymous">

            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <strong>Input Riwayat Pekerjaan</strong>
                </div>

                <div class="card-body">

                    <div class="border rounded p-3 mb-3">

                        <input type="hidden" name="id_applicant" value="{{ $id_applicant }}">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" class="form-control">
                                @error('nama_perusahaan')
                                <p class="text-danger text-sm mt-1">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Posisi</label>
                                <input type="text" name="posisi" class="form-control">
                                @error('posisi')
                                <p class="text-danger text-sm mt-1">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Tanggal Gabung</label>
                                <input type="date" name="tanggal_gabung" class="form-control">
                                @error('tanggal_gabung')
                                <p class="text-danger text-sm mt-1">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tanggal Akhir</label>
                                <input type="date" name="tanggal_akhir" class="form-control">
                                @error('tanggal_akhir')
                                <p class="text-danger text-sm mt-1">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">No. Telp Perusahaan</label>
                                <input type="text" name="no_telepon_perusahaan" class="form-control">
                                @error('no_telepon_perusahaan')
                                <p class="text-danger text-sm mt-1">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Upload Paklaring</label>
                                <input type="file" name="file_paklaring" class="form-control">
                                @error('file_paklaring')
                                <p class="text-danger text-sm mt-1">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">
                        + Simpan Riwayat Pekerjaan
                    </button>

                </div>
            </div>

        </div>


    </form>
</div>

@endsection