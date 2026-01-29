<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Akun Admin</title>

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
            <h5 class="text-white text-center py-3">Panel Admin</h5>
            <a href="#">Dashboard</a>
            <a href="#" class="active">Pengaturan Akun</a>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <h4 class="mb-3">Edit Akun</h4>
            <p class="text-muted">Home / Pengaturan Akun / Edit</p>

            <div class="card shadow-sm">
                <div class="card-header fw-bold">
                    Form Edit Akun Admin
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/update_admin') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" value="Administrator" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="admin@admin.com" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Kosongkan jika tidak ingin diubah">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-primary">
                                Simpan Perubahan
                            </button>
                            <a href="/admin/admin" class="btn btn-secondary">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <footer class="text-center text-muted mt-5">
                © 2026 GodNnail
            </footer>
        </div>
    </div>

</body>

</html>
