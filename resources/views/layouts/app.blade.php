<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Lanka</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <!-- Header (Navigation Bar) -->
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                @auth
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @if(auth()->user()->role == 'admin')
                        <li><a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a></li>
                    @endif
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Mobile Lanka</p>
    </footer>
</body>
</html>
