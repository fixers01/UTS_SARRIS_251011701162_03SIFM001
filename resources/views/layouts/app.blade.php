<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#10372f">
    <title>@yield('title', 'Resep Nusantara') | Dapur Nusantara</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-dark site-nav">
        <div class="container py-1">
            <a class="navbar-brand site-brand" href="{{ route('home') }}">Dapur Nusantara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('recipes.index', 'recipes.show') ? 'active' : '' }}" href="{{ route('recipes.index') }}">Semua Resep</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle {{ request()->routeIs('recipes.category') ? 'active' : '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('recipes.category', 'makanan-utama') }}">Makanan Utama</a></li>
                            <li><a class="dropdown-item" href="{{ route('recipes.category', 'minuman') }}">Minuman</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page-shell">
        @yield('content')
    </main>

    <footer class="site-footer py-4">
        <div class="container d-flex flex-column flex-sm-row justify-content-between gap-2 small">
                <span>Dapur Nusantara</span>
                <a class="link-light" href="{{ route('about') }}">Tentang proyek</a>
        </div>
    </footer>
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>