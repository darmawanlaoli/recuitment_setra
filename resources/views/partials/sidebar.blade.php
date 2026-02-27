<!-- Profile Photo Section -->
<div class="lg:col-span-1">
    <div class="card sticky top-24">
        <div class="text-center">
            <div class="relative inline-block mb-6">
                <img src="{{ Auth::user()->avatar }}" alt="Foto profil"
                    class="w-32 h-32 rounded-full object-cover border-4 border-primary-100 shadow-lg"
                    onerror="this.src='https://cdn.vectorstock.com/i/500p/29/52/faceless-male-avatar-in-hoodie-vector-56412952.jpg'; this.onerror=null;">
                <button
                    class="absolute bottom-0 right-0 w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center shadow-lg hover:bg-primary-700 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                </button>
            </div>
            <h3 class="text-xl font-bold text-text-primary mb-2 font-heading">
                {{ Auth::user()->name }}</h3>
            <p class="text-sm text-text-secondary mb-4 font-caption">Pencari Kerja</p>
            <div class="flex items-center justify-center gap-2 text-sm text-text-secondary mb-6">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>
                <span>Tahap Melamar Kerja</span>
            </div>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-primary-50 rounded-lg">
                    <span class="text-sm text-text-secondary">Ajukan Lamaran</span>
                    <span class="text-lg font-bold text-primary font-heading">0</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-success-50 rounded-lg">
                    <span class="text-sm text-text-secondary">Menunggu Approval</span>
                    <span class="text-lg font-bold text-success-600 font-heading">0</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-warning-50 rounded-lg">
                    <span class="text-sm text-text-secondary">Mengisi Data Diri</span>
                    <span class="text-lg font-bold text-warning-600 font-heading">0</span>
                </div>
                <div class="flex items-center justify-between p-3 bg-warning-50 rounded-lg">
                    <span class="text-sm text-text-secondary">Mengisi Form Pertanyaan</span>
                    <span class="text-lg font-bold text-warning-600 font-heading">0</span>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>


    </div>
</div>