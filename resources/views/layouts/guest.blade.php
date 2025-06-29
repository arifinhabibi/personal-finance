<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Catatan Keuangan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <link href="{{ asset('build/assets/app-DO6Blc0x.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://broadly-settled-drum.ngrok-free.app/build/assets/app-DO6Blc0x.css">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                {{ $subTitle ?? '' }}
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        {{-- <script src="{{ asset('build/assets/app-DaBYqt0m.js') }}"></script> --}}
        <script src="https://broadly-settled-drum.ngrok-free.app/build/assets/app-DaBYqt0m.js"></script>
    </body>
</html>
