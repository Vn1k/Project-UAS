<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar-main">
            <div class="container">  
                <div class="navbar-mini id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-item">
                        @foreach ($navbars as $navbarItem)
                            <li class="nav-items">
                                <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
  
        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            Footer Section Goes Here...
        </footer>
    </div>
</body>
</html>