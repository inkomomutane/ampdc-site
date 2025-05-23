<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans  antialiased scroll-smooth selection:bg-primary-400 selection:text-white md:selection:text-primary-400 md:selection:bg-white">
    <article class="grid grid-cols-1 md:grid-cols-2 bg-primary-100 min-h-screen">
       @yield('svg')
        <div class="md:bg-primary-500 text-primary-50 grid justify-items-center">
            <div class="self-center grid justify-center px-8">
                <h1 class="text-center self-center text-3xl text-primary-500 md:text-white font-extrabold md:py-8"> Erro @yield('code') | @yield('message')</h1>
                <a href="{{ URL::previous() }}" class="text-center w-fit h-fit bg-primary-500 md:bg-primary-50 py-2 px-8
                my-4 md:text-primary-500 mx-auto rounded text-lg font-bold">Voltar</a>
            </div>
            </div>

    </article>
</body>
</html>
