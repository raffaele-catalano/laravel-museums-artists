<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artists & Museums DB</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="/icons8-museo-96.png" type="png">

    {{-- CK Editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark text-light">
    @include('partials.header')
    <main>
        @yield('content')
    </main>

</body>

</html>
