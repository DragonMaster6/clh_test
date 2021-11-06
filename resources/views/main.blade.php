<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

        <!-- Styles -->
        @livewireStyles
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body class="bg-gray-100 h-screen">
        <div class="w-4/5 mx-auto bg-blue-400 rounded-lg p-8 h-full">
            @yield('page-content')
        </div>
        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
