<x-guest-layout>

    <section
        class="section-spacing bg-gradient-to-br from-primary-50 via-white to-secondary-50 min-h-screen flex items-center">
        <div class="container mx-auto container-padding">
            <div class="max-w-2xl mx-auto">
                <!-- Registration Card -->
                <div class="card shadow-xl">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-50 text-primary-700 text-sm font-medium font-caption mb-4">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Buat Akun Baru</span>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-bold text-text-primary mb-3 font-heading">
                            Daftar Sekarang
                        </h1>
                        <p class="text-text-secondary text-lg">
                            Bergabunglah dengan ribuan pencari kerja lainnya
                        </p>
                    </div>

                    <!-- Google OAuth Button -->
                    <a id="googleLoginBtn"
                        class="btn w-full h-12 bg-white border-2 border-border hover:bg-neutral-50 text-text-primary mb-6 group"
                        href="{{ route('google.redirect') }}">

                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4" />
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853" />
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                fill="#FBBC05" />
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                fill="#EA4335" />
                        </svg>
                        <span>Daftar dengan Google</span>

                    </a>

                    <!-- Divider -->
                    <div class="relative mb-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-border"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-surface text-text-secondary font-caption">Atau daftar dengan
                                email</span>
                        </div>
                    </div>

                    <!-- Registration Form -->

                    <form id="registrationForm" method="POST" action="{{ route('register') }}" novalidate>
                        @csrf

                        <!-- Full Name Field -->
                        <div class="mb-4">
                            <label for="Name" class="label">
                                Nama Lengkap <span class="text-error">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-text-tertiary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="Name" name="name" class="input w-full pl-12"
                                    placeholder="Masukkan nama lengkap Anda" required autocomplete="name"
                                    aria-describedby="NameError">
                                <div id="NameSuccess" class="hidden absolute inset-y-0 right-0 pr-4 flex items-center">
                                    <svg class="w-5 h-5 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <p id="NameError" class="hidden mt-2 text-sm text-error flex items-center gap-1">
                                <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span></span>
                            </p>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="label">
                                Email <span class="text-error">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-text-tertiary" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <input type="email" id="email" name="email" class="input w-full pl-12"
                                    placeholder="nama@email.com" required autocomplete="email"
                                    aria-describedby="emailError">
                                <div id="emailSuccess" class="hidden absolute inset-y-0 right-0 pr-4 flex items-center">
                                    <svg class="w-5 h-5 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <p id="emailError" class="hidden mt-2 text-sm text-error flex items-center gap-1">
                                <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span></span>
                            </p>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="label">
                                Kata Sandi <span class="text-error">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-text-tertiary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="password" id="password" name="password" class="input w-full pl-12 pr-12"
                                    placeholder="Minimal 8 karakter" required autocomplete="new-password" minlength="8"
                                    aria-describedby="passwordError passwordStrength">
                                <button type="button" id="togglePassword"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-text-tertiary hover:text-text-primary transition-colors"
                                    aria-label="Toggle password visibility">
                                    <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg id="eyeOffIcon" class="w-5 h-5 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                            </div>
                            <p id="passwordError" class="hidden mt-2 text-sm text-error flex items-center gap-1">
                                <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span></span>
                            </p>
                            <!-- Password Strength Indicator -->
                            <div id="passwordStrength" class="mt-3 space-y-2">
                                <div class="flex gap-2">
                                    <div id="strength1"
                                        class="h-1 flex-1 rounded-full bg-neutral-200 transition-colors"></div>
                                    <div id="strength2"
                                        class="h-1 flex-1 rounded-full bg-neutral-200 transition-colors"></div>
                                    <div id="strength3"
                                        class="h-1 flex-1 rounded-full bg-neutral-200 transition-colors"></div>
                                    <div id="strength4"
                                        class="h-1 flex-1 rounded-full bg-neutral-200 transition-colors"></div>
                                </div>
                                <p id="strengthText" class="text-xs text-text-secondary"></p>
                                <ul class="text-xs text-text-secondary space-y-1">
                                    <li id="lengthCheck" class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-neutral-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Minimal 8 karakter</span>
                                    </li>
                                    <li id="uppercaseCheck" class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-neutral-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Huruf besar (A-Z)</span>
                                    </li>
                                    <li id="numberCheck" class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-neutral-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Angka (0-9)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="label">
                                Konfirmasi Kata Sandi <span class="text-error">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-text-tertiary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="input w-full pl-12 pr-12" placeholder="Ulangi kata sandi" required
                                    autocomplete="new-password" aria-describedby="password_confirmationError">
                                <button type="button" id="togglepassword_confirmation"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-text-tertiary hover:text-text-primary transition-colors"
                                    aria-label="Toggle confirm password visibility">
                                    <svg id="eyeIconConfirm" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg id="eyeOffIconConfirm" class="w-5 h-5 hidden" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                </button>
                                <div id="password_confirmationSuccess"
                                    class="hidden absolute inset-y-0 right-12 pr-4 flex items-center">
                                    <svg class="w-5 h-5 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <p id="password_confirmationError"
                                class="hidden mt-2 text-sm text-error flex items-center gap-1">
                                <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span></span>
                            </p>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="space-y-4 mb-4">
                            <div class="flex items-start gap-3">
                                <input type="checkbox" id="terms" name="terms"
                                    class="mt-1 w-5 h-5 rounded border-border text-primary focus:ring-2 focus:ring-primary focus:ring-offset-2 cursor-pointer"
                                    required aria-describedby="termsError">
                                <label for="terms" class="text-sm text-text-secondary cursor-pointer select-none">
                                    Saya menyetujui <a href="javascript:void(0)"
                                        class="text-primary hover:text-primary-700 font-medium">Syarat & Ketentuan</a>
                                    dan <a href="javascript:void(0)"
                                        class="text-primary hover:text-primary-700 font-medium">Kebijakan Privasi</a>
                                    PT. Setra Praba Perkasa
                                </label>
                            </div>
                            <p id="termsError" class="hidden text-sm text-error flex items-center gap-1">
                                <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Anda harus menyetujui syarat dan ketentuan</span>
                            </p>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="submitBtn"
                            class="btn-primary w-full h-14 text-base font-semibold disabled:opacity-50 disabled:cursor-not-allowed group"
                            disabled>
                            <span id="submitText">Daftar</span>
                        </button>

                        <!-- Login Link -->
                        <p class="text-center text-sm text-text-secondary">
                            Sudah punya akun?
                            <a href="user_login.html"
                                class="text-primary hover:text-primary-700 font-medium transition-colors">
                                Masuk di sini
                            </a>
                        </p>
                    </form>
                </div>

                <!-- Trust Signals -->
                <div class="mt-8 text-center">
                    <div class="flex items-center justify-center gap-6 text-sm text-text-secondary">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-success-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Data Aman</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Terpercaya</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-info-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Gratis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form elements
        const form = document.getElementById('registrationForm');
        const NameInput = document.getElementById('Name');
        const emailInput = document.getElementById('email');
        // const phoneInput = document.getElementById('phone');
        const passwordInput = document.getElementById('password');
        const password_confirmationInput = document.getElementById('password_confirmation');
        const termsCheckbox = document.getElementById('terms');
        const submitBtn = document.getElementById('submitBtn');
        const googleSignUpBtn = document.getElementById('googleSignUpBtn');

        // Error elements
        const NameError = document.getElementById('NameError');
        const emailError = document.getElementById('emailError');
        // const phoneError = document.getElementById('phoneError');
        const passwordError = document.getElementById('passwordError');
        const password_confirmationError = document.getElementById('password_confirmationError');
        const termsError = document.getElementById('termsError');

        // Success indicators
        const NameSuccess = document.getElementById('NameSuccess');
        const emailSuccess = document.getElementById('emailSuccess');
        // const phoneSuccess = document.getElementById('phoneSuccess');
        const password_confirmationSuccess = document.getElementById('password_confirmationSuccess');

        // Password strength elements
        const strength1 = document.getElementById('strength1');
        const strength2 = document.getElementById('strength2');
        const strength3 = document.getElementById('strength3');
        const strength4 = document.getElementById('strength4');
        const strengthText = document.getElementById('strengthText');
        const lengthCheck = document.getElementById('lengthCheck');
        const uppercaseCheck = document.getElementById('uppercaseCheck');
        const numberCheck = document.getElementById('numberCheck');

        // Password toggle buttons
        const togglePassword = document.getElementById('togglePassword');
        const togglepassword_confirmation = document.getElementById('togglepassword_confirmation');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeOffIcon = document.getElementById('eyeOffIcon');
        const eyeIconConfirm = document.getElementById('eyeIconConfirm');
        const eyeOffIconConfirm = document.getElementById('eyeOffIconConfirm');

        // Validation state
        let validationState = {
            Name: false,
            email: false,
            // phone: false,
            password: false,
            password_confirmation: false,
            terms: false
        };

        // Validation functions
        function validateName() {
            const value = NameInput.value.trim();
            if (value.length === 0) {
                showError(NameInput, NameError, NameSuccess, 'Nama lengkap wajib diisi');
                validationState.Name = false;
                return false;
            }
            if (value.length < 3) {
                showError(NameInput, NameError, NameSuccess, 'Nama lengkap minimal 3 karakter');
                validationState.Name = false;
                return false;
            }
            if (!/^[a-zA-Z\s]+$/.test(value)) {
                showError(NameInput, NameError, NameSuccess, 'Nama hanya boleh berisi huruf');
                validationState.Name = false;
                return false;
            }
            showSuccess(NameInput, NameError, NameSuccess);
            validationState.Name = true;
            return true;
        }

        function validateEmail() {
            const value = emailInput.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (value.length === 0) {
                showError(emailInput, emailError, emailSuccess, 'Email wajib diisi');
                validationState.email = false;
                return false;
            }
            if (!emailRegex.test(value)) {
                showError(emailInput, emailError, emailSuccess, 'Format email tidak valid');
                validationState.email = false;
                return false;
            }
            showSuccess(emailInput, emailError, emailSuccess);
            validationState.email = true;
            return true;
        }

        // function validatePhone() {
        //     const value = phoneInput.value.trim();
        //     const phoneRegex = /^[0-9]{10,13}$/;

        //     if (value.length === 0) {
        //         showError(phoneInput, phoneError, phoneSuccess, 'Nomor telepon wajib diisi');
        //         validationState.phone = false;
        //         return false;
        //     }
        //     if (!phoneRegex.test(value)) {
        //         showError(phoneInput, phoneError, phoneSuccess, 'Nomor telepon harus 10-13 digit angka');
        //         validationState.phone = false;
        //         return false;
        //     }
        //     if (!value.startsWith('08')) {
        //         showError(phoneInput, phoneError, phoneSuccess, 'Nomor telepon harus diawali dengan 08');
        //         validationState.phone = false;
        //         return false;
        //     }
        //     showSuccess(phoneInput, phoneError, phoneSuccess);
        //     validationState.phone = true;
        //     return true;
        // }

        function validatePassword() {
            const value = passwordInput.value;
            const hasLength = value.length >= 8;
            const hasUppercase = /[A-Z]/.test(value);
            const hasNumber = /[0-9]/.test(value);

            // Update checklist
            updateCheck(lengthCheck, hasLength);
            updateCheck(uppercaseCheck, hasUppercase);
            updateCheck(numberCheck, hasNumber);

            // Calculate strength
            let strength = 0;
            if (hasLength) strength++;
            if (hasUppercase) strength++;
            if (hasNumber) strength++;
            if (value.length >= 12) strength++;

            // Update strength bars
            updateStrengthBars(strength);

            if (value.length === 0) {
                showError(passwordInput, passwordError, null, 'Kata sandi wajib diisi');
                validationState.password = false;
                return false;
            }
            if (!hasLength || !hasUppercase || !hasNumber) {
                showError(passwordInput, passwordError, null, 'Kata sandi tidak memenuhi persyaratan');
                validationState.password = false;
                return false;
            }
            hideError(passwordInput, passwordError);
            validationState.password = true;

            // Revalidate confirm password if it has value
            if (password_confirmationInput.value.length > 0) {
                validatepassword_confirmation();
            }

            return true;
        }

        function validatepassword_confirmation() {
            const value = password_confirmationInput.value;
            const passwordValue = passwordInput.value;

            if (value.length === 0) {
                showError(password_confirmationInput, password_confirmationError, password_confirmationSuccess, 'Konfirmasi kata sandi wajib diisi');
                validationState.password_confirmation = false;
                return false;
            }
            if (value !== passwordValue) {
                showError(password_confirmationInput, password_confirmationError, password_confirmationSuccess, 'Kata sandi tidak cocok');
                validationState.password_confirmation = false;
                return false;
            }
            showSuccess(password_confirmationInput, password_confirmationError, password_confirmationSuccess);
            validationState.password_confirmation = true;
            return true;
        }

        function validateTerms() {
            if (!termsCheckbox.checked) {
                termsError.classList.remove('hidden');
                validationState.terms = false;
                return false;
            }
            termsError.classList.add('hidden');
            validationState.terms = true;
            return true;
        }

        // Helper functions
        function showError(input, errorElement, successElement, message) {
            input.classList.add('input-error');
            errorElement.querySelector('span').textContent = message;
            errorElement.classList.remove('hidden');
            if (successElement) {
                successElement.classList.add('hidden');
            }
        }

        function showSuccess(input, errorElement, successElement) {
            input.classList.remove('input-error');
            errorElement.classList.add('hidden');
            if (successElement) {
                successElement.classList.remove('hidden');
            }
        }

        function hideError(input, errorElement) {
            input.classList.remove('input-error');
            errorElement.classList.add('hidden');
        }

        function updateCheck(element, isValid) {
            const icon = element.querySelector('svg');
            if (isValid) {
                icon.classList.remove('text-neutral-400');
                icon.classList.add('text-success-600');
                element.classList.remove('text-text-secondary');
                element.classList.add('text-success-600');
            } else {
                icon.classList.remove('text-success-600');
                icon.classList.add('text-neutral-400');
                element.classList.remove('text-success-600');
                element.classList.add('text-text-secondary');
            }
        }

        function updateStrengthBars(strength) {
            const bars = [strength1, strength2, strength3, strength4];
            const colors = ['bg-error-500', 'bg-warning-500', 'bg-info-500', 'bg-success-600'];
            const texts = ['Lemah', 'Sedang', 'Baik', 'Kuat'];

            bars.forEach((bar, index) => {
                bar.className = 'h-1 flex-1 rounded-full transition-colors';
                if (index < strength) {
                    bar.classList.add(colors[strength - 1]);
                } else {
                    bar.classList.add('bg-neutral-200');
                }
            });

            if (strength > 0) {
                strengthText.textContent = `Kekuatan kata sandi: ${texts[strength - 1]}`;
                strengthText.className = `text-xs ${strength === 4 ? 'text-success-600' : strength === 3 ? 'text-info-500' : strength === 2 ? 'text-warning-600' : 'text-error-600'}`;
            } else {
                strengthText.textContent = '';
            }
        }

        function checkFormValidity() {
            const isValid = Object.values(validationState).every(value => value === true);
            submitBtn.disabled = !isValid;
        }

        // Event listeners
        NameInput.addEventListener('blur', () => {
            validateName();
            checkFormValidity();
        });

        NameInput.addEventListener('input', () => {
            if (NameInput.value.length > 0) {
                validateName();
                checkFormValidity();
            }
        });

        emailInput.addEventListener('blur', () => {
            validateEmail();
            checkFormValidity();
        });

        emailInput.addEventListener('input', () => {
            if (emailInput.value.length > 0) {
                validateEmail();
                checkFormValidity();
            }
        });

        // phoneInput.addEventListener('blur', () => {
        //     validatePhone();
        //     checkFormValidity();
        // });

        // phoneInput.addEventListener('input', () => {
        //     // Only allow numbers
        //     phoneInput.value = phoneInput.value.replace(/[^0-9]/g, '');
        //     if (phoneInput.value.length > 0) {
        //         validatePhone();
        //         checkFormValidity();
        //     }
        // });

        passwordInput.addEventListener('input', () => {
            validatePassword();
            checkFormValidity();
        });

        password_confirmationInput.addEventListener('input', () => {
            if (password_confirmationInput.value.length > 0) {
                validatepassword_confirmation();
                checkFormValidity();
            }
        });

        password_confirmationInput.addEventListener('blur', () => {
            validatepassword_confirmation();
            checkFormValidity();
        });

        termsCheckbox.addEventListener('change', () => {
            validateTerms();
            checkFormValidity();
        });

        // Password visibility toggles
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            eyeIcon.classList.toggle('hidden');
            eyeOffIcon.classList.toggle('hidden');
        });

        togglepassword_confirmation.addEventListener('click', () => {
            const type = password_confirmationInput.type === 'password' ? 'text' : 'password';
            password_confirmationInput.type = type;
            eyeIconConfirm.classList.toggle('hidden');
            eyeOffIconConfirm.classList.toggle('hidden');
        });

        // Google Sign Up
        googleSignUpBtn.addEventListener('click', () => {
            // Simulate Google OAuth flow
            alert('Fitur Google Sign Up akan segera tersedia. Untuk demo, silakan gunakan form pendaftaran manual.');
        });

        // Form submission
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Validate all fields
            const isNameValid = validateName();
            const isEmailValid = validateEmail();
            // const isPhoneValid = validatePhone();
            const isPasswordValid = validatePassword();
            const ispassword_confirmationValid = validatepassword_confirmation();
            const isTermsValid = validateTerms();

            if (isNameValid && isEmailValid && isPasswordValid && ispassword_confirmationValid && isTermsValid) {
                // Show loading state
                const submitText = document.getElementById('submitText');
                const submitIcon = document.getElementById('submitIcon');
                const loadingIcon = document.getElementById('loadingIcon');

                submitBtn.disabled = true;
                submitText.textContent = 'Mendaftar...';
                submitIcon.classList.add('hidden');
                loadingIcon.classList.remove('hidden');

                // Simulate API call
                setTimeout(() => {
                    // Success - redirect to login or verification page
                    alert('Pendaftaran berhasil! Silakan cek email Anda untuk verifikasi akun.');
                    window.location.href = 'user_login.html';
                }, 2000);
            }
        });
    </script>
</x-guest-layout>