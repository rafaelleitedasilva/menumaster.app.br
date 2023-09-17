<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu Master</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ Vite::asset('resources/favicon/favicon.ico') }}" type="image/x-icon">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js', ''])
    </head>
    <body>
        @yield('content')
    </body>
</html>