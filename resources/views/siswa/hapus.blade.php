@extends('layouts.back')
@section('title', 'Data Siswa')
@section('content')

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
                        <center><img src="{{ asset('foto_siswa/' . $data->foto) }}" alt="foto  {{ $data->nama }}"
                                class="img-thumbnail" style="width: 90%;"></center>
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
                            <td>{{ $data->tanggal_lahir->isoFormat('D MMMM YYYY') }}</td>
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


@endsection

@push('css')
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
@endpush
