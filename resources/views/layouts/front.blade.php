<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran PKL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('css')
    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        }

        .navbar-brand span {
            font-size: 28px;
            font-weight: bold;
            color: #ffd400;
        }

        .hero-title {
            font-weight: bold;
            margin: 40px 0;
        }

        .course-card img {
            height: 180px;
            object-fit: contain;
            padding: 10px;
        }

        .course-card {
            border-radius: 10px;
            transition: 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(15, 2, 70, 0.15);
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('logo.png') }}" alt="Logo" width="50" class="me-2">
            <span>Pendaftaran PKL</span>
        </a>

        <div class="ms-auto">
            <ul class="navbar-nav flex-row gap-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- HERO --}}
    <div class="container text-center">
        @yield('content')
    </div>


</body>

</html>
