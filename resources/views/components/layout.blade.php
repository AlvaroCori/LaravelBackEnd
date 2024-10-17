<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <nav>
            <x-nav-link href="/">HOME</x-nav-link>
            <x-nav-link href="/about">ABOUT</x-nav-link>
            <x-nav-link href="/contact">CONTACT</x-nav-link>
        </nav>
        {{$slot}}
    </body>
</html>
