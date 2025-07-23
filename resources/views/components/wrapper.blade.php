<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'mNivesh')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="icon"          href="{{ asset('favicon.png') }}" type="image/png">
        <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body class="transition-all duration-500">
    @include('includes.header')
    @include('includes.floater')
    @php
        $customPages = ['contact-us', 'about-us', 'small-cap-funds', 'large-cap-funds', 'mid-cap-funds', 'invest-plan', 'mutual-funds'];
        $marginClass = in_array(request()->path(), $customPages) ? 'py-6 mt-18' : 'py-6 mt-20';
    @endphp
    <div class="scroll-container">

        <main class="main-class mx-auto {{ $marginClass }}">
            
            {{$slot}}
        </main>
        @include('includes.footer')
    </div>

    <script src="{{ asset('js/header.js') }}"></script>
    @stack('scripts')
</body>

</html>