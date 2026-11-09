<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login') — Logbook Langit</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-slate-900 text-gray-100 min-h-screen flex items-center justify-center">

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>