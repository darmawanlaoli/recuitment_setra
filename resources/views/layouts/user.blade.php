<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="PT. Setra Praba Perkasa - Portal Rekrutmen Resmi. Temukan peluang karir terbaik dan bergabunglah dengan tim profesional kami.">
    <title>Beranda - PT. Setra Praba Perkasa Recruitment Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                <a href="{{ '/' }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <svg class="w-10 h-10" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="8" fill="url(#logo-gradient)" />
                            <path d="M12 20L18 14L24 20L30 14" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 26L18 20L24 26L30 20" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
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
                    <a href="{{ '/' }}"
                        class="px-4 py-2 rounded-lg text-sm font-medium text-primary bg-primary-50 transition-colors">
                        Beranda
                    </a>
                    <a href="{{ '/' }}#tentang"
                        class="px-4 py-2 rounded-lg text-sm font-medium text-text-primary hover:bg-surface-hover transition-colors">
                        Tentang Kami
                    </a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center gap-3">
                    <a href="{{ '/login' }}" class="btn-outline">
                        Masuk
                    </a>
                    <a href="{{ '/register' }}" class="btn-primary">
                        Daftar
                    </a>
                </div>
            </div>
        </nav>
    </header>


    {{ $slot }}


    <!-- Footer -->
    <footer class="bg-neutral-900 text-neutral-300">
        <div class="container mx-auto container-padding py-16">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <svg class="w-10 h-10" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="8" fill="url(#footer-logo-gradient)" />
                            <path d="M12 20L18 14L24 20L30 14" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 26L18 20L24 26L30 20" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
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
                        Membangun masa depan bersama dengan menyediakan peluang karir terbaik untuk talenta Indonesia.
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
                            <a href="javascript:void(0)" class="text-sm hover:text-primary transition-colors">FAQ</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="text-sm hover:text-primary transition-colors">Kebijakan
                                Privasi</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="text-sm hover:text-primary transition-colors">Syarat &
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

    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- TOAST --}}
    <div x-data="{
                show: {{ session('toast') || $errors->any() ? 'true' : 'false' }},
                message: '{{ session('toast.message') ?? ($errors->first() ?? '') }}',
                type: '{{ session('toast.type') ?? 'error' }}'
            }" x-show="show" x-transition x-init="setTimeout(() => show = false, 4000)"
        class="fixed top-24 right-6 z-[9999] w-full max-w-sm" style="display: none;">
        <div :class="{
                    'bg-green-50 border-green-200 text-green-800': type === 'success',
                    'bg-red-50 border-red-200 text-red-800': type === 'error',
                    'bg-blue-50 border-blue-200 text-blue-800': type === 'info'
                }" class="border rounded-xl shadow-lg p-4 flex gap-3">
            <!-- ICON -->
            <div class="mt-0.5">
                <template x-if="type === 'success'">
                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </template>

                <template x-if="type === 'error'">
                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </template>
            </div>

            <!-- TEXT -->
            <div class="flex-1 text-sm font-medium" x-text="message"></div>

            <!-- CLOSE -->
            <button @click="show = false" class="text-gray-400 hover:text-gray-600">
                ✕
            </button>
        </div>
    </div>
</body>

</html>