<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Data</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #dc3545, #fd7e14);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .card-header {
            background-color: #dc3545;
            color: white;
            border-radius: 15px 15px 0 0;
        }

        table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header text-center">
                        <h5 class="mb-0">Konfirmasi Penghapusan</h5>
                    </div>

                    <div class="card-body text-center">
                        <p class="fw-bold mb-3">
                            Apakah Anda yakin ingin menghapus data siswa berikut?
                        </p>

                        <table class="table table-bordered">
                            <tr>
                                <td width="35%">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>{{ $data->kelas }}</td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>{{ $data->jurusan }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>{{ $data->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                        </table>

                        <form action="{{ url('/siswa/delete/' . $data->id) }}" method="POST" class="mt-3">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger px-4">
                                Ya, Hapus
                            </button>
                            <a href="{{ url('/siswa') }}" class="btn btn-secondary px-4">
                                Batal
                            </a>
                        </form>
                    </div>

                    <div class="card-footer text-center text-muted">
                        Data yang dihapus tidak dapat dikembalikan
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
