<style>
    .verify-email {
        margin-top: 30px;
    }

    .card {
        width: 70%;
        margin: auto;
    }
</style>

<div class="container verify-email">
    <div class="card">
        <div class="card-body">

            <x-guest-layout>
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Terima kasih telah mendaftar! Silahkan klik link yang kami kirim ke email Anda untuk
                    mengaktifkan
                    akun Anda.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('Link verifikasi yang baru telah dikirim ke email Anda.') }}
                </div>
                @endif

                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <x-primary-button>
                                {{ __('Kirim Ulang Link Verifikasi') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </x-guest-layout>

        </div>
    </div>
</div>