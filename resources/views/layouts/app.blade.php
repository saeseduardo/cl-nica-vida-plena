<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO --}}
    <title>@yield('title', 'Clínica Vida Plena — Atención Médica de Calidad en Venezuela')</title>
    <meta name="description" content="@yield('description', 'Más de 15 años cuidando familias venezolanas con medicina de calidad, tecnología moderna y un equipo comprometido con tu bienestar.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Vida Plena">
    <meta property="og:locale" content="es_VE">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Clínica Vida Plena — Atención Médica de Calidad')">
    <meta property="og:description" content="@yield('og_description', 'Más de 15 años cuidando familias venezolanas con medicina de calidad y tecnología moderna.')">
    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
    @endif

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Clínica Vida Plena')">
    <meta name="twitter:description" content="@yield('og_description', 'Más de 15 años cuidando familias venezolanas.')">

    {{-- Google Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Assets: Tailwind CSS + Alpine.js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#F8FAFB] text-dark-blue">

    @yield('content')

</body>
</html>
