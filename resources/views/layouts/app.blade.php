<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Logbook Langit') — Logbook Langit</title>

    {{-- Tailwind CSS via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Custom CSS dipanggil dengan asset() --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-slate-900 text-gray-100 min-h-screen flex flex-col">

    <x-navbar />

    <main class="flex-1 container mx-auto px-6 py-8">
        @yield('content')
    </main>

    <x-footer />

    {{-- Custom JS dipanggil dengan asset() --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>