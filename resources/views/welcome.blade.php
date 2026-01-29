<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Website Pendaftaran</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8fafc;
        }

        .navbar-brand {
            font-weight: 700;
            color: #2563eb !important;
        }

        .hero {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1 {
            font-weight: 800;
        }

        .hero span {
            color: #2563eb;
        }

        .btn-primary {
            background-color: #2563eb;
            border: none;
        }

        .btn-outline-primary {
            border-color: #2563eb;
            color: #2563eb;
        }

        .btn-outline-primary:hover {
            background-color: #2563eb;
            color: white;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-mortarboard-fill"></i> Pendaftaran PKL
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">
                            <i class="bi bi-house"></i> Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/umum/tentang') }}">
                            <i class="bi bi-info-circle"></i> Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/umum/homepage">
                            <i class="bi bi-journal-bookmark-fill"></i> Kursus
                        </a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="btn btn-primary rounded-pill px-4" href="{{ url('/login') }}">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <h1 class="mb-3">
                Selamat Datang di <span>Sistem Pendaftaran PKL</span>
            </h1>

            <p class="text-muted mb-4">
                Platform resmi untuk pendaftaran peserta Praktik Kerja Lapangan (PKL).
                Sistem ini dirancang untuk mempermudah proses pendaftaran secara online,
                cepat, dan terstruktur.
            </p>

            <div class="d-flex justify-content-center gap-3">
                <a href="{{ url('/umum/pendaftaran') }}" class="btn btn-primary btn-lg rounded-pill px-4">
                    <i class="bi bi-person"></i> Daftar Sekarang
                </a>

            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
