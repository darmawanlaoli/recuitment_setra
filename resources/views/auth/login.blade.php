<x-guest-layout>

    <!-- Login Section -->
    <section
        class="section-spacing bg-gradient-to-br from-primary-50 via-white to-secondary-50 min-h-[calc(100vh-80px)] flex items-center">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="login-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                        <circle cx="30" cy="30" r="2" fill="currentColor" class="text-primary" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#login-pattern)" />
            </svg>
        </div>

        <div class="container mx-auto container-padding relative z-10">
            <div class="max-w-md mx-auto">
                <!-- Login Card -->
                <div class="card bg-surface shadow-xl">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-primary-600 mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold text-text-primary mb-2 font-heading">Selamat Datang Kembali</h1>
                        <p class="text-text-secondary">Masuk ke akun Anda untuk melanjutkan</p>
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
                        <span>Masuk dengan Google</span>

                    </a>

                    <!-- Divider -->
                    <div class="relative mb-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-border"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-surface text-text-secondary font-caption">Atau masuk dengan
                                email</span>
                        </div>
                    </div>

                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}" class="space-y-5" novalidate>
                        @csrf

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="label">
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    Email
                                </span>
                            </label>
                            <input type="email" id="email" name="email" class="input w-full"
                                placeholder="nama@email.com" required autocomplete="email"
                                aria-describedby="email-error">
                            <p id="email-error" class="mt-2 text-sm text-error hidden" role="alert"></p>
                        </div>

                        <!-- Password Field -->
                        <div>
                            <label for="password" class="label">
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Kata Sandi
                                </span>
                            </label>
                            <div class="relative">
                                <input type="password" id="password" name="password" class="input w-full pr-12"
                                    placeholder="Masukkan kata sandi" required minlength="8"
                                    autocomplete="current-password" aria-describedby="password-error">
                                <button type="button" id="togglePassword"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 text-text-secondary hover:text-text-primary transition-colors"
                                    aria-label="Tampilkan kata sandi">
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
                            <p id="password-error" class="mt-2 text-sm text-error hidden" role="alert"></p>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-2 cursor-pointer group">
                                <input type="checkbox" id="rememberMe" name="rememberMe"
                                    class="w-4 h-4 rounded border-border text-primary focus:ring-2 focus:ring-primary focus:ring-offset-2 cursor-pointer">
                                <span
                                    class="text-sm text-text-secondary group-hover:text-text-primary transition-colors font-caption">Ingat
                                    saya</span>
                            </label>
                            <a href="javascript:void(0)" id="forgotPasswordLink"
                                class="text-sm text-primary hover:text-primary-700 font-medium transition-colors">
                                Lupa Kata Sandi?
                            </a>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="loginBtn" class="btn-primary w-full h-12 group">
                            <span id="loginBtnText">Masuk</span>
                        </button>

                        <!-- Error Message -->
                        <div id="formError" class="hidden p-4 rounded-lg bg-error-50 border border-error-200"
                            role="alert">
                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-error-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="flex-1">
                                    <h3 class="text-sm font-semibold text-error-800 mb-1">Terjadi Kesalahan</h3>
                                    <p id="formErrorMessage" class="text-sm text-error-700"></p>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Register Link -->
                    <div class="mt-8 pt-6 border-t border-border text-center">
                        <p class="text-sm text-text-secondary">
                            Belum punya akun?
                            <a href="{{ '/register' }}"
                                class="text-primary hover:text-primary-700 font-semibold transition-colors">
                                Daftar di sini
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Security Notice -->
                <div class="mt-6 p-4 rounded-lg bg-info-50 border border-info-200">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-info-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-sm text-info-800">
                                <span class="font-semibold">Keamanan Akun:</span> Kami menggunakan enkripsi tingkat
                                tinggi untuk melindungi informasi login Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        // Form Elements
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const rememberMeCheckbox = document.getElementById('rememberMe');
            const loginBtn = document.getElementById('loginBtn');
            const loginBtnText = document.getElementById('loginBtnText');
            const loginBtnIcon = document.getElementById('loginBtnIcon');
            const loginBtnSpinner = document.getElementById('loginBtnSpinner');
            const formError = document.getElementById('formError');
            const formErrorMessage = document.getElementById('formErrorMessage');
            const togglePasswordBtn = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeOffIcon = document.getElementById('eyeOffIcon');
            const googleLoginBtn = document.getElementById('googleLoginBtn');
            const forgotPasswordLink = document.getElementById('forgotPasswordLink');

            // Toast Elements
            const toast = document.getElementById('toast');
            const toastIcon = document.getElementById('toastIcon');
            const toastTitle = document.getElementById('toastTitle');
            const toastMessage = document.getElementById('toastMessage');
            const toastClose = document.getElementById('toastClose');

            // Toggle Password Visibility
            togglePasswordBtn.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                eyeIcon.classList.toggle('hidden');
                eyeOffIcon.classList.toggle('hidden');
                togglePasswordBtn.setAttribute('aria-label', type === 'password' ? 'Tampilkan kata sandi' : 'Sembunyikan kata sandi');
            });

            // Email Validation
            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            // Show Field Error
            function showFieldError(field, message) {
                const errorElement = document.getElementById(`${field.id}-error`);
                field.classList.add('input-error');
                errorElement.textContent = message;
                errorElement.classList.remove('hidden');
            }

            // Clear Field Error
            function clearFieldError(field) {
                const errorElement = document.getElementById(`${field.id}-error`);
                field.classList.remove('input-error');
                errorElement.textContent = '';
                errorElement.classList.add('hidden');
            }

            // Show Form Error
            function showFormError(message) {
                formErrorMessage.textContent = message;
                formError.classList.remove('hidden');
                formError.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }

            // Clear Form Error
            function clearFormError() {
                formError.classList.add('hidden');
                formErrorMessage.textContent = '';
            }

            // Show Toast Notification
            function showToast(type, title, message) {
                const icons = {
                    success: '<svg class="w-6 h-6 text-success-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>',
                    error: '<svg class="w-6 h-6 text-error-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>',
                    info: '<svg class="w-6 h-6 text-info-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>'
                };

                toastIcon.innerHTML = icons[type] || icons.info;
                toastTitle.textContent = title;
                toastMessage.textContent = message;
                toast.classList.remove('hidden');

                setTimeout(() => {
                    toast.classList.add('hidden');
                }, 5000);
            }

            // Close Toast
            toastClose.addEventListener('click', () => {
                toast.classList.add('hidden');
            });

            // Real-time Email Validation
            emailInput.addEventListener('blur', () => {
                const email = emailInput.value.trim();
                if (email && !validateEmail(email)) {
                    showFieldError(emailInput, 'Format email tidak valid');
                } else {
                    clearFieldError(emailInput);
                }
            });

            emailInput.addEventListener('input', () => {
                if (emailInput.classList.contains('input-error')) {
                    clearFieldError(emailInput);
                }
            });

            // Real-time Password Validation
            passwordInput.addEventListener('blur', () => {
                const password = passwordInput.value;
                if (password && password.length < 8) {
                    showFieldError(passwordInput, 'Kata sandi minimal 8 karakter');
                } else {
                    clearFieldError(passwordInput);
                }
            });

            passwordInput.addEventListener('input', () => {
                if (passwordInput.classList.contains('input-error')) {
                    clearFieldError(passwordInput);
                }
            });

            // Form Submission
            loginForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                clearFormError();

                // Get form values
                const email = emailInput.value.trim();
                const password = passwordInput.value;
                const rememberMe = rememberMeCheckbox.checked;

                // Validate fields
                let hasError = false;

                if (!email) {
                    showFieldError(emailInput, 'Email wajib diisi');
                    hasError = true;
                } else if (!validateEmail(email)) {
                    showFieldError(emailInput, 'Format email tidak valid');
                    hasError = true;
                }

                if (!password) {
                    showFieldError(passwordInput, 'Kata sandi wajib diisi');
                    hasError = true;
                } else if (password.length < 8) {
                    showFieldError(passwordInput, 'Kata sandi minimal 8 karakter');
                    hasError = true;
                }

                if (hasError) return;

                // Show loading state
                loginBtn.disabled = true;
                loginBtnText.textContent = 'Memproses...';
                loginBtnIcon.classList.add('hidden');
                loginBtnSpinner.classList.remove('hidden');

                // Simulate API call
                setTimeout(() => {
                    // Check credentials against mock users
                    const user = mockUsers.find(u => u.email === email && u.password === password);

                    if (user) {
                        // Successful login
                        showToast('success', 'Login Berhasil', `Selamat datang kembali, ${user.name}!`);

                        // Store session (mock)
                        sessionStorage.setItem('user', JSON.stringify({
                            email: user.email,
                            name: user.name,
                            rememberMe: rememberMe
                        }));

                        // Redirect after short delay
                        setTimeout(() => {
                            if (email.includes('admin')) {
                                window.location.href = 'admin_dashboard.html';
                            } else {
                                window.location.href = 'user_profile_management.html';
                            }
                        }, 1500);
                    } else {
                        // Failed login
                        showFormError('Email atau kata sandi yang Anda masukkan salah. Silakan coba lagi.');

                        // Reset button state
                        loginBtn.disabled = false;
                        loginBtnText.textContent = 'Masuk';
                        loginBtnIcon.classList.remove('hidden');
                        loginBtnSpinner.classList.add('hidden');
                    }
                }, 1500);
            });

            // Google Login
            googleLoginBtn.addEventListener('click', () => {
                showToast('info', 'Google Login', 'Fitur login dengan Google akan segera tersedia.');

                // Mock Google OAuth flow
                setTimeout(() => {
                    const mockGoogleUser = {
                        email: 'google.user@gmail.com',
                        name: 'Google User'
                    };

                    sessionStorage.setItem('user', JSON.stringify(mockGoogleUser));
                    showToast('success', 'Login Berhasil', `Selamat datang, ${mockGoogleUser.name}!`);

                    setTimeout(() => {
                        window.location.href = 'user_profile_management.html';
                    }, 1500);
                }, 2000);
            });

            // Forgot Password
            forgotPasswordLink.addEventListener('click', (e) => {
                e.preventDefault();
                showToast('info', 'Reset Kata Sandi', 'Link reset kata sandi akan dikirim ke email Anda.');
            });

            // Check for existing session on page load
            window.addEventListener('DOMContentLoaded', () => {
                const user = sessionStorage.getItem('user');
                if (user) {
                    const userData = JSON.parse(user);
                    showToast('info', 'Sudah Login', `Anda sudah login sebagai ${userData.name}`);
                    setTimeout(() => {
                        if (userData.email.includes('admin')) {
                            window.location.href = 'admin_dashboard.html';
                        } else {
                            window.location.href = 'user_profile_management.html';
                        }
                    }, 1500);
                }
            });
    </script>

</x-guest-layout>