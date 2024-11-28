<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devstagram -@yield('sitio')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <script src="{{ asset ('js.app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/">
            <h1 class="text-3xl font-black">Devstagram</h1>
        </a>
        @guest
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600 text-sm" href="login">Login</a>
            <a class="font-bold uppercase text-gray-600 text-sm" href="crear-cuenta">Crear cuenta</a>
        </nav>
        @endguest

        @auth
        <nav class="flex gap-2 items-center">
            <p class="font-bold text-gray-600">Hola: 
                <span class="font-normal">{{ auth()->user()->username }}</span></p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Salir</button>
                </form>
        </nav>
        @endauth

            
        </div>
    </header>
<main class="container mx-auto mt-10">
<h2 class="font-black text-center text-2xl mb-10">
    @yield('titulo')
</h2>
@yield('contenido')
</main>
<footer class="mt-10 font-bold text-center text-gray-500 uppercase">
Devstagram - Todos los derechos reservados {{ now()->year }}
</footer>
</body>
</html>