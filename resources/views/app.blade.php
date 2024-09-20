<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Service Laptop')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Add Bootstrap CSS link -->
</head>
<!-- <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                @if(Auth::guard('customer')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.logout') }}">Logout</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Add Bootstrap JS link -->
<!-- </body> --> 
</html>
