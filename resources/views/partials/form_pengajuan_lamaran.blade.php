<div class="lg:col-span-2">
    <form class="space-y-8" method="POST" action="{{ route('lamaran.store') }}" enctype="multipart/form-data">
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
                    <h3 class="text-xl font-bold text-text-primary font-heading">Ajukan Lamaran
                    </h3>
                    <p class="text-sm text-text-secondary font-caption">Isi data di bawa ini
                        untuk mengajukan lamaran kerja Anda
                    </p>
                </div>
            </div>

            <div class="gap-6">

                <div class="md:col-span-2 mb-3">
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

                <div class="md:col-span-2 mb-3">
                    <label>Kabupaten / Kota</label>
                    <select id="kabupaten" class="input w-full" name="kabupaten">
                        <option value="">-- Pilih Kabupaten/Kota --</option>
                    </select>
                </div>

                <div class="md:col-span-2 mb-3">
                    <label>Area</label>
                    <select id="area" class="input w-full" name="area">
                        <option value="">-- Pilih Area --</option>
                        @foreach($areas as $area)
                        <option value="{{ $area['nama_area'] }}">
                            {{ $area['nama_area'] }}
                        </option>
                        @endforeach
                    </select>
                </div>


                <div class="md:col-span-2 mb-3">
                    <label>Posisi yang dilamar</label>
                    <select id="posisi" class="input w-full" name="posisi">
                        <option value="">-- Pilih Posisi --</option>
                        @foreach($jabatans as $jabatan)
                        <option value="{{ $jabatan['nama_jabatan'] }}">
                            {{ $jabatan['nama_jabatan'] }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="md:col-span-2 mb-3">
                    <label for="address" class="label">Nama Lengkap *</label>
                    <input type="text" class="input w-full" name="nama_lengkap" id="nama_lengkap"
                        placeholder="Masukkan nama lengkap Anda" value="{{ Auth::user()->name }}">
                </div>


                <div class="md:col-span-2 mb-3">
                    <label for="tanggal_lahir" class="label">
                        Tanggal Lahir *
                    </label>

                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan tanggal lahir Anda"
                        value="{{ old('tanggal_lahir', $applicant->tanggal_lahir ?? '') }}"
                        class="input w-full @error('tanggal_lahir') text-danger @enderror">

                    @error('tanggal_lahir')
                    <p class="text-danger text-sm mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>


                {{-- status perkawinan --}}
                <div class="md:col-span-2 mb-3">
                    <label for="status_perkawinan" class="label">
                        Status Perkawinan
                        *
                    </label>

                    <select name="status_perkawinan" id="status_perkawinan"
                        class="input w-full @error('status_perkawinan') text-danger @enderror">

                        <option value="">-- Pilih Status Perkawinan --</option>

                        <option value="Menikah" {{ old('status_perkawinan', $applicant->status_perkawinan ?? '')
                            ==
                            'Menikah' ?
                            'selected' :
                            '' }}>
                            Menikah
                        </option>

                        <option value="Lajang" {{ old('status_perkawinan', $applicant->status_perkawinan ?? '') ==
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

                {{-- status usia --}}
                <div class="md:col-span-2 mb-3">
                    <label for="status_usia" class="label">
                        Status Usia*
                    </label>

                    <input type="text" name="status_usia" id="status_usia" class="input w-full bg-gray-100" readonly>
                </div>

                <div id="sim_section" style="display: none">

                    {{-- jenis sim --}}
                    <div class="md:col-span-2 mb-3">
                        <label for="jenis_sim" class="label">
                            Jenis SIM
                            *
                        </label>

                        <select name="jenis_sim" id="jenis_sim"
                            class="input w-full @error('jenis_sim') text-danger @enderror">

                            <option value="">-- Pilih Jenis SIM --</option>

                            <option value="Tidak Memiliki SIM" {{ old('jenis_sim', $applicant->jenis_sim ?? '')
                                ==
                                'Tidak Memiliki SIM' ?
                                'selected' :
                                '' }}>
                                Tidak Memiliki SIM
                            </option>


                            <option value="SIM A" {{ old('jenis_sim', $applicant->jenis_sim ?? '')
                                ==
                                'SIM A' ?
                                'selected' :
                                '' }}>
                                SIM A
                            </option>

                            <option value="SIM B1" {{ old('jenis_sim', $applicant->jenis_sim ?? '')
                                ==
                                'SIM B1' ?
                                'selected' :
                                '' }}>
                                SIM B1
                            </option>

                            <option value="SIM B1 Umum" {{ old('jenis_sim', $applicant->jenis_sim ?? '')
                                ==
                                'SIM B1 Umum' ?
                                'selected' :
                                '' }}>
                                SIM B1 Umum
                            </option>

                            <option value="SIM B2" {{ old('jenis_sim', $applicant->jenis_sim ?? '')
                                ==
                                'SIM B2' ?
                                'selected' :
                                '' }}>
                                SIM B2
                            </option>

                            <option value="SIM B2 Umum" {{ old('jenis_sim', $applicant->jenis_sim ?? '')
                                ==
                                'SIM B2 Umum' ?
                                'selected' :
                                '' }}>
                                SIM B2 Umum
                            </option>

                            <option value="SIM C" {{ old('jenis_sim', $applicant->jenis_sim ?? '')
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


                    {{-- nomor tanggal berlaku sim --}}
                    <div class="md:col-span-2 mb-3">
                        <label for="tanggal_berlaku_sim" class="label">
                            Tanggal Berlaku SIM*
                        </label>

                        <input type="date" name="tanggal_berlaku_sim" id="tanggal_berlaku_sim"
                            placeholder="Masukkan tanggal berlaku SIM Anda"
                            value="{{ old('tanggal_berlaku_sim', $applicant->tanggal_berlaku_sim ?? '') }}"
                            class="input w-full @error('tanggal_berlaku_sim') text-danger @enderror">

                        @error('tanggal_berlaku_sim')
                        <p class="text-danger text-sm mt-1">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    {{-- status berlaku SIM --}}
                    <div class="md:col-span-2 mb-3">
                        <label for="status_berlaku_sim" class="label">
                            Status Masa Berlaku SIM*
                        </label>

                        <input type="text" name="status_berlaku_sim" id="status_berlaku_sim"
                            class="input w-full bg-gray-100" readonly>
                        <small>Akan otomatis <b>"TIDAK LULUS"</b> apabila umur SIM kurang dari 1
                            tahun.</small>
                    </div>

                    {{-- jenis sim sebelumnya --}}
                    <div class="md:col-span-2 mb-3">
                        <label for="jenis_sim_sebelumnya" class="label">
                            Jenis SIM Sebelumnya
                            *
                        </label>

                        <select name="jenis_sim_sebelumnya" id="jenis_sim_sebelumnya"
                            class="input w-full @error('jenis_sim_sebelumnya') text-danger @enderror">

                            <option value="">-- Pilih Jenis SIM Sebelumnya --</option>

                            <option value="Tidak Memiliki SIM" {{ old('jenis_sim_sebelumnya', $applicant->
                                jenis_sim_sebelumnya ?? '')
                                ==
                                'Tidak Memiliki SIM' ?
                                'selected' :
                                '' }}>
                                Tidak Memiliki SIM
                            </option>


                            <option value="SIM A" {{ old('jenis_sim_sebelumnya', $applicant->jenis_sim_sebelumnya ?? '')
                                ==
                                'SIM A' ?
                                'selected' :
                                '' }}>
                                SIM A
                            </option>

                            <option value="SIM B1" {{ old('jenis_sim_sebelumnya', $applicant->jenis_sim_sebelumnya ??
                                '')
                                ==
                                'SIM B1' ?
                                'selected' :
                                '' }}>
                                SIM B1
                            </option>

                            <option value="SIM B1 Umum" {{ old('jenis_sim_sebelumnya', $applicant->jenis_sim_sebelumnya
                                ??
                                '')
                                ==
                                'SIM B1 Umum' ?
                                'selected' :
                                '' }}>
                                SIM B1 Umum
                            </option>

                            <option value="SIM B2" {{ old('jenis_sim_sebelumnya', $applicant->jenis_sim_sebelumnya ??
                                '')
                                ==
                                'SIM B2' ?
                                'selected' :
                                '' }}>
                                SIM B2
                            </option>

                            <option value="SIM B2 Umum" {{ old('jenis_sim_sebelumnya', $applicant->jenis_sim_sebelumnya
                                ??
                                '')
                                ==
                                'SIM B2 Umum' ?
                                'selected' :
                                '' }}>
                                SIM B2 Umum
                            </option>

                            <option value="SIM C" {{ old('jenis_sim_sebelumnya', $applicant->jenis_sim_sebelumnya ?? '')
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

                </div>

            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-end">
            <button type="button" class="btn-ghost h-12 px-8">
                Batal
            </button>
            <button type="submit" class="btn-primary h-12 px-8 group">
                <span>Simpan</span>
            </button>
        </div>
    </form>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {

    const tanggalLahirInput = document.getElementById("tanggal_lahir");
    const statusPerkawinanInput = document.getElementById("status_perkawinan");
    const statusUsiaInput = document.getElementById("status_usia");

    function hitungUsia(tanggalLahir) {
        const today = new Date();
        const birthDate = new Date(tanggalLahir);

        let usia = today.getFullYear() - birthDate.getFullYear();
        const m = today.getMonth() - birthDate.getMonth();

        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            usia--;
        }

        return usia;
    }

    function updateStatusUsia() {
        const tanggalLahir = tanggalLahirInput.value;
        const statusPerkawinan = statusPerkawinanInput.value;

        if (!tanggalLahir || !statusPerkawinan) {
            statusUsiaInput.value = "";
            return;
        }

        const usia = hitungUsia(tanggalLahir);

        let lulus = false;

        if (statusPerkawinan === "Menikah") {
            lulus = usia >= 20 && usia <= 51;
        }
        else if (statusPerkawinan === "Lajang") {
            lulus = usia >= 25 && usia <= 51;
        }

        if (lulus) {
            statusUsiaInput.value = "LULUS";
            statusUsiaInput.classList.remove("text-red-600");
            statusUsiaInput.classList.add("text-green-600");
        } else {
            statusUsiaInput.value = "TIDAK LULUS";
            statusUsiaInput.classList.remove("text-green-600");
            statusUsiaInput.classList.add("text-red-600");
        }
    }

    tanggalLahirInput.addEventListener("change", updateStatusUsia);
    statusPerkawinanInput.addEventListener("change", updateStatusUsia);

    // Jika edit data lama
    updateStatusUsia();
});
</script>


{{-- status berlaku SIM --}}
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

{{-- conditional untuk SIM berdasarkan posisi yang dilamar --}}

<script>
    document.addEventListener("DOMContentLoaded", function () {

    const posisiSelect = document.getElementById("posisi");
    const simSection = document.getElementById("sim_section");

    function toggleSimSection() {
        const selectedText = posisiSelect.options[posisiSelect.selectedIndex]?.text || "";

        if (selectedText.toLowerCase().includes("driver")) {
            simSection.style.display = "block";
        } else {
            simSection.style.display = "none";

            // Optional: reset field jika disembunyikan
            document.getElementById("jenis_sim").value = "";
            document.getElementById("tanggal_berlaku_sim").value = "";
            document.getElementById("status_berlaku_sim").value = "";
            document.getElementById("jenis_sim_sebelumnya").value = "";
        }
    }

    posisiSelect.addEventListener("change", toggleSimSection);

    // Jika edit data lama
    toggleSimSection();
});
</script>