<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @vite('resources/js/splide')
</head>

<body class="text-gray-800">
    @include('partials/nav')
        @yield('content')
    @include('partials/footer')
</body>

</html>
