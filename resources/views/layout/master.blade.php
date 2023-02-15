<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="/mahasiswa" class="nav-link @yield('menuMahasiswa')">Data Mahasiswa</a>
                </li>
                <li class="navbar-item">
                    <a href="/dosen" class="nav-link @yield('menuDosen')">Data Dosen</a>
                </li>
                <li class="navbar-item">
                    <a href="/gallery" class="nav-link @yield('menuGallery')">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>

    @section('content')
        <div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
    @show

    {{-- @yield('content') --}}

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | $copy {{ date('Y') }} strawberry
        </div>
    </footer>

    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
