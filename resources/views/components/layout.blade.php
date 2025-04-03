<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Network</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif
    <header>
        <nav>
            <h1>App Network</h1>
            <a href="{{ route('apps.index') }}">All Apps</a>
            @guest
                <a href="{{ route('show.login') }}">Login</a>
                <a href="{{ route('show.register') }}">Register</a>
            @endguest

            @auth 
                <span class="border-r-2 pr-2">Hi there, {{ Auth::user()->name }}</span>
                <a href="{{ route('apps.create') }}">Create a New App</a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            @endauth

        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>