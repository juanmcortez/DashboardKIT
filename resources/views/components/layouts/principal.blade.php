<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ sidebarOpen: false, sidebarCollapsed: false }">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="maximum-scale=1.0,width=device-width,initial-scale=1.0,user-scalable=0">
    <meta name="robots" content="noindex">
    <meta name="referrer" content="origin-when-cross-origin">

    <title>@yield('title', 'Dashboard')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/site/favicon-96x96.png') }}" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/site/favicon.svg') }}"/>
    <link rel="shortcut icon" href="{{ asset('images/site/favicon.ico') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/site/apple-touch-icon.png') }}"/>
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}"/>
    <link rel="manifest" href="{{ asset('images/site/site.webmanifest') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite([
            'resources/css/base_theme.css',
            'resources/js/base_theme.js'
        ])
    @endif
    @stack('styles')
</head>
<body class="inside">
<x-layouts.parts.alert/>
<aside>
    <header>
        <a class="h1" href="{{ route('dashboard') }}">
            <x-general.logo/>
            <h1>{{ config('app.name') }}</h1>
        </a>
    </header>
    <nav>{{ __('SIDEBAR NAV') }}</nav>
    <footer>{{ __('FOOTER') }}</footer>
</aside>
<main>
    {{ $slot }}
</main>
</body>
</html>
