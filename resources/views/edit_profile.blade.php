@extends('partials.layout')

@section('content')

<div class="lg:col-span-2">
    <form action="{{ route('profile.update', $applications->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                <div class="w-12 h-12 rounded-xl bg-primary-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-text-primary font-heading">Edit Profil
                    </h3>
                    <p class="text-sm text-text-secondary font-caption">Perbarui data profil Anda
                    </p>
                </div>
            </div>

            <input type="text" hidden value="{{ $applications->id_user }}" name="id_user">

            <input type="text" hidden value="{{ $applications->provinsi }}" name="provinsi">

            <input type="text" hidden value="{{ $applications->kabupaten }}" name="kabupaten">

            <input type="text" hidden value="{{ $applications->area }}" name="area">

            <input type="text" hidden value="{{ $applications->posisi }}" name="posisi">

            <input type="text" hidden value="{{ $applications->status }}" name="status">

            <div class=" grid md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label for="name" class="label">
                        Nama Lengkap (Sesuai KTP)*
                    </label>

                    <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap Anda"
                        value="{{ old('name', $applications->name ?? '') }}"
                        class="input w-full @error('name') text-danger @enderror">

                    @error('name')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="nama_panggilan" class="label">
                        Nama Panggilan*
                    </label>

                    <input type="text" name="nama_panggilan" id="nama_panggilan"
                        placeholder="Masukkan nama panggilan Anda"
                        value="{{ old('nama_panggilan', $applications->nama_panggilan ?? '') }}"
                        class="input w-full @error('nama_panggilan') text-danger @enderror">

                    @error('nama_panggilan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- jenis kelamin --}}
                <div class="md:col-span-2">
                    <label for="jenis_kelamin" class="label">
                        Jenis Kelamin*
                    </label>

                    <select name="jenis_kelamin" id="jenis_kelamin"
                        class="input w-full @error('jenis_kelamin') text-danger @enderror">

                        <option value="">-- Pilih Jenis Kelamin --</option>

                        <option value="Laki-laki" {{ old('jenis_kelamin', $applications->jenis_kelamin ?? '') ==
                            'Laki-laki' ?
                            'selected' :
                            '' }}>
                            Laki-laki
                        </option>

                        <option value="Perempuan" {{ old('jenis_kelamin', $applications->jenis_kelamin ?? '') ==
                            'Perempuan' ?
                            'selected' :
                            '' }}>
                            Perempuan
                        </option>

                    </select>

                    @error('jenis_kelamin')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- tempat lahir --}}
                <div class="md:col-span-2">
                    <label for="tempat_lahir" class="label">
                        Tempat Lahir *
                    </label>

                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan tempat lahir Anda"
                        value="{{ old('tempat_lahir', $applications->tempat_lahir ?? '') }}"
                        class="input w-full @error('tempat_lahir') text-danger @enderror">

                    @error('tempat_lahir')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="tanggal_lahir" class="label">
                        Tanggal Lahir *
                    </label>

                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan tanggal lahir Anda"
                        value="{{ old('tanggal_lahir', $applications->tanggal_lahir ?? '') }}"
                        class="input w-full @error('tanggal_lahir') text-danger @enderror">

                    @error('tanggal_lahir')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- agama --}}
                <div class="md:col-span-2">
                    <label for="agama" class="label">
                        Agama *
                    </label>

                    <select name="agama" id="agama" class="input w-full @error('agama') text-danger @enderror">

                        <option value="">-- Pilih Agama --</option>

                        <option value="Islam" {{ old('agama', $applications->agama ?? '') ==
                            'Islam' ?
                            'selected' :
                            '' }}>
                            Islam
                        </option>

                        <option value="Kristen" {{ old('agama', $applications->agama ?? '') ==
                            'Kristen' ?
                            'selected' :
                            '' }}>
                            Kristen
                        </option>

                        <option value="Katolik" {{ old('agama', $applications->agama ?? '') ==
                            'Katolik' ?
                            'selected' :
                            '' }}>
                            Katolik
                        </option>

                        <option value="Hindu" {{ old('agama', $applications->agama ?? '') ==
                            'Hindu' ?
                            'selected' :
                            '' }}>
                            Hindu
                        </option>

                        <option value="Buddha" {{ old('agama', $applications->agama ?? '') ==
                            'Buddha' ?
                            'selected' :
                            '' }}>
                            Buddha
                        </option>

                        <option value="Konghucu" {{ old('agama', $applications->agama ?? '') ==
                            'Konghucu' ?
                            'selected' :
                            '' }}>
                            Konghucu
                        </option>

                        <option value="Lainnya" {{ old('agama', $applications->agama ?? '') ==
                            'Lainnya' ?
                            'selected' :
                            '' }}>
                            Lainnya
                        </option>

                    </select>

                    @error('agama')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- status perkawinan --}}
                {{-- <div class="md:col-span-2">
                    <label for="status_perkawinan" class="label">
                        Status Perkawinan
                        *
                    </label>

                    <select name="status_perkawinan" id="status_perkawinan"
                        class="input w-full @error('status_perkawinan') text-danger @enderror">

                        <option value="">-- Pilih Status Perkawinan --</option>

                        <option value="Belum Menikah" {{ old('status_perkawinan', $applications->status_perkawinan ??
                            '')
                            ==
                            'Belum Menikah' ?
                            'selected' :
                            '' }}>
                            Belum Menikah
                        </option>

                        <option value="Menikah" {{ old('status_perkawinan', $applications->status_perkawinan ?? '') ==
                            'Menikah' ?
                            'selected' :
                            '' }}>
                            Menikah
                        </option>

                        <option value="Cerai Hidup" {{ old('status_perkawinan', $applications->status_perkawinan ?? '')
                            ==
                            'Cerai Hidup' ?
                            'selected' :
                            '' }}>
                            Cerai Hidup
                        </option>

                        <option value="Cerai Mati" {{ old('status_perkawinan', $applications->status_perkawinan ?? '')
                            ==
                            'Cerai Mati' ?
                            'selected' :
                            '' }}>
                            Cerai Mati
                        </option>

                    </select>

                    @error('status_perkawinan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div> --}}

                {{-- status perkawinan --}}
                <div class="md:col-span-2">
                    <label for="status_perkawinan" class="label">
                        Status Perkawinan
                        *
                    </label>

                    <select name="status_perkawinan" id="status_perkawinan"
                        class="input w-full @error('status_perkawinan') text-danger @enderror">

                        <option value="">-- Pilih Status Perkawinan --</option>

                        <option value="Menikah" {{ old('status_perkawinan', $applications->status_perkawinan ?? '')
                            ==
                            'Menikah' ?
                            'selected' :
                            '' }}>
                            Menikah
                        </option>

                        <option value="Lajang" {{ old('status_perkawinan', $applications->status_perkawinan ?? '') ==
                            'Lajang' ?
                            'selected' :
                            '' }}>
                            Lajang
                        </option>

                    </select>

                    @error('status_perkawinan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- golongan darah --}}
                <div class="md:col-span-2">
                    <label for="golongan_darah" class="label">
                        Golongan Darah
                        *
                    </label>

                    <select name="golongan_darah" id="golongan_darah"
                        class="input w-full @error('golongan_darah') text-danger @enderror">

                        <option value="">-- Pilih Golongan Darah --</option>

                        <option value="A" {{ old('golongan_darah', $applications->golongan_darah ?? '')
                            ==
                            'A' ?
                            'selected' :
                            '' }}>
                            A
                        </option>


                        <option value="B" {{ old('golongan_darah', $applications->golongan_darah ?? '')
                            ==
                            'B' ?
                            'selected' :
                            '' }}>
                            B
                        </option>

                        <option value="AB" {{ old('golongan_darah', $applications->golongan_darah ?? '')
                            ==
                            'AB' ?
                            'selected' :
                            '' }}>
                            AB
                        </option>

                        <option value="O" {{ old('golongan_darah', $applications->golongan_darah ?? '')
                            ==
                            'O' ?
                            'selected' :
                            '' }}>
                            O
                        </option>

                        <option value="Tidak Tahu" {{ old('golongan_darah', $applications->golongan_darah ?? '') ==
                            'Tidak ' ?
                            'selected' :
                            '' }}>
                            Tidak Tahu
                        </option>

                    </select>

                    @error('golongan_darah')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>


                {{-- kewarganegaraan --}}
                <div class="md:col-span-2">
                    <label for="kewarganegaraan" class="label">
                        Kewarganegaraan
                        *
                    </label>

                    <select name="kewarganegaraan" id="kewarganegaraan"
                        class="input w-full @error('kewarganegaraan') text-danger @enderror">

                        <option value="">-- Pilih Kewarganegaraan --</option>

                        <option value="WNI" {{ old('kewarganegaraan', $applications->kewarganegaraan ?? '')
                            ==
                            'WNI' ?
                            'selected' :
                            '' }}>
                            WNI
                        </option>


                        <option value="WNA" {{ old('kewarganegaraan', $applications->kewarganegaraan ?? '')
                            ==
                            'WNA' ?
                            'selected' :
                            '' }}>
                            WNA
                        </option>

                    </select>

                    @error('kewarganegaraan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- START KTP SECTION --}}
                {{-- nomor ktp --}}
                <div class="md:col-span-2">
                    <label for="nomor_ktp" class="label">
                        Nomor KTP*
                    </label>

                    <input type="text" name="nomor_ktp" id="nomor_ktp" placeholder="Masukkan nomor KTP Anda"
                        value="{{ old('nomor_ktp', $applications->nomor_ktp ?? '') }}"
                        class="input w-full @error('nomor_ktp') text-danger @enderror">

                    @error('nomor_ktp')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Upload KTP -->
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors cursor-pointer
                    @error('file_ktp') text-danger @else border-border hover:border-primary @enderror">

                    <input type="file" name="file_ktp" id="file_ktp" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_ktp" class="cursor-pointer block">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold mb-2">
                            Upload KTP
                        </h4>

                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>

                    </label>

                    <!-- Nama File -->
                    <p id="file_ktp_filename" class="mt-3 text-sm text-primary font-medium hidden"></p>

                    <!-- Error -->
                    @error('file_ktp')
                    <p class="text-danger text-sm mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- File KTP --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_ktp) && Storage::disk('public')->exists($applications->file_ktp))

                    <a href="{{ asset('storage/' . $applications->file_ktp) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download KTP
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File KTP belum diupload
                        </h4>
                    </div>

                    @endif

                </div>
                {{-- END KTP SECTION --}}

                {{-- START KK SECTION --}}
                {{-- nomor KK --}}
                <div class="md:col-span-2">
                    <label for="nomor_kk" class="label">
                        Nomor KK *
                    </label>

                    <input type="text" name="nomor_kk" id="nomor_kk" placeholder="Masukkan nomor KK Anda"
                        value="{{ old('nomor_kk', $applications->nomor_kk ?? '') }}"
                        class="input w-full @error('nomor_kk') text-danger @enderror">

                    @error('nomor_kk')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Upload KK -->
                <div
                    class="border-2 border-dashed rounded-xl p-8 text-center transition-colors cursor-pointer @error('file_kk') text-danger @else border-border hover:border-primary @enderror">

                    <input type="file" name="file_kk" id="file_kk" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_kk" class="cursor-pointer block">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold mb-2">
                            Upload KK
                        </h4>

                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>

                    </label>

                    <!-- Nama File -->
                    <p id="file_kk_filename" class="mt-3 text-sm text-primary font-medium hidden"></p>

                    <!-- Error -->
                    @error('file_kk')
                    <p class="text-danger text-sm mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- File KK --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_kk) && Storage::disk('public')->exists($applications->file_kk))

                    <a href="{{ asset('storage/' . $applications->file_kk) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download KK
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File KK belum diupload
                        </h4>
                    </div>

                    @endif

                </div>
                {{-- END KK SECTION --}}

                {{-- START SIM SECTION --}}
                {{-- jenis sim --}}
                <div class="md:col-span-2">
                    <label for="jenis_sim" class="label">
                        Jenis SIM
                        *
                    </label>

                    <select name="jenis_sim" id="jenis_sim"
                        class="input w-full @error('jenis_sim') text-danger @enderror">

                        <option value="">-- Pilih Jenis SIM --</option>

                        <option value="Tidak Memiliki SIM" {{ old('jenis_sim', $applications->jenis_sim ?? '')
                            ==
                            'Tidak Memiliki SIM' ?
                            'selected' :
                            '' }}>
                            Tidak Memiliki SIM
                        </option>


                        <option value="SIM A" {{ old('jenis_sim', $applications->jenis_sim ?? '')
                            ==
                            'SIM A' ?
                            'selected' :
                            '' }}>
                            SIM A
                        </option>

                        <option value="SIM B1" {{ old('jenis_sim', $applications->jenis_sim ?? '')
                            ==
                            'SIM B1' ?
                            'selected' :
                            '' }}>
                            SIM B1
                        </option>

                        <option value="SIM B1 Umum" {{ old('jenis_sim', $applications->jenis_sim ?? '')
                            ==
                            'SIM B1 Umum' ?
                            'selected' :
                            '' }}>
                            SIM B1 Umum
                        </option>

                        <option value="SIM B2" {{ old('jenis_sim', $applications->jenis_sim ?? '')
                            ==
                            'SIM B2' ?
                            'selected' :
                            '' }}>
                            SIM B2
                        </option>

                        <option value="SIM B2 Umum" {{ old('jenis_sim', $applications->jenis_sim ?? '')
                            ==
                            'SIM B2 Umum' ?
                            'selected' :
                            '' }}>
                            SIM B2 Umum
                        </option>

                        <option value="SIM C" {{ old('jenis_sim', $applications->jenis_sim ?? '')
                            ==
                            'SIM C' ?
                            'selected' :
                            '' }}>
                            SIM C
                        </option>

                    </select>

                    @error('jenis_sim')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- nomor sim --}}
                <div class="md:col-span-2">
                    <label for="nomor_sim" class="label">
                        Nomor SIM*
                    </label>

                    <input type="text" name="nomor_sim" id="nomor_sim" placeholder="Masukkan nomor SIM Anda"
                        value="{{ old('nomor_sim', $applications->nomor_sim ?? '') }}"
                        class="input w-full @error('nomor_sim') text-danger @enderror">

                    @error('nomor_sim')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- nomor tanggal berlaku sim --}}
                <div class="md:col-span-2">
                    <label for="tanggal_berlaku_sim" class="label">
                        Tanggal Berlaku SIM*
                    </label>

                    <input type="date" name="tanggal_berlaku_sim" id="tanggal_berlaku_sim"
                        placeholder="Masukkan tanggal berlaku SIM Anda"
                        value="{{ old('tanggal_berlaku_sim', $applications->tanggal_berlaku_sim ?? '') }}"
                        class="input w-full @error('tanggal_berlaku_sim') text-danger @enderror">

                    @error('tanggal_berlaku_sim')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="status_berlaku_sim" class="label">
                        Status Masa Berlaku SIM*
                    </label>

                    <input type="text" name="status_berlaku_sim" id="status_berlaku_sim"
                        class="input w-full bg-gray-100" readonly>
                    <small>Akan otomatis <b>"TIDAK LULUS"</b> apabila masa berlaku SIM Anda kurang dari 1 tahun.</small>
                </div>

                {{-- Upload SIM --}}
                <div class="border-2 border-dashed rounded-xl p-6 text-center
                    @error('file_sim') text-danger @else border-gray-300 @enderror">

                    <input type="file" name="file_sim" id="file_sim" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_sim" class="cursor-pointer block">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <h4 class="font-semibold">Upload SIM</h4>
                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>
                    </label>

                    <p id="file_sim_filename" class="mt-2 text-sm text-primary hidden"></p>

                    @error('file_sim')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- File SIM --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_sim) && Storage::disk('public')->exists($applications->file_sim))

                    <a href="{{ asset('storage/' . $applications->file_sim) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download SIM
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File SIM belum diupload
                        </h4>
                    </div>

                    @endif

                </div>

                {{-- jenis sim sebelumnya --}}
                <div class="md:col-span-2">
                    <label for="jenis_sim_sebelumnya" class="label">
                        Jenis SIM Sebelumnya
                        *
                    </label>

                    <select name="jenis_sim_sebelumnya" id="jenis_sim_sebelumnya"
                        class="input w-full @error('jenis_sim_sebelumnya') text-danger @enderror">

                        <option value="">-- Pilih Jenis SIM Sebelumnya --</option>

                        <option value="Tidak Memiliki SIM" {{ old('jenis_sim_sebelumnya', $applications->
                            jenis_sim_sebelumnya ?? '')
                            ==
                            'Tidak Memiliki SIM' ?
                            'selected' :
                            '' }}>
                            Tidak Memiliki SIM
                        </option>


                        <option value="SIM A" {{ old('jenis_sim_sebelumnya', $applications->jenis_sim_sebelumnya ?? '')
                            ==
                            'SIM A' ?
                            'selected' :
                            '' }}>
                            SIM A
                        </option>

                        <option value="SIM B1" {{ old('jenis_sim_sebelumnya', $applications->jenis_sim_sebelumnya ?? '')
                            ==
                            'SIM B1' ?
                            'selected' :
                            '' }}>
                            SIM B1
                        </option>

                        <option value="SIM B1 Umum" {{ old('jenis_sim_sebelumnya', $applications->jenis_sim_sebelumnya
                            ??
                            '')
                            ==
                            'SIM B1 Umum' ?
                            'selected' :
                            '' }}>
                            SIM B1 Umum
                        </option>

                        <option value="SIM B2" {{ old('jenis_sim_sebelumnya', $applications->jenis_sim_sebelumnya ?? '')
                            ==
                            'SIM B2' ?
                            'selected' :
                            '' }}>
                            SIM B2
                        </option>

                        <option value="SIM B2 Umum" {{ old('jenis_sim_sebelumnya', $applications->jenis_sim_sebelumnya
                            ??
                            '')
                            ==
                            'SIM B2 Umum' ?
                            'selected' :
                            '' }}>
                            SIM B2 Umum
                        </option>

                        <option value="SIM C" {{ old('jenis_sim_sebelumnya', $applications->jenis_sim_sebelumnya ?? '')
                            ==
                            'SIM C' ?
                            'selected' :
                            '' }}>
                            SIM C
                        </option>

                    </select>

                    @error('jenis_sim_sebelumnya')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- END OF SIM SECTION --}}

                {{-- START NPWP SECTION --}}
                <div class="md:col-span-2">
                    <label for="nomor_npwp" class="label">
                        Nomor NPWP*
                    </label>

                    <input type="text" name="nomor_npwp" id="nomor_npwp" placeholder="Masukkan nomor NPWP Anda"
                        value="{{ old('nomor_npwp', $applications->nomor_npwp ?? '') }}"
                        class="input w-full @error('nomor_npwp') text-danger @enderror">

                    @error('nomor_npwp')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- Upload NPWP --}}
                <div class="border-2 border-dashed rounded-xl p-6 text-center
                    @error('file_npwp') text-danger @else border-gray-300 @enderror">

                    <input type="file" name="file_npwp" id="file_npwp" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_npwp" class="cursor-pointer block">
                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <h4 class="font-semibold">Upload NPWP</h4>
                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>
                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>
                    </label>
                    <p id="file_npwp_filename" class="mt-2 text-sm text-primary hidden"></p>
                    @error('file_npwp')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- File NPWP --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_npwp) && Storage::disk('public')->exists($applications->file_npwp))

                    <a href="{{ asset('storage/' . $applications->file_npwp) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download NPWP
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File NPWP belum diupload
                        </h4>
                    </div>

                    @endif

                </div>
                {{-- END OF NPWP SECTION --}}

                {{-- REKENING BANK SECTION --}}
                {{-- Nomor rekening bank --}}
                <div class="md:col-span-2">
                    <label for="nomor_rekening" class="label">
                        Nomor Rekening Bank*
                    </label>

                    <input type="text" name="nomor_rekening" id="nomor_rekening"
                        placeholder="Masukkan nomor rekening bank Anda"
                        value="{{ old('nomor_rekening', $applications->nomor_rekening ?? '') }}"
                        class="input w-full @error('nomor_rekening') text-danger @enderror">

                    @error('nomor_rekening')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Upload Rekening Bank -->
                <div
                    class="border-2 border-dashed rounded-xl p-8 text-center transition-colors cursor-pointer @error('file_rekening') text-danger @else border-border hover:border-primary @enderror">

                    <input type="file" name="file_rekening" id="file_rekening" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_rekening" class="cursor-pointer block">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold mb-2">
                            Upload Rekening Bank
                        </h4>

                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>

                    </label>

                    <!-- Nama File -->
                    <p id="file_rekening_filename" class="mt-3 text-sm text-primary font-medium hidden"></p>

                    <!-- Error -->
                    @error('file_rekening')
                    <p class="text-danger text-sm mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- File Rekening Bank --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_rekening) &&
                    Storage::disk('public')->exists($applications->file_rekening))

                    <a href="{{ asset('storage/' . $applications->file_rekening) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download Rekening Bank
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File Rekening Bank belum diupload
                        </h4>
                    </div>

                    @endif

                </div>
                {{-- END OF REKENING BANK SECTION --}}

                {{-- SKCK Section --}}
                <!-- Upload SKCK -->
                <div
                    class="border-2 border-dashed rounded-xl p-8 text-center transition-colors cursor-pointer @error('file_skck') text-danger @else border-border hover:border-primary @enderror">

                    <input type="file" name="file_skck" id="file_skck" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_skck" class="cursor-pointer block">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold mb-2">
                            Upload SKCK
                        </h4>

                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>

                    </label>

                    <!-- Nama File -->
                    <p id="file_skck_filename" class="mt-3 text-sm text-primary font-medium hidden"></p>

                    <!-- Error -->
                    @error('file_skck')
                    <p class="text-danger text-sm mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- File SKCK --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_skck) && Storage::disk('public')->exists($applications->file_skck))

                    <a href="{{ asset('storage/' . $applications->file_skck) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download SKCK
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File SKCK belum diupload
                        </h4>
                    </div>

                    @endif

                </div>
                {{-- END OF SKCK SECTION --}}

                {{-- ALAMAT SECTION --}}
                {{-- Alamat KTP --}}
                <div class="md:col-span-2">
                    <label for="alamat_ktp" class="label">
                        Alamat KTP*
                    </label>

                    <input type="text" name="alamat_ktp" id="alamat_ktp" placeholder="Masukkan alamat KTP Anda"
                        value="{{ old('alamat_ktp', $applications->alamat_ktp ?? '') }}"
                        class="input w-full @error('alamat_ktp') text-danger @enderror">

                    @error('alamat_ktp')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- Alamat Domisili --}}
                <div class="md:col-span-2">
                    <label for="alamat_domisili" class="label">
                        Alamat Domisili*
                    </label>

                    <input type="text" name="alamat_domisili" id="alamat_domisili"
                        placeholder="Masukkan alamat domisili Anda"
                        value="{{ old('alamat_domisili', $applications->alamat_domisili ?? '') }}"
                        class="input w-full @error('alamat_domisili') text-danger @enderror">

                    @error('alamat_domisili')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- END OF ALAMAT SECTION --}}


                {{-- STATUS TEMPAT TINGGAL SECTION --}}
                {{-- status tempat tinggal --}}
                <div class="md:col-span-2">
                    <label for="status_tempat_tinggal" class="label">
                        Status Tempat Tinggal*
                    </label>

                    <select name="status_tempat_tinggal" id="status_tempat_tinggal"
                        class="input w-full @error('status_tempat_tinggal') text-danger @enderror">

                        <option value="">-- Pilih Status Tempat Tinggal --</option>

                        <option value="Milik Sendiri" {{ old('status_tempat_tinggal', $applications->
                            status_tempat_tinggal
                            ?? '') ==
                            'Milik Sendiri' ?
                            'selected' :
                            '' }}>
                            Milik Sendiri
                        </option>

                        <option value="Milik Orangtua" {{ old('status_tempat_tinggal', $applications->
                            status_tempat_tinggal
                            ?? '') ==
                            'Milik Orangtua' ?
                            'selected' :
                            '' }}>
                            Milik Orangtua
                        </option>

                        <option value="Sewa/Kontrak" {{ old('status_tempat_tinggal', $applications->
                            status_tempat_tinggal
                            ?? '') ==
                            'Sewa/Kontrak' ?
                            'selected' :
                            '' }}>
                            Sewa/Kontrak
                        </option>


                        <option value="Indekost" {{ old('status_tempat_tinggal', $applications->status_tempat_tinggal ??
                            '') ==
                            'Indekost' ?
                            'selected' :
                            '' }}>
                            Indekost
                        </option>


                        <option value="Lainnya" {{ old('status_tempat_tinggal', $applications->status_tempat_tinggal ??
                            '')
                            ==
                            'Lainnya' ?
                            'selected' :
                            '' }}>
                            Lainnya
                        </option>

                    </select>

                    @error('status_tempat_tinggal')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- END OF STATUS TEMPAT TINGGAL SECTION --}}


                {{-- Nomor hp --}}
                <div class="md:col-span-2">
                    <label for="nomor_telepon" class="label">
                        Nomor Telepon*
                    </label>

                    <input type="text" name="nomor_telepon" id="nomor_telepon" placeholder="Masukkan nomor telepon Anda"
                        value="{{ old('nomor_telepon', $applications->nomor_telepon ?? '') }}"
                        class="input w-full @error('nomor_telepon') text-danger @enderror">

                    @error('nomor_telepon')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of nomor hp --}}

                {{-- Email --}}
                <div class="md:col-span-2">
                    <label for="email" class="label">
                        Email Aktif *
                    </label>

                    <input type="email" name="email" id="email" placeholder="Masukkan email Anda"
                        value="{{ old('email', $applications->email ?? '') }}"
                        class="input w-full @error('email') text-danger @enderror">

                    @error('email')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of nomor hp --}}

                {{-- Pendidikan --}}
                <div class="md:col-span-2">
                    <label for="pendidikan" class="label">
                        Pendidikan Terakhir*
                    </label>

                    <select name="pendidikan" id="pendidikan"
                        class="input w-full @error('pendidikan') text-danger @enderror">

                        <option value="">-- Pilih Pendidikan Terakhir --</option>

                        <option value="SD" {{ old('pendidikan', $applications->pendidikan ?? '') ==
                            'SD' ?
                            'selected' :
                            '' }}>
                            SD
                        </option>

                        <option value="SMP" {{ old('pendidikan', $applications->pendidikan ?? '') ==
                            'SMP' ?
                            'selected' :
                            '' }}>
                            SMP
                        </option>

                        <option value="SMA/SMK" {{ old('pendidikan', $applications->pendidikan ?? '') ==
                            'SMA/SMK' ?
                            'selected' :
                            '' }}>
                            SMA/SMK
                        </option>

                        <option value="D3" {{ old('pendidikan', $applications->pendidikan ?? '') ==
                            'D3' ?
                            'selected' :
                            '' }}>
                            D3
                        </option>

                        <option value="S1" {{ old('pendidikan', $applications->pendidikan ?? '') ==
                            'S1' ?
                            'selected' :
                            '' }}>
                            S1
                        </option>

                        <option value="S2" {{ old('pendidikan', $applications->pendidikan ?? '') ==
                            'S2' ?
                            'selected' :
                            '' }}>
                            S2
                        </option>


                        <option value="S3" {{ old('pendidikan', $applications->pendidikan ?? '') ==
                            'S3' ?
                            'selected' :
                            '' }}>
                            S3
                        </option>

                    </select>

                    @error('pendidikan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- END OF STATUS TEMPAT TINGGAL SECTION --}}


                {{-- Jurusan --}}
                <div class="md:col-span-2">
                    <label for="jurusan" class="label">
                        Jurusan*
                    </label>

                    <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan jurusan Anda"
                        value="{{ old('jurusan', $applications->jurusan ?? '') }}"
                        class="input w-full @error('jurusan') text-danger @enderror">

                    @error('jurusan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of jurusan --}}


                {{-- Universitas --}}
                <div class="md:col-span-2">
                    <label for="universitas" class="label">
                        Nama Sekolah / Universitas*
                    </label>

                    <input type="text" name="universitas" id="universitas" placeholder="Masukkan universitas Anda"
                        value="{{ old('universitas', $applications->universitas ?? '') }}"
                        class="input w-full @error('universitas') text-danger @enderror">

                    @error('universitas')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of universitas --}}


                {{-- Tahun lulus --}}
                <div class="md:col-span-2">
                    <label for="tahun_lulus" class="label">
                        Tahun Lulus *
                    </label>

                    <select name="tahun_lulus" id="tahun_lulus"
                        class="input w-full @error('tahun_lulus') text-danger @enderror">
                        <option value="">-- Pilih Tahun Lulus --</option>
                        @php
                        $currentYear = date('Y');
                        @endphp
                        @for ($year = $currentYear; $year >= 1950; $year--)
                        <option value="{{ $year }}" {{ old('tahun_lulus', $applications->tahun_lulus ?? '') == $year ?
                            'selected' : '' }}>
                            {{ $year }}
                        </option>
                        @endfor
                    </select>

                    @error('tahun_lulus')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of tahun lulus --}}


                {{-- IPK --}}
                <div class="md:col-span-2">
                    <label for="ipk" class="label">
                        IPK*
                    </label>

                    <input type="number" name="ipk" id="ipk" placeholder="Masukkan IPK Anda"
                        value="{{ old('ipk', $applications->ipk ?? '') }}"
                        class="input w-full @error('ipk') text-danger @enderror">

                    @error('ipk')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of ipk --}}

                {{-- IJAZAH AND TRANSCRIPT --}}
                <!-- Upload Ijazah -->
                <div
                    class="border-2 border-dashed rounded-xl p-8 text-center transition-colors cursor-pointer @error('file_ijazah') text-danger @else border-border hover:border-primary @enderror">

                    <input type="file" name="file_ijazah" id="file_ijazah" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_ijazah" class="cursor-pointer block">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold mb-2">
                            Upload Ijazah
                        </h4>

                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>

                    </label>

                    <!-- Nama File -->
                    <p id="file_ijazah_filename" class="mt-3 text-sm text-primary font-medium hidden"></p>

                    <!-- Error -->
                    @error('file_ijazah')
                    <p class="text-danger text-sm mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- File Ijazah --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_ijazah) &&
                    Storage::disk('public')->exists($applications->file_ijazah))

                    <a href="{{ asset('storage/' . $applications->file_ijazah) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download Ijazah
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File Ijazah belum diupload
                        </h4>
                    </div>

                    @endif

                </div>


                <!-- Upload Transkrip -->
                <div
                    class="border-2 border-dashed rounded-xl p-8 text-center transition-colors cursor-pointer @error('file_transkrip') text-danger @else border-border hover:border-primary @enderror">

                    <input type="file" name="file_transkrip" id="file_transkrip" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_transkrip" class="cursor-pointer block">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold mb-2">
                            Upload Transkrip
                        </h4>

                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>

                    </label>

                    <!-- Nama File -->
                    <p id="file_transkrip_filename" class="mt-3 text-sm text-primary font-medium hidden"></p>

                    <!-- Error -->
                    @error('file_transkrip')
                    <p class="text-danger text-sm mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- File Transkrip --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_transkrip) &&
                    Storage::disk('public')->exists($applications->file_transkrip))

                    <a href="{{ asset('storage/' . $applications->file_transkrip) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download Transkrip
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File Transkrip belum diupload
                        </h4>
                    </div>

                    @endif

                </div>
                {{-- END OF IJAZAH AND TRANSKRIP SECTION --}}

                {{-- KENDARAAN SECTION--}}
                {{-- jenis kendaraan --}}
                <div class="md:col-span-2">
                    <label for="jenis_kendaraan" class="label">
                        Jenis Kendaraan *
                    </label>

                    <select name="jenis_kendaraan" id="jenis_kendaraan"
                        class="input w-full @error('jenis_kendaraan') text-danger @enderror">

                        <option value="">-- Pilih Jenis Kendaraan --</option>

                        <option value="Tidak Memiliki" {{ old('jenis_kendaraan', $applications->jenis_kendaraan ?? '')
                            ==
                            'Tidak Memiliki' ?
                            'selected' :
                            '' }}>
                            Tidak Memiliki Kendaraan
                        </option>

                        <option value="Sepeda Motor" {{ old('jenis_kendaraan', $applications->jenis_kendaraan ?? '') ==
                            'Sepeda Motor' ?
                            'selected' :
                            '' }}>
                            Sepeda Motor
                        </option>

                        <option value="Mobil" {{ old('jenis_kendaraan', $applications->jenis_kendaraan ?? '') ==
                            'Mobil' ?
                            'selected' :
                            '' }}>
                            Mobil
                        </option>

                    </select>

                    @error('jenis_kendaraan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- merk kendaraan --}}
                <div class="md:col-span-2">
                    <label for="merk_kendaraan" class="label">
                        Merk Kendaraan *
                    </label>

                    <input type="text" name="merk_kendaraan" id="merk_kendaraan" placeholder="Masukkan Merk Kendaraan"
                        value="{{ old('merk_kendaraan', $applications->merk_kendaraan ?? '') }}"
                        class="input w-full @error('merk_kendaraan') text-danger @enderror">

                    @error('merk_kendaraan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of merk kendaraan --}}

                {{-- kepemilikan kendaraan --}}
                <div class="md:col-span-2">
                    <label for="kepemilikan_kendaraan" class="label">
                        Kepemilikan Kendaraan *
                    </label>

                    <select name="kepemilikan_kendaraan" id="kepemilikan_kendaraan"
                        class="input w-full @error('kepemilikan_kendaraan') text-danger @enderror">

                        <option value="">-- Pilih Kepemilikan Kendaraan --</option>

                        <option value="Milik Sendiri" {{ old('kepemilikan_kendaraan', $applications->
                            kepemilikan_kendaraan
                            ?? '') ==
                            'Milik Sendiri' ?
                            'selected' :
                            '' }}>
                            Milik Sendiri
                        </option>

                        <option value="Milik Orangtua" {{ old('kepemilikan_kendaraan', $applications->
                            kepemilikan_kendaraan
                            ?? '') ==
                            'Milik Orangtua' ?
                            'selected' :
                            '' }}>
                            Milik Orangtua
                        </option>

                        <option value="Milik Kantor" {{ old('kepemilikan_kendaraan', $applications->
                            kepemilikan_kendaraan
                            ?? '') ==
                            'Milik Kantor' ?
                            'selected' :
                            '' }}>
                            Milik Kantor
                        </option>

                        <option value="Lainnya" {{ old('kepemilikan_kendaraan', $applications->kepemilikan_kendaraan ??
                            '')
                            ==
                            'Lainnya' ?
                            'selected' :
                            '' }}>
                            Lainnya
                        </option>

                    </select>

                    @error('kepemilikan_kendaraan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- END OF JENIS KENDARAAN SECTION --}}

                {{-- SECTION PENEMPATAN --}}
                {{-- bersedia_luar_kota --}}
                <div class="md:col-span-2">
                    <label for="bersedia_luar_kota" class="label">
                        Bersedia Melakukan Perjalanan Dinas ke Luar Kota *
                    </label>

                    <select name="bersedia_luar_kota" id="bersedia_luar_kota"
                        class="input w-full @error('bersedia_luar_kota') text-danger @enderror">

                        <option value="">-- Pilih--</option>

                        <option value="Ya" {{ old('bersedia_luar_kota', $applications->bersedia_luar_kota
                            ?? '') ==
                            'Ya' ?
                            'selected' :
                            '' }}>
                            Ya
                        </option>

                        <option value="Tidak" {{ old('bersedia_luar_kota', $applications->bersedia_luar_kota
                            ?? '') ==
                            'Tidak' ?
                            'selected' :
                            '' }}>
                            Tidak
                        </option>

                    </select>

                    @error('bersedia_luar_kota')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- bersedia_penemparan --}}
                <div class="md:col-span-2">
                    <label for="bersedia_penempatan" class="label">
                        Bersedia Ditempatkan di Seluruh Indonesia? *
                    </label>

                    <select name="bersedia_penempatan" id="bersedia_penempatan"
                        class="input w-full @error('bersedia_penempatan') text-danger @enderror">

                        <option value="">--Pilih--</option>

                        <option value="Ya" {{ old('bersedia_penempatan', $applications->bersedia_penempatan
                            ?? '') ==
                            'Ya' ?
                            'selected' :
                            '' }}>
                            Ya
                        </option>

                        <option value="Tidak" {{ old('bersedia_penempatan', $applications->bersedia_penempatan
                            ?? '') ==
                            'Tidak' ?
                            'selected' :
                            '' }}>
                            Tidak
                        </option>
                    </select>

                    @error('bersedia_penempatan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- END OF PENEMPATAN SECTION --}}

                {{-- SECTION IBU KANDUNG --}}
                {{-- nama ibu kandung --}}
                <div class="md:col-span-2">
                    <label for="nama_ibu_kandung" class="label">
                        Nama Ibu Kandung *
                    </label>

                    <input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung"
                        placeholder="Masukkan Nama Ibu Kandung"
                        value="{{ old('nama_ibu_kandung', $applications->nama_ibu_kandung ?? '') }}"
                        class="input w-full @error('nama_ibu_kandung') text-danger @enderror">

                    @error('nama_ibu_kandung')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of nama ibu kandung --}}


                {{-- tempat lahir ibu kandung --}}
                <div class="md:col-span-2">
                    <label for="tempat_lahir_ibu_kandung" class="label">
                        Tempat Lahir Ibu Kandung *
                    </label>

                    <input type="text" name="tempat_lahir_ibu_kandung" id="tempat_lahir_ibu_kandung"
                        placeholder="Masukkan Tempat Lahir Ibu Kandung"
                        value="{{ old('tempat_lahir_ibu_kandung', $applications->tempat_lahir_ibu_kandung ?? '') }}"
                        class="input w-full @error('tempat_lahir_ibu_kandung') text-danger @enderror">

                    @error('tempat_lahir_ibu_kandung')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of tempat lahir ibu kandung --}}


                {{-- tanggal_lahir_ibu_kandung --}}
                <div class="md:col-span-2">
                    <label for="tanggal_lahir_ibu_kandung" class="label">
                        Tanggal Lahir Ibu Kandung *
                    </label>

                    <input type="date" name="tanggal_lahir_ibu_kandung" id="tanggal_lahir_ibu_kandung"
                        placeholder="Masukkan Tanggal Lahir Ibu Kandung"
                        value="{{ old('tanggal_lahir_ibu_kandung', $applications->tanggal_lahir_ibu_kandung ?? '') }}"
                        class="input w-full @error('tanggal_lahir_ibu_kandung') text-danger @enderror">

                    @error('tanggal_lahir_ibu_kandung')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of tanggal_lahir_ibu_kandung --}}

                {{-- pekerjaan_ibu --}}
                <div class="md:col-span-2">
                    <label for="pekerjaan_ibu" class="label">
                        Pekerjaan Terakhir Ibu Kandung *
                    </label>

                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu"
                        placeholder="Masukkan Pekerjaan Ibu Kandung"
                        value="{{ old('pekerjaan_ibu', $applications->pekerjaan_ibu ?? '') }}"
                        class="input w-full @error('pekerjaan_ibu') text-danger @enderror">

                    @error('pekerjaan_ibu')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of pekerjaan_ibu --}}


                {{-- jabatan ibu --}}
                <div class="md:col-span-2">
                    <label for="jabatan_ibu" class="label">
                        Jabatan Ibu Kandung *
                    </label>

                    <input type="text" name="jabatan_ibu" id="jabatan_ibu" placeholder="Masukkan Jabatan Ibu Kandung"
                        value="{{ old('jabatan_ibu', $applications->jabatan_ibu ?? '') }}"
                        class="input w-full @error('jabatan_ibu') text-danger @enderror">

                    @error('jabatan_ibu')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of jabatan ibu --}}

                {{-- perusahaan ibu --}}
                <div class="md:col-span-2">
                    <label for="perusahaan_ibu" class="label">
                        Nama Perusahaan Terakhir Ibu *
                    </label>

                    <input type="text" name="perusahaan_ibu" id="perusahaan_ibu"
                        placeholder="Masukkan Perusahaan Terakhir Ibu Kandung"
                        value="{{ old('perusahaan_ibu', $applications->perusahaan_ibu ?? '') }}"
                        class="input w-full @error('perusahaan_ibu') text-danger @enderror">

                    @error('perusahaan_ibu')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of perusahaan ibu --}}
                {{-- END OF SECTION IBU KANDUNG --}}


                {{-- START SECTION REFERENSI --}}
                {{-- nama referensi --}}
                <div class="md:col-span-2">
                    <label for="nama_referensi" class="label">
                        Nama Referensi *
                    </label>

                    <input type="text" name="nama_referensi" id="nama_referensi" placeholder="Masukkan Nama Referensi"
                        value="{{ old('nama_referensi', $applications->nama_referensi ?? '') }}"
                        class="input w-full @error('nama_referensi') text-danger @enderror">

                    @error('nama_referensi')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of nama referensi --}}


                {{-- alamat_referensi --}}
                <div class="md:col-span-2">
                    <label for="alamat_referensi" class="label">
                        Alamat Referensi *
                    </label>

                    <input type="text" name="alamat_referensi" id="alamat_referensi"
                        placeholder="Masukkan Alamat Referensi"
                        value="{{ old('alamat_referensi', $applications->alamat_referensi ?? '') }}"
                        class="input w-full @error('alamat_referensi') text-danger @enderror">

                    @error('alamat_referensi')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of alamat_referensi --}}


                {{-- nomor_telepon_referensi --}}
                <div class="md:col-span-2">
                    <label for="nomor_telepon_referensi" class="label">
                        Nomor Telepon Referensi *
                    </label>

                    <input type="text" name="nomor_telepon_referensi" id="nomor_telepon_referensi"
                        placeholder="Masukkan Nomor Telepon Referensi"
                        value="{{ old('nomor_telepon_referensi', $applications->nomor_telepon_referensi ?? '') }}"
                        class="input w-full @error('nomor_telepon_referensi') text-danger @enderror">

                    @error('nomor_telepon_referensi')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of nomor_telepon_referensi --}}


                {{-- pekerjaan_referensi --}}
                <div class="md:col-span-2">
                    <label for="pekerjaan_referensi" class="label">
                        Pekerjaan/Jabatan Referensi *
                    </label>

                    <input type="text" name="pekerjaan_referensi" id="pekerjaan_referensi"
                        placeholder="Masukkan Pekerjaan Referensi"
                        value="{{ old('pekerjaan_referensi', $applications->pekerjaan_referensi ?? '') }}"
                        class="input w-full @error('pekerjaan_referensi') text-danger @enderror">

                    @error('pekerjaan_referensi')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of pekerjaan_referensi --}}


                {{-- hubungan dengan referensi --}}
                <div class="md:col-span-2">
                    <label for="hubungan_dengan_referensi" class="label">
                        Hubungan dengan Referensi *
                    </label>

                    <input type="text" name="hubungan_dengan_referensi" id="hubungan_dengan_referensi"
                        placeholder="Masukkan Hubungan dengan Referensi"
                        value="{{ old('hubungan_dengan_referensi', $applications->hubungan_dengan_referensi ?? '') }}"
                        class="input w-full @error('hubungan_dengan_referensi') text-danger @enderror">

                    @error('hubungan_dengan_referensi')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of hubungan_dengan_referensi --}}

                {{-- END OF SECTION REFERENSI --}}


                {{-- SECTION SOSIAL MEDIA --}}

                {{-- instagram --}}
                <div class="md:col-span-2">
                    <label for="instagram" class="label">
                        Instagram *
                    </label>

                    <input type="text" name="instagram" id="instagram" placeholder="Masukkan Instagram"
                        value="{{ old('instagram', $applications->instagram ?? '') }}"
                        class="input w-full @error('instagram') text-danger @enderror">

                    @error('instagram')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of instagram --}}

                {{-- facebook --}}
                <div class="md:col-span-2">
                    <label for="facebook" class="label">
                        Facebook *
                    </label>

                    <input type="text" name="facebook" id="facebook" placeholder="Masukkan Facebook"
                        value="{{ old('facebook', $applications->facebook ?? '') }}"
                        class="input w-full @error('facebook') text-danger @enderror">

                    @error('facebook')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of facebook --}}

                {{-- tiktok --}}
                <div class="md:col-span-2">
                    <label for="tiktok" class="label">
                        TikTok *
                    </label>

                    <input type="text" name="tiktok" id="tiktok" placeholder="Masukkan TikTok"
                        value="{{ old('tiktok', $applications->tiktok ?? '') }}"
                        class="input w-full @error('tiktok') text-danger @enderror">

                    @error('tiktok')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- linkedIn --}}
                <div class="md:col-span-2">
                    <label for="linkedin" class="label">
                        LinkedIn *
                    </label>

                    <input type="text" name="linkedin" id="linkedin" placeholder="Masukkan LinkedIn"
                        value="{{ old('linkedin', $applications->linkedin ?? '') }}"
                        class="input w-full @error('linkedin') text-danger @enderror">

                    @error('linkedin')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of linkedin --}}

                {{-- END OF SECTION SOSIAL MEDIA --}}

                {{-- SECTION HOBBY --}}

                {{-- HOBBY --}}
                <div class="md:col-span-2">
                    <label for="hobby" class="label">
                        Hobby *
                    </label>

                    <input type="text" name="hobby" id="hobby" placeholder="Masukkan Hobby"
                        value="{{ old('hobby', $applications->hobby ?? '') }}"
                        class="input w-full @error('hobby') text-danger @enderror">

                    @error('hobby')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of hobby --}}


                {{-- skill --}}
                <div class="md:col-span-2">
                    <label for="skill" class="label">
                        Skill *
                    </label>

                    <input type="text" name="skill" id="skill" placeholder="Masukkan Skill"
                        value="{{ old('skill', $applications->skill ?? '') }}"
                        class="input w-full @error('skill') text-danger @enderror">

                    @error('skill')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of skill --}}


                {{-- pengalaman organisasi --}}
                <div class="md:col-span-2">
                    <label for="pengalaman_organisasi" class="label">
                        Pengalaman Organisasi *
                    </label>

                    <input type="text" name="pengalaman_organisasi" id="pengalaman_organisasi"
                        placeholder="Masukkan Pengalaman Organisasi"
                        value="{{ old('pengalaman_organisasi', $applications->pengalaman_organisasi ?? '') }}"
                        class="input w-full @error('pengalaman_organisasi') text-danger @enderror">

                    @error('pengalaman_organisasi')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of pengalaman organisasi --}}


                {{-- pengalaman kerja --}}
                <div class="md:col-span-2">
                    <label for="pengalaman_kerja" class="label">
                        Pengalaman Kerja *
                    </label>

                    <input type="text" name="pengalaman_kerja" id="pengalaman_kerja"
                        placeholder="Masukkan Pengalaman Kerja"
                        value="{{ old('pengalaman_kerja', $applications->pengalaman_kerja ?? '') }}"
                        class="input w-full @error('pengalaman_kerja') text-danger @enderror">

                    @error('pengalaman_kerja')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of pengalaman kerja --}}


                <!-- Paklaring Terakhir -->
                <div
                    class="border-2 border-dashed rounded-xl p-8 text-center transition-colors cursor-pointer @error('file_paklaring') text-danger @else border-border hover:border-primary @enderror">

                    <input type="file" name="file_paklaring" id="file_paklaring" class="hidden"
                        accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">

                    <label for="file_paklaring" class="cursor-pointer block">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold mb-2">
                            Upload Paklaring Terakhir
                        </h4>

                        <p class="text-sm mb-2">
                            Klik untuk memilih file
                        </p>

                        <p class="text-xs text-gray-500">
                            Format: JPG, JPEG, PNG, PDF, DOC, DOCX (Max. 5MB)
                        </p>

                    </label>

                    <!-- Nama File -->
                    <p id="file_paklaring_filename" class="mt-3 text-sm text-primary font-medium hidden"></p>

                    <!-- Error -->
                    @error('file_paklaring')
                    <p class="text-danger text-sm mt-3">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- File Paklaring --}}
                <div class="border-2 border-dashed rounded-xl p-8 text-center transition-colors">

                    @if (!empty($applications->file_paklaring) &&
                    Storage::disk('public')->exists($applications->file_paklaring))

                    <a href="{{ asset('storage/' . $applications->file_paklaring) }}" target="_blank"
                        class="block cursor-pointer">

                        <div class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                            <!-- Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 11l5 5l5 -5" />
                                <path d="M12 4l0 12" />
                            </svg>
                        </div>

                        <h4 class="text-lg font-semibold">
                            Download Paklaring
                        </h4>
                    </a>

                    @else

                    <div class="text-gray-500">
                        <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                            ❌
                        </div>
                        <h4 class="text-lg font-semibold">
                            File Paklaring belum diupload
                        </h4>
                    </div>

                    @endif

                </div>

                {{-- alasan melamar --}}
                <div class="md:col-span-2">
                    <label for="alasan_melamar" class="label">
                        Alasan Melamar Pekerjaan Ini*
                    </label>

                    <input type="text" name="alasan_melamar" id="alasan_melamar" placeholder="Masukkan Alasan Melamar"
                        value="{{ old('alasan_melamar', $applications->alasan_melamar ?? '') }}"
                        class="input w-full @error('alasan_melamar') text-danger @enderror">

                    @error('alasan_melamar')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of alasan melamar --}}


                {{-- gajin yang diharapkan --}}
                <div class="md:col-span-2">
                    <label for="gaji_diharapkan" class="label">
                        Gaji yang Diharapkan (Dalam Rupiah) *
                    </label>

                    <input type="text" name="gaji_diharapkan" id="gaji_diharapkan"
                        placeholder="Masukkan Gaji yang Diinginkan"
                        value="{{ old('gaji_diharapkan', $applications->gaji_diharapkan ?? '') }}"
                        class="input w-full @error('gaji_diharapkan') text-danger @enderror">

                    @error('gaji_diharapkan')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                {{-- end of gaji diharapkan --}}


                <button type="submit" class="btn btn-primary mt-5">Simpan Perubahan</button>
            </div>

    </form>

</div>

<script>
    function bindFilePreview(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    input.addEventListener('change', function () {
        const fileName = this.files[0]?.name;

        if (fileName) {
            preview.textContent = fileName;
            preview.classList.remove('hidden');
        }
    });
}

bindFilePreview('file_ktp', 'file_ktp_filename');
bindFilePreview('file_kk', 'file_kk_filename');
bindFilePreview('file_sim', 'file_sim_filename');
bindFilePreview('file_npwp', 'file_npwp_filename');
bindFilePreview('file_skck', 'file_skck_filename');
bindFilePreview('file_rekening', 'file_rekening_filename');
bindFilePreview('file_ijazah', 'file_ijazah_filename');
bindFilePreview('file_transkrip', 'file_transkrip_filename');
bindFilePreview('file_paklaring', 'file_paklaring_filename');


</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

    const tanggalInput = document.getElementById("tanggal_berlaku_sim");
    const statusInput  = document.getElementById("status_berlaku_sim");

    function hitungStatus() {
        const tanggalValue = tanggalInput.value;

        if (!tanggalValue) {
            statusInput.value = "";
            return;
        }

        const tanggalBerlaku = new Date(tanggalValue);
        const today = new Date();

        // Tambah 1 tahun dari hari ini
        const batas = new Date();
        batas.setFullYear(today.getFullYear() + 1);

        if (tanggalBerlaku > batas) {
            statusInput.value = "LULUS";
            statusInput.classList.remove("text-red-600");
            statusInput.classList.add("text-green-600");
        } else {
            statusInput.value = "TIDAK LULUS";
            statusInput.classList.remove("text-green-600");
            statusInput.classList.add("text-red-600");
        }
    }

    // Trigger saat tanggal berubah
    tanggalInput.addEventListener("change", hitungStatus);

    // Jika edit data lama (pre-filled value)
    hitungStatus();
});
</script>

@endsection