<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MKBCENTRAL') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    @livewireStyles
</head>

<body class="font-sans text-gray-900 antialiased">
    <x-web-site.header />
    {{ $slot }}
    <x-web-site.footer />
    @livewireScripts
</body>

</html>
