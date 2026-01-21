<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            margin: 0;
        }

        /* NAVBAR */
        .navbar {
            background-color: #0d6efd;
            height: 56px;
        }

        .navbar-brand,
        .navbar i {
            color: white;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            width: 240px;
            height: calc(100vh - 56px);
            background-color: #2f3542;
            color: white;
            transition: 0.3s;
            overflow: hidden;
        }

        .sidebar.hide {
            width: 0;
        }

        .sidebar .admin {
            background-color: #1e272e;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #444;
        }

        .sidebar .admin i {
            font-size: 40px;
        }

        .sidebar a {
            color: #dcdde1;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #0d6efd;
            color: white;
        }

        /* CONTENT */
        .content {
            margin-left: 240px;
            padding: 80px 30px 30px;
            transition: 0.3s;
        }

        .content.full {
            margin-left: 0;
        }

        .card-stat {
            border-radius: 15px;
            color: white;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar fixed-top">
        <div class="container-fluid px-4">
            <button class="btn btn-primary" onclick="toggleSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <span class="navbar-brand fw-bold ms-3">Pendaftaran PKL</span>
        </div>
    </nav>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <div class="admin">
            <i class="bi bi-person-circle"></i>
            <div class="fw-bold mt-2">Admin</div>
        </div>

        <a href="{{ url('/siswa/dashboard') }}">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>

        <a href="{{ url('/siswa') }}">
            <i class="bi bi-house me-2"></i> Home
        </a>

        <a href="{{ url('/login') }}">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
    </div>

    <!-- CONTENT -->
    <div class="content" id="content">

        <h4 class="mb-4">Dashboard</h4>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-stat bg-primary shadow">
                    <div class="card-body">
                        <h5>Total Siswa</h5>
                        <h2>{{ $total ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-stat bg-success shadow">
                    <div class="card-body">
                        <h5>Laki-laki</h5>
                        <h2>{{ $laki ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-stat bg-warning shadow">
                    <div class="card-body">
                        <h5>Perempuan</h5>
                        <h2>{{ $perempuan ?? 0 }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 shadow-sm">
            <div class="card-body">
                <h5>Informasi</h5>
                <p>
                    Selamat datang di dashboard sistem pendaftaran siswa.
                    Gunakan menu di samping untuk mengelola data.
                </p>
            </div>
        </div>

    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('hide');
            document.getElementById('content').classList.toggle('full');
        }
    </script>

</body>

</html>
