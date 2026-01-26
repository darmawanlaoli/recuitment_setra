<!-- Hero Section -->
<x-guest-layout>
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-50 via-secondary-50 to-accent-50">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="hero-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                        <circle cx="20" cy="20" r="1.5" fill="currentColor" class="text-primary" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hero-pattern)" />
            </svg>
        </div>

        <div class="relative container mx-auto container-padding py-16 md:py-24 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="space-y-8">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-100 text-primary-700 text-sm font-medium font-caption">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span>Perusahaan Terpercaya Sejak 2010</span>
                    </div>

                    <div class="space-y-4">
                        <h1
                            class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-text-primary leading-tight">
                            Wujudkan Karir
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Impian
                                Anda</span>
                        </h1>
                        <p class="text-lg md:text-xl text-text-secondary leading-relaxed max-w-2xl">
                            Bergabunglah dengan PT. Setra Praba Perkasa dan kembangkan potensi Anda bersama tim
                            profesional yang berdedikasi untuk menciptakan masa depan yang lebih baik.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#lowongan" class="btn-primary h-14 px-8 text-base group">
                            <span>Lihat Lowongan</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="user_registration.html" class="btn-outline h-14 px-8 text-base">
                            Daftar Sekarang
                        </a>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-border">
                        <div class="space-y-1">
                            <div class="text-3xl font-bold text-primary font-heading">150+</div>
                            <div class="text-sm text-text-secondary font-caption">Lowongan Aktif</div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-3xl font-bold text-secondary font-heading">2.5K+</div>
                            <div class="text-sm text-text-secondary font-caption">Karyawan</div>
                        </div>
                        <div class="space-y-1">
                            <div class="text-3xl font-bold text-accent font-heading">95%</div>
                            <div class="text-sm text-text-secondary font-caption">Kepuasan</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative hidden lg:block">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_133784c5f-1766991635843.png"
                            alt="Tim profesional PT. Setra Praba Perkasa sedang berkolaborasi di kantor modern"
                            class="w-full h-[600px] object-cover" loading="lazy"
                            onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                    </div>
                    <!-- Floating Card -->
                    <div class="absolute -bottom-6 -left-6 bg-surface rounded-xl shadow-xl p-6 max-w-xs">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-success-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-text-primary">3.2K+ Kandidat</div>
                                <div class="text-sm text-text-secondary">Berhasil Diterima</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Highlights Section -->
    <section id="tentang" class="section-spacing bg-gradient-to-br from-primary-50 via-white to-secondary-50">
        <div class="container mx-auto container-padding">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary-50 text-secondary-700 text-sm font-medium font-caption mb-4">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                    <span>Mengapa Bergabung dengan Kami</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4 font-heading">
                    Keunggulan Bekerja di PT. Setra Praba Perkasa
                </h2>
                <p class="text-lg text-text-secondary">
                    Kami berkomitmen untuk menciptakan lingkungan kerja yang mendukung pertumbuhan dan kesejahteraan
                    karyawan
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Benefit 1 -->
                <div class="card group hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-primary-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 font-heading">Gaji Kompetitif</h3>
                    <p class="text-text-secondary leading-relaxed">
                        Paket kompensasi yang menarik dengan bonus kinerja dan tunjangan kesehatan lengkap untuk Anda
                        dan keluarga.
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="card group hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-secondary to-secondary-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 font-heading">Pengembangan Karir</h3>
                    <p class="text-text-secondary leading-relaxed">
                        Program pelatihan berkelanjutan dan kesempatan promosi yang jelas untuk mendukung pertumbuhan
                        profesional Anda.
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="card group hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-accent to-accent-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 font-heading">Work-Life Balance</h3>
                    <p class="text-text-secondary leading-relaxed">
                        Fleksibilitas kerja dengan opsi remote working dan cuti tahunan yang memadai untuk keseimbangan
                        hidup Anda.
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="card group hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-success to-success-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 font-heading">Tim Profesional</h3>
                    <p class="text-text-secondary leading-relaxed">
                        Bekerja bersama tim yang berpengalaman dan suportif dalam lingkungan kerja yang kolaboratif dan
                        inovatif.
                    </p>
                </div>

                <!-- Benefit 5 -->
                <div class="card group hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-warning to-warning-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 font-heading">Fasilitas Lengkap</h3>
                    <p class="text-text-secondary leading-relaxed">
                        Kantor modern dengan fasilitas olahraga, ruang istirahat, dan area rekreasi untuk kenyamanan
                        karyawan.
                    </p>
                </div>

                <!-- Benefit 6 -->
                <div class="card group hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-info to-info-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 font-heading">Asuransi Kesehatan</h3>
                    <p class="text-text-secondary leading-relaxed">
                        Perlindungan kesehatan menyeluruh dengan asuransi premium untuk Anda dan keluarga tercinta.
                    </p>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="card bg-gradient-to-br from-white to-primary-50 border-primary-100">
                    <div class="flex items-start gap-4 mb-4">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1c0b1b3ef-1763296195046.png"
                            alt="Foto profil Budi Santoso, Senior Software Engineer di PT. Setra Praba Perkasa"
                            class="w-16 h-16 rounded-full object-cover border-2 border-primary-200" loading="lazy"
                            onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                        <div class="flex-1">
                            <div class="font-bold text-text-primary font-heading">Budi Santoso</div>
                            <div class="text-sm text-text-secondary font-caption">Senior Software Engineer</div>
                            <div class="flex gap-1 mt-2">
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-text-secondary leading-relaxed italic">
                        "Bergabung dengan PT. Setra Praba Perkasa adalah keputusan terbaik dalam karir saya. Lingkungan
                        kerja yang mendukung dan kesempatan untuk terus belajar membuat saya berkembang pesat sebagai
                        profesional."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="card bg-gradient-to-br from-white to-secondary-50 border-secondary-100">
                    <div class="flex items-start gap-4 mb-4">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_14fb2d1e8-1763299781514.png"
                            alt="Foto profil Siti Nurhaliza, HR Manager di PT. Setra Praba Perkasa"
                            class="w-16 h-16 rounded-full object-cover border-2 border-secondary-200" loading="lazy"
                            onerror="this.src='https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="flex-1">
                            <div class="font-bold text-text-primary font-heading">Siti Nurhaliza</div>
                            <div class="text-sm text-text-secondary font-caption">HR Manager</div>
                            <div class="flex gap-1 mt-2">
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg class="w-4 h-4 text-warning-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-text-secondary leading-relaxed italic">
                        "Perusahaan yang sangat peduli dengan kesejahteraan karyawan. Work-life balance yang baik dan
                        budaya kerja yang positif membuat saya merasa dihargai dan termotivasi setiap hari."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-spacing bg-gradient-to-br from-primary to-secondary relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="cta-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                        <circle cx="30" cy="30" r="2" fill="white" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#cta-pattern)" />
            </svg>
        </div>

        <div class="container mx-auto container-padding relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 font-heading">
                    Siap Memulai Karir Impian Anda?
                </h2>
                <p class="text-lg md:text-xl text-white/90 mb-10 leading-relaxed">
                    Bergabunglah dengan ribuan profesional yang telah mempercayai PT. Setra Praba Perkasa sebagai tempat
                    untuk mengembangkan karir mereka. Daftar sekarang dan temukan peluang terbaik untuk masa depan Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="user_registration.html"
                        class="btn h-14 px-10 text-base bg-white text-primary hover:bg-neutral-50 shadow-xl group">
                        <span>Daftar Sekarang</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>