@extends('layouts.back')
@section('title', 'Data Siswa')
@section('content')

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
                                                alt="foto  {{ $datum->nama }}" class="img-thumbnail" style="width: 50%;">
                                        </center>
                                    </td>
                                    <td>
                                        <a href="{{ url('/siswa/edit/' . $datum->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <a href="{{ url('/siswa/hapus/' . $datum->id) }}"
                                            class="btn btn-danger btn-sm">Hapus
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
