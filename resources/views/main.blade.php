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
    <body>
        @yield('page-content')
        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
