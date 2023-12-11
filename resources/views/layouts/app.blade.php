<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>@yield('title', 'DC Comics')</title>
    @vite('resources/js/app.js')
</head>

<body class="vh-100 d-flex flex-column">

    {{-- Header --}}
    @include('partials.header')

    <main class="flex-grow-1">
      @yield('content')
    </main>

    {{-- footer --}}
    @include('partials.footer')

</body>

</html>