<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth md:scroll-auto bg-white dark:bg-gray-950 scheme-light dark:scheme-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>{{ $title ?? 'Caio Adriano — Consultor em Soluções Tecnológicas' }}</title>
    <meta name="title" content="{{ $title ?? 'Caio Adriano — Consultor em Soluções Tecnológicas' }}">
    <meta name="description"
        content="Portfólio de Caio Adriano, consultor em soluções tecnológicas, especializado em Laravel, Inertia.js e desenvolvimento de sistemas personalizados.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Caio Adriano — Consultor em Soluções Tecnológicas' }}">
    <meta property="og:description"
        content="Apresentação e portfólio de projetos desenvolvidos por Caio Adriano.">
    <meta property="og:locale" content="pt_BR">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'Caio Adriano — Consultor em Soluções Tecnológicas' }}">
    <meta property="twitter:description" content="Portfólio de soluções em tecnologia com Laravel e Inertia.js.">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @inertiaHead
</head>

<body class="bg-[#FDFDFC]">
    @inertia
</body>

</html>