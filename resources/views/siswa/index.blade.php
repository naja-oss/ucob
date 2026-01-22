<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar {
            background-color: #0d6efd;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }

        .hero {
            background: linear-gradient(135deg, #0d6efd, #0dcaf0);
            color: white;
            padding: 50px 0;
            margin-bottom: 30px;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        table th {
            background-color: #0d6efd;
            color: white;
        }
    </style>
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
                        <a class="nav-link" href="{{ url('/siswa') }}">Home</a>
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
    <div class="container mb-5">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between mb-3">
                    <h5 class="fw-bold">Tabel Data Siswa</h5>
                    <a href="{{ url('/siswa/tambah') }}" class="btn btn-success">
                        + Tambah Siswa
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                                @foreach ($data as $datum)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $datum->nama }}</td>
                                        <td>{{ $datum->kelas }}</td>
                                        <td>{{ $datum->jurusan }}</td>
                                        <td>{{ $datum->jenis_kelamin }}</td>
                                        <td>{{ $datum->tempat_lahir }}</td>
                                        <td>{{ $datum->tanggal_lahir->isoFormat('D MMMM Y') }}</td>
                                        <td>{{ $datum->alamat }}</td>
                                        <td style="width: 150px">
                                            <center>
                                                <img src="{{ asset('foto_siswa/' . $datum->foto) }}"
                                                    alt="foto  {{ $datum->nama }}" class="img-thumbnail"
                                                    style="width: 50%;">
                                            </center>
                                        </td>
                                        <td>
                                            <a href="{{ url('/siswa/edit/' . $datum->id) }}"
                                                class="btn btn-warning btn-sm">
                                                Edit
                                            </a>
                                            <a href="{{ url('/siswa/hapus/' . $datum->id) }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9">
                                        <h6 class="text-center text-muted">
                                            Data siswa belum tersedia
                                        </h6>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ url('/siswa/dashboard') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
