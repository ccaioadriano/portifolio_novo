<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="scroll-smooth md:scroll-auto bg-white dark:bg-gray-950 scheme-light dark:scheme-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Caio Adriano — Consultor em Soluções Tecnológicas</title>
    <meta name="title" content="Criação de Site e Consultoria Digital | Caio Adriano">
    <meta name="description"
        content="Especialista em criação de site e consultoria digital para ajudar negócios a expandirem sua presença online.">
    <meta name="keywords"
        content="criação de site, criação de um site, consultoria digital, presença digital, Caio Adriano, sistemas personalizados, automação, soluções tecnológicas">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Criação de Site e Consultoria Digital | Caio Adriano' }}">
    <meta property="og:description"
        content="Especialista em criação de site e consultoria digital para ajudar negócios a expandirem sua presença online.">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image" content="{{ asset('images/preview.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'Criação de Site e Consultoria Digital | Caio Adriano' }}">
    <meta property="twitter:description"
        content="Especialista em criação de site e consultoria digital para expandir sua presença online.">
    <meta property="twitter:image" content="{{ asset('images/preview.png') }}">

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