@extends('layouts.front')
@section('title', 'Tambah Data Siswa')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm">
                    <div class="card-header text-center" style="background-color: #2673e7;">
                        <h4 class="mb-0 fw-bold">Daftar Mahasiswa PKL</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('/umum/simpan/pendaftaran') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Foto --}}
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">Foto</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                    name="foto">
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Nama --}}
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Kelas --}}
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">Kelas</label>
                                <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                                    name="kelas">
                                @error('kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Jurusan --}}
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">Jurusan</label>
                                <input type="text" class="form-control @error('jurusan') is-invalid @enderror"
                                    name="jurusan">
                                @error('jurusan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Jenis Kelamin --}}
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">Jenis Kelamin</label>
                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin">
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <option value="">-- Pilih --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            {{-- Tempat Lahir --}}
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">Tempat Lahir</label>
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    name="tempat_lahir">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Tanggal Lahir --}}
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    name="tanggal_lahir">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Alamat --}}
                            <div class="mb-4">
                                <label class="form-label d-flex justify-content-between">Alamat</label>
                                <input class="form-control @error('alamat') is-invalid @enderror" name="alamat">
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Button --}}
                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ url('/umum/homepage') }}" class="btn btn-secondary">
                                    Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-center text-muted">
                        © 2026 Website Pendaftaran
                    </div>
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
