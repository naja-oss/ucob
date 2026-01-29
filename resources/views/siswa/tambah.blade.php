@extends('layouts.back')
@section('title', 'Data Siswa')
@section('content')

    <div class="col-md-7 col-lg-6">
        <div class="card">
            <div class="card-header text-center">
                <h4 class="mb-0">Tambah Data Siswa</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/siswa/tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Foto --}}

                    <div class="mb-4">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                            name="foto">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas"
                            name="kelas">
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                            placeholder="Rekayasa Perangkat Lunak">
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                            name="tempat_lahir">
                        @error('tempat_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            name="tanggal_lahir">
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat"></textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <a href="{{ url('/siswa') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

            <div class="card-footer text-center text-muted">
                © 2026 Website Pendaftaran
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
