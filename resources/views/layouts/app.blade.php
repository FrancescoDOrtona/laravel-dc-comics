<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    <main>
      @yield('content')
    </main>

    {{-- footer --}}
    @include('partials.footer')

</body>

</html>