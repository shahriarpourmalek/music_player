<!DOCTYPE html>
<html lang="en">
<head>
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-900 text-white">
<header class="bg-green-500 py-4">
    <nav class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-lg font-bold">My App</a>
        <div>
            @if (Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-white font-bold">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-white font-bold">Login</a>
                <a href="{{ route('register') }}" class="ml-4 text-white font-bold">Register</a>
            @endif
        </div>
    </nav>
</header>
<main class="container mx-auto py-8">
    @yield('content')
</main>
</body>
</html>
