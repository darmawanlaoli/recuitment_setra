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

            <div class="space-y-1">

                <div class="flex items-center justify-center gap-2 text-sm text-text-secondary">
                    <span>Tahap Melamar Kerja:</span>
                </div>

                @php
                $hasApplication = !is_null($applications);
                $status = $applications->status ?? null;
                $isApproved = $status === 'approved';
                $isPendingOrReject= in_array($status, ['pending','rejected']);
                $profileDone = $is_profile_completed;
                $questionDone = $applications->is_question_completed ?? false;

                /*
                STATE MATRIX

                1. Belum pernah apply
                2. Pending / Rejected
                3. Approved
                4. Profile completed
                */

                @endphp

                @if(!$hasApplication || $isPendingOrReject)

                {{-- AJUKAN LAMARAN AKTIF --}}
                <div onclick="document.location.href='{{ route('dashboard') }}'"
                    class="flex items-center justify-between p-3 bg-primary rounded-lg cursor-pointer">
                    <span class="text-sm text-white">Ajukan Lamaran</span>
                    <span class="text-lg font-bold text-white font-heading">✓</span>
                </div>

                @php
                $alertMessage = !$hasApplication
                ? 'Silahkan mengajukan lamaran terlebih dahulu'
                : 'Status pengajuan Anda masih PENDING atau REJECTED';
                @endphp

                @foreach (['Mengisi Data Diri','Mengisi Pertanyaan','Mengerjakan Test'] as $menu)
                <div onclick="alert('{{ $alertMessage }}')"
                    class="flex items-center justify-between p-3 bg-disable rounded-lg cursor-pointer">
                    <span class="text-sm text-secondary">{{ $menu }}</span>
                    <span class="text-lg font-bold text-danger font-heading">X</span>
                </div>
                @endforeach

                @endif


                @if($isApproved)

                {{-- AJUKAN LAMARAN NONAKTIF --}}
                <div onclick="alertMessage('Anda sudah mengajukan lamaran')"
                    class="flex items-center justify-between p-3 bg-disable rounded-lg cursor-pointer">
                    <span class="text-sm text-secondary">Ajukan Lamaran</span>
                    <span class="text-lg font-bold text-danger font-heading">X</span>
                </div>

                {{-- MENGISI DATA DIRI AKTIF --}}
                @if(!$profileDone)
                <div onclick="document.location.href='{{ route('profile.edit',$applications->id) }}'"
                    class="flex items-center justify-between p-3 bg-primary rounded-lg">
                    <span class="text-sm text-white">Mengisi Data Diri</span>
                    <span class="text-lg font-bold text-white font-heading">✓</span>
                </div>

                {{-- Pertanyaan & Test Nonaktif --}}
                @foreach (['Mengisi Pertanyaan','Mengerjakan Test'] as $menu)
                <div onclick="alert('Lengkapi Data Diri terlebih dahulu')"
                    class="flex items-center justify-between mb-4 p-3 bg-disable rounded-lg cursor-pointer">
                    <span class="text-sm text-secondary">{{ $menu }}</span>
                    <span class="text-lg font-bold text-danger font-heading">X</span>
                </div>
                @endforeach


                @else

                {{-- Data Diri Done --}}
                <div class="flex items-center justify-between p-3 bg-success rounded-lg">
                    <span class="text-sm text-white">Mengisi Data Diri</span>
                    <span class="text-lg font-bold text-white font-heading">✓</span>
                </div>

                {{-- Pertanyaan Aktif --}}
                @if(!$questionDone)
                <div onclick="document.location.href='{{ route('answer_question',$applications->id) }}'"
                    class="flex items-center justify-between p-3 bg-primary rounded-lg cursor-pointer">
                    <span class="text-sm text-white">Mengisi Pertanyaan</span>
                    <span class="text-lg font-bold text-white font-heading">✓</span>
                </div>

                <div onclick="document.location.href='{{ route('test',$applications->id) }}'"
                    class="flex items-center justify-between mb-4 p-3 bg-disable rounded-lg cursor-pointer">
                    <span class="text-sm text-secondary">Mengerjakan Test</span>
                    <span class="text-lg font-bold text-danger font-heading">X</span>
                </div>

                @else

                {{-- Semua selesai → Test Aktif --}}
                <div class="flex items-center justify-between p-3 bg-success rounded-lg">
                    <span class="text-sm text-white">Mengisi Pertanyaan</span>
                    <span class="text-lg font-bold text-white font-heading">✓</span>
                </div>

                <a href="{{ route('test.index') }}" class="p-1">
                    <div class="flex items-center justify-between p-3 bg-primary rounded-lg">
                        <span class="text-sm text-white">Mengerjakan Test</span>
                        <span class="text-lg font-bold text-white font-heading">✓</span>
                    </div>
                </a>

                @endif
                @endif
                @endif

                {{-- <a class="p-1" href="{{ route('dashboard') }}">
                    <div class="flex items-center justify-between p-3 bg-primary rounded-lg">
                        <span class="text-sm text-white">Ajukan Lamaran</span>
                        <span class="text-lg font-bold text-primary font-heading">0</span>
                    </div>
                </a>

                @if($applications)

                @if($applications->status == 'pending' || $applications->status == 'rejected')

                <div>
                    <div onclick="alert('Status pengajuan Anda masih PENDING atau REJECTED')"
                        class="flex items-center justify-between mb-4 p-3 bg-disable rounded-lg">
                        <span class="text-sm text-secodary">Mengisi Data Diri</span>
                        <span class="text-lg font-bold text-danger font-heading">X</span>
                    </div>

                    <div onclick="alert('Status pengajuan Anda masih PENDING atau REJECTED')"
                        class="flex items-center justify-between mb-4 p-3 bg-disable rounded-lg">
                        <span class="text-sm text-secodary">Mengisi Pertanyaan </span>
                        <span class="text-lg font-bold text-danger font-heading">X</span>
                    </div>

                    <div onclick="alert('Status pengajuan Anda masih PENDING atau REJECTED')"
                        class="flex items-center justify-between mb-4 p-3 bg-disable rounded-lg">
                        <span class="text-sm text-secodary">Mengerjakan Test</span>
                        <span class="text-lg font-bold text-danger font-heading">X</span>
                    </div>
                </div>

                @else

                <div>
                    <a href="" class="p-1">
                        <div class="flex items-center justify-between p-3 bg-disable rounded-lg">
                            <span class="text-sm text-secodary">Mengisi Data Diri</span>
                            <span class="text-lg font-bold text-warning-600 font-heading">0</span>
                        </div>
                    </a>

                    <a href="" class="p-1">
                        <div class="flex items-center justify-between p-3 bg-disable rounded-lg">
                            <span class="text-sm text-secodary">Mengisi Pertanyaan</span>
                            <span class="text-lg font-bold text-warning-600 font-heading">0</span>
                        </div>
                    </a>

                    <a href="" class="p-1">
                        <div class="flex items-center justify-between p-3 bg-disable rounded-lg">
                            <span class="text-sm text-secodary">Mengerjakan Test</span>
                            <span class="text-lg font-bold text-warning-600 font-heading">0</span>
                        </div>
                    </a>
                </div>

                @endif;

                @else

                <div>
                    <div onclick="alert('Silahkan mengajukan lamaran terlebih dahulu')"
                        class="flex items-center justify-between p-3 bg-disable rounded-lg">
                        <span class="text-sm text-secodary">Mengisi Data Diri</span>
                        <span class="text-lg font-bold text-danger font-heading">X</span>
                    </div>

                    <div onclick="alert('Silahkan mengajukan lamaran terlebih dahulu')"
                        class="flex items-center justify-between p-3 bg-disable rounded-lg">
                        <span class="text-sm text-secodary">Mengisi Pertanyaan </span>
                        <span class="text-lg font-bold text-danger font-heading">X</span>
                    </div>

                    <div onclick="alert('Silahkan mengajukan lamaran terlebih dahulu')"
                        class="flex items-center justify-between p-3 bg-disable rounded-lg">
                        <span class="text-sm text-secodary">Mengerjakan Test</span>
                        <span class="text-lg font-bold text-danger font-heading">X</span>
                    </div>
                </div>

                @endif --}}



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