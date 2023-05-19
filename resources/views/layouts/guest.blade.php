<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased"> 
        <div class="grid grid-cols-2 grid-rows-1 gap-0">
            <div class="w-full h-screen md:w-auto justify-center flex items-center bg-[#D2D8DF]">
                <img src="{{ asset('/img/logoPT.png') }}" alt="" srcset="">
            </div>

            <div class="w-full h-screen md:w-auto justify-center flex items-center bg-[#D2D8DF] ">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>


        </div>

    </body>
</html>
