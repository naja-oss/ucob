<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pengaturan Akun Admin</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6f8;
        }

        .sidebar {
            width: 230px;
            min-height: 100vh;
            background-color: #1f2937;
        }

        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background-color: #2563eb;
            color: #fff;
        }

        .content {
            padding: 25px;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="d-flex">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <h5 class="text-white text-center py-3">Admin</h5>
            <a href="{{ url('/siswa/dashboard') }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>

            <a href="{{ url('/siswa') }}">
                <i class="bi bi-mortarboard me-2"></i> Data Siswa
            </a>

            <a href="{{ url('/admin/admin') }}">
                <i class="bi bi-person me-2"></i> Pengaturan Akun
            </a>

            <a href="{{ url('/login') }}">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <h4 class="mb-3">Akun</h4>
            <p class="text-muted">Home / Pengaturan Akun</p>

            <div class="card shadow-sm">
                <div class="card-header fw-bold">
                    Informasi Akun
                </div>
                <div class="card-body">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th width="120">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <a href="{{ url('/admin/edit_admin') }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="text-center text-muted mt-5">
                © 2026 GodNnail jaya cihuyy
            </footer>
        </div>
    </div>

</body>

</html>
