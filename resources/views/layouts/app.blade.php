<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devstagram @yield('titulo')</title>

    @vite('resources/css/app.css')
</head>
<body class="latte bg-crust dark:mocha dark:bg-crust">
    <header class="bg-base dark:bg-base p-5 border-b shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black text-pink dark:text-mauve ">Devstagram</h1>
            <nav class="flex gap-2 items-center">
                <a class="text-red dark:text-blue font-bold uppercase" href="/login">Login</a>
                <a class="text-red dark:text-blue font-bold uppercase" href="{{route('register')}}">Sign up</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl text-pink dark:text-pink mb-10">
            @yield('title')
        </h2>
        @yield('content')
    </main>
    <footer class="text-center p-5 mt-10 font-bold uppercase text-text dark:text-text">
        Joaquín León Quero - All rights reserved {{ date('Y') }}
    </footer>
</body>
</html>