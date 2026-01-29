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


    {{ $slot }}


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