<x-user-layout>

    <!DOCTYPE html>
    <html lang="id" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Kelola profil dan lacak riwayat lamaran Anda di PT. Setra Praba Perkasa Recruitment Portal">
        <title>Manajemen Profil - PT. Setra Praba Perkasa Recruitment Portal</title>
        <link rel="stylesheet" href="../css/main.css">

        <script type="module" async
            src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fsetrarecr6900back.builtwithrocket.new&_be=https%3A%2F%2Fappanalytics.rocket.new&_v=0.1.15">
        </script>
        <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>
    </head>

    <body class="bg-background">
        <!-- Navigation Header -->
        <header class="sticky top-0 z-navigation bg-surface/95 backdrop-blur-sm border-b border-border shadow-sm">
            <nav class="container mx-auto container-padding">
                <div class="flex items-center justify-between h-20">
                    <!-- Logo -->
                    <a href="guest_homepage.html" class="flex items-center gap-3 group">
                        <div class="relative">
                            <svg class="w-10 h-10" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="url(#logo-gradient)" />
                                <path d="M12 20L18 14L24 20L30 14" stroke="white" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 26L18 20L24 26L30 20" stroke="white" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="logo-gradient" x1="0" y1="0" x2="40" y2="40"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2563EB" />
                                        <stop offset="1" stop-color="#7C3AED" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="hidden sm:block">
                            <div
                                class="font-heading font-bold text-lg text-text-primary group-hover:text-primary transition-colors">
                                PT. Setra Praba Perkasa</div>
                            <div class="text-xs text-text-secondary font-caption">Portal Rekrutmen</div>
                        </div>
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center gap-2">
                        <a href="guest_homepage.html"
                            class="px-4 py-2 rounded-lg text-sm font-medium text-text-primary hover:bg-surface-hover transition-colors">
                            Beranda
                        </a>
                        <a href="guest_homepage.html#lowongan"
                            class="px-4 py-2 rounded-lg text-sm font-medium text-text-primary hover:bg-surface-hover transition-colors">
                            Lowongan Kerja
                        </a>
                        <a href="user_profile_management.html"
                            class="px-4 py-2 rounded-lg text-sm font-medium text-primary bg-primary-50 transition-colors">
                            Profil Saya
                        </a>
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center gap-3">
                        <div class="relative group">
                            <button
                                class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-surface-hover transition-colors">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e750e171-1766504031978.png"
                                    alt="Foto profil pengguna Ahmad Rizki"
                                    class="w-10 h-10 rounded-full object-cover border-2 border-primary-200"
                                    onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                <div class="hidden lg:block text-left">
                                    <div class="text-sm font-semibold text-text-primary">Ahmad Rizki</div>
                                    <div class="text-xs text-text-secondary font-caption">Pencari Kerja</div>
                                </div>
                                <svg class="w-5 h-5 text-text-secondary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div class="hidden group-hover:block absolute right-0 mt-2 w-56 dropdown">
                                <div class="py-2">
                                    <a href="user_profile_management.html"
                                        class="flex items-center gap-3 px-4 py-3 hover:bg-surface-hover transition-colors">
                                        <svg class="w-5 h-5 text-text-secondary" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm text-text-primary">Profil Saya</span>
                                    </a>
                                    <a href="job_application_form.html"
                                        class="flex items-center gap-3 px-4 py-3 hover:bg-surface-hover transition-colors">
                                        <svg class="w-5 h-5 text-text-secondary" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm text-text-primary">Lamar Pekerjaan</span>
                                    </a>
                                    <div class="border-t border-border my-2"></div>
                                    <a href="user_login.html"
                                        class="flex items-center gap-3 px-4 py-3 hover:bg-surface-hover transition-colors text-error-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm">Keluar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="section-spacing">
            <div class="container mx-auto container-padding">
                <!-- Page Header -->
                <div class="mb-12">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold text-text-primary mb-3 font-heading">
                                Manajemen Profil
                            </h1>
                            <p class="text-lg text-text-secondary">
                                Kelola informasi pribadi dan lacak riwayat lamaran Anda
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

                <!-- Tabs Navigation -->
                <div class="mb-8 border-b border-border">
                    <div class="flex gap-2 overflow-x-auto">
                        <button id="tab-profile"
                            class="tab-button active px-6 py-4 text-sm font-medium border-b-2 transition-colors whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Informasi Profil</span>
                            </div>
                        </button>
                        <button id="tab-history"
                            class="tab-button px-6 py-4 text-sm font-medium border-b-2 transition-colors whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                    <path fill-rule="evenodd"
                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Riwayat Lamaran</span>
                            </div>
                        </button>
                        <button id="tab-documents"
                            class="tab-button px-6 py-4 text-sm font-medium border-b-2 transition-colors whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Dokumen</span>
                            </div>
                        </button>
                        <button id="tab-settings"
                            class="tab-button px-6 py-4 text-sm font-medium border-b-2 transition-colors whitespace-nowrap">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Pengaturan</span>
                            </div>
                        </button>
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
                                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_160641e89-1763295152619.png"
                                            alt="Foto profil Ahmad Rizki, pencari kerja di PT. Setra Praba Perkasa"
                                            class="w-32 h-32 rounded-full object-cover border-4 border-primary-100 shadow-lg"
                                            onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop'; this.onerror=null;">
                                        <button
                                            class="absolute bottom-0 right-0 w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center shadow-lg hover:bg-primary-700 transition-colors">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h3 class="text-xl font-bold text-text-primary mb-2 font-heading">Ahmad Rizki</h3>
                                    <p class="text-sm text-text-secondary mb-4 font-caption">Pencari Kerja</p>
                                    <div
                                        class="flex items-center justify-center gap-2 text-sm text-text-secondary mb-6">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Bergabung sejak Januari 2026</span>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between p-3 bg-primary-50 rounded-lg">
                                            <span class="text-sm text-text-secondary">Total Lamaran</span>
                                            <span class="text-lg font-bold text-primary font-heading">8</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-success-50 rounded-lg">
                                            <span class="text-sm text-text-secondary">Sedang Diproses</span>
                                            <span class="text-lg font-bold text-success-600 font-heading">3</span>
                                        </div>
                                        <div class="flex items-center justify-between p-3 bg-warning-50 rounded-lg">
                                            <span class="text-sm text-text-secondary">Ditinjau</span>
                                            <span class="text-lg font-bold text-warning-600 font-heading">2</span>
                                        </div>
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
                                            <input type="text" id="fullname" value="Ahmad Rizki Pratama"
                                                class="input w-full" required>
                                        </div>
                                        <div>
                                            <label for="email" class="label">Email *</label>
                                            <input type="email" id="email" value="ahmad.rizki@email.com"
                                                class="input w-full" required>
                                        </div>
                                        <div>
                                            <label for="phone" class="label">Nomor Telepon *</label>
                                            <input type="tel" id="phone" value="+62 812-3456-7890" class="input w-full"
                                                required>
                                        </div>
                                        <div>
                                            <label for="birthdate" class="label">Tanggal Lahir</label>
                                            <input type="date" id="birthdate" value="1998-05-15" class="input w-full">
                                        </div>
                                        <div class="md:col-span-2">
                                            <label for="address" class="label">Alamat Lengkap *</label>
                                            <textarea id="address" rows="3" class="input w-full"
                                                required>Jl. Sudirman No. 45, Jakarta Selatan 12190, DKI Jakarta</textarea>
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
                                            <h3 class="text-xl font-bold text-text-primary font-heading">Ringkasan
                                                Profesional</h3>
                                            <p class="text-sm text-text-secondary font-caption">Ceritakan tentang
                                                pengalaman
                                                dan keahlian Anda</p>
                                        </div>
                                    </div>

                                    <div class="space-y-6">
                                        <div>
                                            <label for="summary" class="label">Tentang Saya</label>
                                            <textarea id="summary" rows="5" class="input w-full"
                                                placeholder="Ceritakan tentang diri Anda, pengalaman kerja, dan keahlian yang Anda miliki...">Lulusan Teknik Informatika dengan pengalaman 3 tahun di bidang pengembangan web. Memiliki keahlian dalam JavaScript, React, dan Node.js. Berpengalaman dalam mengembangkan aplikasi web yang responsif dan user-friendly. Mampu bekerja dalam tim dan memiliki kemampuan problem-solving yang baik.</textarea>
                                        </div>
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div>
                                                <label for="education" class="label">Pendidikan Terakhir</label>
                                                <input type="text" id="education" value="S1 Teknik Informatika"
                                                    class="input w-full">
                                            </div>
                                            <div>
                                                <label for="experience" class="label">Pengalaman Kerja</label>
                                                <input type="text" id="experience" value="3 Tahun" class="input w-full">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="skills" class="label">Keahlian</label>
                                            <input type="text" id="skills"
                                                value="JavaScript, React, Node.js, HTML, CSS, Git" class="input w-full"
                                                placeholder="Pisahkan dengan koma">
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
                                            <h3 class="text-xl font-bold text-text-primary font-heading">Tautan Sosial
                                            </h3>
                                            <p class="text-sm text-text-secondary font-caption">Tambahkan profil
                                                profesional
                                                Anda</p>
                                        </div>
                                    </div>

                                    <div class="space-y-6">
                                        <div>
                                            <label for="linkedin" class="label">LinkedIn</label>
                                            <input type="url" id="linkedin" value="https://linkedin.com/in/ahmadrizki"
                                                class="input w-full" placeholder="https://linkedin.com/in/username">
                                        </div>
                                        <div>
                                            <label for="portfolio" class="label">Portfolio Website</label>
                                            <input type="url" id="portfolio" value="https://ahmadrizki.dev"
                                                class="input w-full" placeholder="https://yourportfolio.com">
                                        </div>
                                        <div>
                                            <label for="github" class="label">GitHub</label>
                                            <input type="url" id="github" value="https://github.com/ahmadrizki"
                                                class="input w-full" placeholder="https://github.com/username">
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex flex-col sm:flex-row gap-4 justify-end">
                                    <button type="button" class="btn-ghost h-12 px-8">
                                        Batal
                                    </button>
                                    <button type="submit" class="btn-primary h-12 px-8 group">
                                        <span>Simpan Perubahan</span>
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: Application History -->
                <div id="content-history" class="tab-content hidden">
                    <div class="space-y-6">
                        <!-- Filter Section -->
                        <div class="card">
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1">
                                    <label for="filter-status" class="label">Filter Status</label>
                                    <select id="filter-status" class="input w-full">
                                        <option value="">Semua Status</option>
                                        <option value="diproses">Diproses</option>
                                        <option value="ditinjau">Ditinjau</option>
                                        <option value="diterima">Diterima</option>
                                        <option value="ditolak">Ditolak</option>
                                    </select>
                                </div>
                                <div class="flex-1">
                                    <label for="filter-date-from" class="label">Dari Tanggal</label>
                                    <input type="date" id="filter-date-from" class="input w-full">
                                </div>
                                <div class="flex-1">
                                    <label for="filter-date-to" class="label">Sampai Tanggal</label>
                                    <input type="date" id="filter-date-to" class="input w-full">
                                </div>
                                <div class="flex items-end">
                                    <button class="btn-primary h-12 px-6">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Filter</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Application History Table -->
                        <div class="card overflow-hidden">
                            <div class="flex items-center justify-between mb-6 pb-6 border-b border-border">
                                <div>
                                    <h3 class="text-xl font-bold text-text-primary font-heading">Riwayat Lamaran</h3>
                                    <p class="text-sm text-text-secondary font-caption">Total 8 lamaran yang telah
                                        diajukan
                                    </p>
                                </div>
                                <button class="btn-outline h-10 px-4 text-sm">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Ekspor Data</span>
                                </button>
                            </div>

                            <!-- Desktop Table View -->
                            <div class="hidden lg:block overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Posisi</th>
                                            <th>Departemen</th>
                                            <th>Tanggal Lamar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="font-semibold text-text-primary">Senior Software Engineer
                                                </div>
                                                <div class="text-sm text-text-secondary">Full-time</div>
                                            </td>
                                            <td>Teknologi Informasi</td>
                                            <td>15 Januari 2026</td>
                                            <td>
                                                <span class="badge badge-warning">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Ditinjau
                                                </span>
                                            </td>
                                            <td>
                                                <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                                    Lihat Detail
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="font-semibold text-text-primary">Frontend Developer</div>
                                                <div class="text-sm text-text-secondary">Full-time</div>
                                            </td>
                                            <td>Teknologi Informasi</td>
                                            <td>10 Januari 2026</td>
                                            <td>
                                                <span class="badge badge-primary">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Diproses
                                                </span>
                                            </td>
                                            <td>
                                                <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                                    Lihat Detail
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="font-semibold text-text-primary">HR Manager</div>
                                                <div class="text-sm text-text-secondary">Full-time</div>
                                            </td>
                                            <td>Sumber Daya Manusia</td>
                                            <td>05 Januari 2026</td>
                                            <td>
                                                <span class="badge badge-success">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Diterima
                                                </span>
                                            </td>
                                            <td>
                                                <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                                    Lihat Detail
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="font-semibold text-text-primary">Marketing Specialist</div>
                                                <div class="text-sm text-text-secondary">Full-time</div>
                                            </td>
                                            <td>Pemasaran & Komunikasi</td>
                                            <td>28 Desember 2025</td>
                                            <td>
                                                <span class="badge badge-error">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Ditolak
                                                </span>
                                            </td>
                                            <td>
                                                <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                                    Lihat Detail
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="font-semibold text-text-primary">Financial Analyst</div>
                                                <div class="text-sm text-text-secondary">Full-time</div>
                                            </td>
                                            <td>Keuangan & Akuntansi</td>
                                            <td>20 Desember 2025</td>
                                            <td>
                                                <span class="badge badge-primary">
                                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    Diproses
                                                </span>
                                            </td>
                                            <td>
                                                <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                                    Lihat Detail
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Mobile Card View -->
                            <div class="lg:hidden space-y-4">
                                <!-- Application Card 1 -->
                                <div class="border border-border rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start justify-between mb-3">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-text-primary mb-1">Senior Software Engineer
                                            </h4>
                                            <p class="text-sm text-text-secondary">Teknologi Informasi</p>
                                        </div>
                                        <span class="badge badge-warning">Ditinjau</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-text-secondary mb-3">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>15 Januari 2026</span>
                                    </div>
                                    <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                        Lihat Detail →
                                    </button>
                                </div>

                                <!-- Application Card 2 -->
                                <div class="border border-border rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start justify-between mb-3">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-text-primary mb-1">Frontend Developer</h4>
                                            <p class="text-sm text-text-secondary">Teknologi Informasi</p>
                                        </div>
                                        <span class="badge badge-primary">Diproses</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-text-secondary mb-3">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>10 Januari 2026</span>
                                    </div>
                                    <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                        Lihat Detail →
                                    </button>
                                </div>

                                <!-- Application Card 3 -->
                                <div class="border border-border rounded-xl p-4 hover:shadow-md transition-shadow">
                                    <div class="flex items-start justify-between mb-3">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-text-primary mb-1">HR Manager</h4>
                                            <p class="text-sm text-text-secondary">Sumber Daya Manusia</p>
                                        </div>
                                        <span class="badge badge-success">Diterima</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-text-secondary mb-3">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>05 Januari 2026</span>
                                    </div>
                                    <button class="text-primary hover:text-primary-700 text-sm font-medium">
                                        Lihat Detail →
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: Documents -->
                <div id="content-documents" class="tab-content hidden">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <!-- CV Upload Section -->
                        <div class="card">
                            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                <div class="w-12 h-12 rounded-xl bg-primary-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-text-primary font-heading">Curriculum Vitae (CV)
                                    </h3>
                                    <p class="text-sm text-text-secondary font-caption">Upload CV terbaru Anda</p>
                                </div>
                            </div>

                            <!-- Current CV -->
                            <div class="mb-6 p-4 bg-neutral-50 rounded-xl border border-border">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-lg bg-error-100 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-error-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-semibold text-text-primary truncate">CV_Ahmad_Rizki_2026.pdf
                                        </h4>
                                        <p class="text-sm text-text-secondary">2.4 MB • Diupload 15 Jan 2026</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button
                                            class="w-10 h-10 rounded-lg bg-primary-100 text-primary hover:bg-primary-200 transition-colors flex items-center justify-center">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd"
                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button
                                            class="w-10 h-10 rounded-lg bg-error-100 text-error-600 hover:bg-error-200 transition-colors flex items-center justify-center">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Upload New CV -->
                            <div
                                class="border-2 border-dashed border-border rounded-xl p-8 text-center hover:border-primary transition-colors cursor-pointer">
                                <input type="file" id="cv-upload" class="hidden" accept=".pdf,.doc,.docx">
                                <label for="cv-upload" class="cursor-pointer">
                                    <div
                                        class="w-16 h-16 rounded-full bg-primary-50 flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-semibold text-text-primary mb-2">Upload CV Baru</h4>
                                    <p class="text-sm text-text-secondary mb-4">
                                        Klik untuk memilih file atau drag & drop
                                    </p>
                                    <p class="text-xs text-text-tertiary">
                                        Format: PDF, DOC, DOCX (Max. 5MB)
                                    </p>
                                </label>
                            </div>
                        </div>

                        <!-- Portfolio Upload Section -->
                        <div class="card">
                            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                <div class="w-12 h-12 rounded-xl bg-secondary-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                            clip-rule="evenodd" />
                                        <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-text-primary font-heading">Portfolio</h3>
                                    <p class="text-sm text-text-secondary font-caption">Upload dokumen portfolio Anda
                                    </p>
                                </div>
                            </div>

                            <!-- Portfolio Files -->
                            <div class="space-y-3 mb-6">
                                <div class="p-4 bg-neutral-50 rounded-xl border border-border">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-text-primary truncate">Project_Screenshots.pdf
                                            </h4>
                                            <p class="text-sm text-text-secondary">3.8 MB • Diupload 15 Jan 2026</p>
                                        </div>
                                        <div class="flex gap-2">
                                            <button
                                                class="w-10 h-10 rounded-lg bg-primary-100 text-primary hover:bg-primary-200 transition-colors flex items-center justify-center">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <button
                                                class="w-10 h-10 rounded-lg bg-error-100 text-error-600 hover:bg-error-200 transition-colors flex items-center justify-center">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-4 bg-neutral-50 rounded-xl border border-border">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-lg bg-secondary-100 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-text-primary truncate">Certificates.pdf</h4>
                                            <p class="text-sm text-text-secondary">1.2 MB • Diupload 10 Jan 2026</p>
                                        </div>
                                        <div class="flex gap-2">
                                            <button
                                                class="w-10 h-10 rounded-lg bg-primary-100 text-primary hover:bg-primary-200 transition-colors flex items-center justify-center">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <button
                                                class="w-10 h-10 rounded-lg bg-error-100 text-error-600 hover:bg-error-200 transition-colors flex items-center justify-center">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Upload New Portfolio -->
                            <div
                                class="border-2 border-dashed border-border rounded-xl p-8 text-center hover:border-secondary transition-colors cursor-pointer">
                                <input type="file" id="portfolio-upload" class="hidden"
                                    accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple>
                                <label for="portfolio-upload" class="cursor-pointer">
                                    <div
                                        class="w-16 h-16 rounded-full bg-secondary-50 flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                    </div>
                                    <h4 class="text-lg font-semibold text-text-primary mb-2">Upload Portfolio</h4>
                                    <p class="text-sm text-text-secondary mb-4">
                                        Klik untuk memilih file atau drag & drop
                                    </p>
                                    <p class="text-xs text-text-tertiary">
                                        Format: PDF, DOC, DOCX, JPG, PNG (Max. 10MB per file)
                                    </p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: Settings -->
                <div id="content-settings" class="tab-content hidden">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <!-- Change Password -->
                        <div class="card">
                            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                <div class="w-12 h-12 rounded-xl bg-primary-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-text-primary font-heading">Ubah Password</h3>
                                    <p class="text-sm text-text-secondary font-caption">Perbarui password akun Anda</p>
                                </div>
                            </div>

                            <form class="space-y-6">
                                <div>
                                    <label for="current-password" class="label">Password Saat Ini *</label>
                                    <input type="password" id="current-password" class="input w-full"
                                        placeholder="Masukkan password saat ini" required>
                                </div>
                                <div>
                                    <label for="new-password" class="label">Password Baru *</label>
                                    <input type="password" id="new-password" class="input w-full"
                                        placeholder="Masukkan password baru" required>
                                    <p class="text-xs text-text-tertiary mt-2">
                                        Minimal 8 karakter, kombinasi huruf dan angka
                                    </p>
                                </div>
                                <div>
                                    <label for="confirm-password" class="label">Konfirmasi Password Baru *</label>
                                    <input type="password" id="confirm-password" class="input w-full"
                                        placeholder="Konfirmasi password baru" required>
                                </div>
                                <button type="submit" class="btn-primary w-full h-12">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Ubah Password</span>
                                </button>
                            </form>
                        </div>

                        <!-- Notification Preferences -->
                        <div class="card">
                            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-border">
                                <div class="w-12 h-12 rounded-xl bg-secondary-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-text-primary font-heading">Preferensi Notifikasi
                                    </h3>
                                    <p class="text-sm text-text-secondary font-caption">Atur notifikasi yang ingin Anda
                                        terima</p>
                                </div>
                            </div>

                            <div class="space-y-6">
                                <!-- Email Notifications -->
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-text-primary mb-1">Notifikasi Email</h4>
                                        <p class="text-sm text-text-secondary">Terima pembaruan status lamaran via email
                                        </p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" checked>
                                        <div
                                            class="w-11 h-6 bg-neutral-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>

                                <!-- Application Updates -->
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-text-primary mb-1">Update Lamaran</h4>
                                        <p class="text-sm text-text-secondary">Notifikasi saat status lamaran berubah
                                        </p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" checked>
                                        <div
                                            class="w-11 h-6 bg-neutral-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>

                                <!-- New Job Alerts -->
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-text-primary mb-1">Lowongan Baru</h4>
                                        <p class="text-sm text-text-secondary">Notifikasi lowongan kerja yang sesuai
                                            profil
                                        </p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" checked>
                                        <div
                                            class="w-11 h-6 bg-neutral-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>

                                <!-- Marketing Communications -->
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-text-primary mb-1">Newsletter & Promosi</h4>
                                        <p class="text-sm text-text-secondary">Terima tips karir dan informasi
                                            perusahaan
                                        </p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-neutral-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>

                                <div class="pt-6 border-t border-border">
                                    <button class="btn-primary w-full h-12">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Simpan Preferensi</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Account Actions -->
                        <div class="lg:col-span-2">
                            <div class="card border-error-200 bg-error-50">
                                <div class="flex items-center gap-3 mb-6 pb-6 border-b border-error-200">
                                    <div class="w-12 h-12 rounded-xl bg-error-100 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-error-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-error-700 font-heading">Zona Bahaya</h3>
                                        <p class="text-sm text-error-600 font-caption">Tindakan permanen yang tidak
                                            dapat
                                            dibatalkan</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div
                                        class="flex items-start justify-between p-4 bg-white rounded-lg border border-error-200">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-text-primary mb-1">Hapus Akun</h4>
                                            <p class="text-sm text-text-secondary">Hapus akun dan semua data Anda secara
                                                permanen</p>
                                        </div>
                                        <button
                                            class="btn h-10 px-4 text-sm bg-error-600 text-white hover:bg-error-700">
                                            Hapus Akun
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-neutral-900 text-neutral-300">
            <div class="container mx-auto container-padding py-16">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                    <!-- Company Info -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-10 h-10" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="url(#footer-logo-gradient)" />
                                <path d="M12 20L18 14L24 20L30 14" stroke="white" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 26L18 20L24 26L30 20" stroke="white" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="footer-logo-gradient" x1="0" y1="0" x2="40" y2="40"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2563EB" />
                                        <stop offset="1" stop-color="#7C3AED" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div>
                                <div class="font-heading font-bold text-white">PT. Setra Praba Perkasa</div>
                                <div class="text-xs text-neutral-400 font-caption">Portal Rekrutmen</div>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed">
                            Membangun masa depan bersama dengan menyediakan peluang karir terbaik untuk talenta
                            Indonesia.
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="font-heading font-semibold text-white mb-4">Tautan Cepat</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="guest_homepage.html"
                                    class="text-sm hover:text-primary transition-colors">Beranda</a>
                            </li>
                            <li>
                                <a href="guest_homepage.html#lowongan"
                                    class="text-sm hover:text-primary transition-colors">Lowongan Kerja</a>
                            </li>
                            <li>
                                <a href="guest_homepage.html#tentang"
                                    class="text-sm hover:text-primary transition-colors">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="user_registration.html"
                                    class="text-sm hover:text-primary transition-colors">Daftar</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Support -->
                    <div>
                        <h3 class="font-heading font-semibold text-white mb-4">Dukungan</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="javascript:void(0)" class="text-sm hover:text-primary transition-colors">Pusat
                                    Bantuan</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="text-sm hover:text-primary transition-colors">FAQ</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="text-sm hover:text-primary transition-colors">Kebijakan
                                    Privasi</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-sm hover:text-primary transition-colors">Syarat
                                    &
                                    Ketentuan</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="font-heading font-semibold text-white mb-4">Hubungi Kami</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 flex-shrink-0 mt-0.5 text-primary" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm">Jl. Sudirman No. 123, Jakarta Selatan 12190</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 flex-shrink-0 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span class="text-sm">+62 21 1234 5678</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-5 h-5 flex-shrink-0 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <span class="text-sm">recruitment@setraprabaperkasa.co.id</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div class="pt-8 border-t border-neutral-800">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-sm text-neutral-400">
                            © 2026 PT. Setra Praba Perkasa. Hak Cipta Dilindungi.
                        </p>
                        <div class="flex gap-4">
                            <a href="javascript:void(0)"
                                class="w-10 h-10 rounded-full bg-neutral-800 flex items-center justify-center hover:bg-primary transition-colors"
                                aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-10 h-10 rounded-full bg-neutral-800 flex items-center justify-center hover:bg-primary transition-colors"
                                aria-label="LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-10 h-10 rounded-full bg-neutral-800 flex items-center justify-center hover:bg-primary transition-colors"
                                aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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
        <script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
    </body>

    </html>

</x-user-layout>