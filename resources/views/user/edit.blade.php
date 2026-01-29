@extends('layouts.back.front')
@section('title', 'Data Siswa')
@section('content')

    <div class="col-md-6">
        <div class="card">

            <div class="card-header text-center">
                <h5 class="mb-0">Edit Data Siswa</h5>
            </div>

            <div class="card-body">
                <form action="{{ url('/siswa/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    {{-- Foto --}}
                    @isset($data->foto)
                        <img src="{{ asset('foto_siswa' . '/' . $data->foto) }}" alt="foto {{ $data->nama }}"
                            class="img-thumbnail" style="width: 20%;">
                    @endisset
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Siswa</label>
                        <input type="file" name="foto" id="foto"
                            class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Nama -->
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            value="{{ $data->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kelas -->
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror"
                            value="{{ $data->kelas }}">
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jurusan -->
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror"
                            value="{{ $data->jurusan }}">
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>

                        <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">

                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki
                            </option>
                            <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>
                        </select>

                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tempat Lahir -->
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir"
                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                            value="{{ $data->tempat_lahir }}">
                        @error('tempat_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"
                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            value="{{ $data->tanggal_lahir->format('Y-m-d') }}">
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            value="{{ $data->alamat }}">
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Button -->
                    <div class="text-center mt-4">
                        <a href="{{ url('/siswa') }}" class="btn btn-secondary px-4">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
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
