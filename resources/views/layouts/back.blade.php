<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('css')
</head>

<body>

    <!-- NAVBAR (TAMPILAN AWAL MASUK) -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Pendaftaran PKL</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/siswa/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/siswa') }}">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO / HEADER -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="fw-bold">Data Siswa</h1>
            <p class="mb-0">Halaman pengelolaan data siswa terdaftar</p>
        </div>
    </section>

    <!-- CONTENT -->
    <div class="container d-flex justify-content-center align-items-center min-vh-50">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
