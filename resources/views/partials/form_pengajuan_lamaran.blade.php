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

            <div class="grid md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label for="address" class="label">Nama Lengkap *</label>
                    <input type="text" class="input w-full" name="nama_lengkap" id="nama_lengkap"
                        placeholder="Masukkan nama lengkap Anda" value="{{ Auth::user()->name }}">
                </div>

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
                    <select id="kabupaten" class="input w-full" name="kabupaten">
                        <option value="">-- Pilih Kabupaten/Kota --</option>
                    </select>
                </div>

                <div class="md:col-span-2">
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


                <div class="md:col-span-2">
                    <label>Posisi yang dilamar</label>
                    <select id="posisi" class="input w-full" name="posisi">
                        <option value="">-- Pilih Posisi --</option>
                        @foreach($jabatans as $jabatan)
                        <option value="{{ $jabatan['id'] }}">
                            {{ $jabatan['nama_jabatan'] }}
                        </option>
                        @endforeach
                    </select>
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