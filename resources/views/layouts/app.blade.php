<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Sistema MINEDUC</h1>
        </div>
    </header>

    <main class="p-6 container mx-auto">
        @yield('content')
    </main>
    
    <!-- Scripts -->
    <script src="{{ asset('assets/js/core/components/config.umd.js') }}"></script>
    <script src="{{ asset('assets/js/core/index.ts') }}"></script>
</body>
</html>