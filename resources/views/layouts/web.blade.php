<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexy Love</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="sticky top-0 z-20 shadow-lg">
        <div class="py-1 bg-pink-500"></div>
        <nav class="flex flex-row justify-between px-4 py-2 bg-pink-400">
            <a href="{{ route('home') }}" class="">
                <img src="{{ asset('storage/imgs/logos.png') }}" class="h-8 mx-auto">
            </a>
            <ul class="overflow-hidden">
                <li class="float-left">
                    <a href="{{ route('home') }}" class="align-middle ">Inicio</a>
                </li>
            @auth
                <li class="float-left">
                    <a href="{{ url('dashboard') }}" class="ml-4 align-middle">
                        Dashboard
                    </a>
                </li>
            @else
                <li class="float-left">
                    <a href="{{ url('login') }}" class="ml-4 align-middle">
                        Login
                    </a>
                </li>
                <li class="float-left">
                    <a href="{{ url('register') }}" class="ml-4 align-middle">
                        Register
                    </a>
                </li>
            @endif
            </ul>
        </nav>
    </header>
    <main class="">
        <div class="">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-200 underline">
                Dashboard
            </a>
        @else
            <a href="{{ url('login') }}" class="text-sm text-gray-200 underline">
                Login
            </a>
            <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-200 underline">
                Register
            </a>
        @endif
    </footer>
</body>
</html>