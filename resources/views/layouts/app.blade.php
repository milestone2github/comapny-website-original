<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'mNivesh Website')</title>

    {{-- Link your CSS files --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- Main Content --}}
    <div class="container mx-auto p-8">
        @yield('content')
    </div>

    {{-- Include your JavaScript files --}}
    <script src="{{ asset('js/header.js') }}"></script>
</body>
</html>
