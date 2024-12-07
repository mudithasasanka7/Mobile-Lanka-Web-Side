<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Lanka</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            @auth
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                @endif
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Mobile Lanka. All rights reserved.</p>
    </footer>
</body>
</html>
