<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Manajemen Kelas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('kelas.index') }}">Kelas</a>
            <a href="#">Siswa</a>
        </nav>
    </header>

    <div class="container">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Manajemen Kelas</p>
    </footer>
</body>
</html>
