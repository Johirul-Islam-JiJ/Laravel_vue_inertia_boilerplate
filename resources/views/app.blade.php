<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title inertia>{{ \App\Models\Settings::first()->name ?? 'Laravel' }}</title>

    <link rel="icon"
          type="image/x-icon"
          id="favicon"
          href="{{ asset('storage/images/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet"
          href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ asset('js/app.js') }}"
            defer></script>
    <script src="{{ asset('js/vendor.js') }}"
            defer></script>
    <script src="{{ asset('js/manifest.js') }}"
            defer></script>
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
