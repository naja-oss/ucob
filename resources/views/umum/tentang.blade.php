@extends('layouts.front')
@section('title', 'Tentang Website')
@section('content')


    <form action="{{ url('/umum/tentang') }}" method="POST"enctype="multipart/form-data">
        @csrf
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">

                    <div class="card shadow-sm">
                        <div class="card-header text-center" style="background-color: #2673e7;">
                            <h4 class="mb-0 fw-bold text-white">
                                Tentang PKL
                            </h4>
                        </div>

                        <div class="card-body">

                            {{-- Tentang Sistem --}}
                            <div class="mb-4">
                                <h5 class="fw-bold text-primary">
                                    <i class="bi bi-info-circle"></i> Tentang Sistem
                                </h5>
                                <p class="text-muted mt-2">
                                    Website Pendaftaran PKL ini dibuat untuk membantu proses
                                    pendaftaran peserta secara online agar lebih mudah, cepat,
                                    dan efisien tanpa harus datang langsung.
                                </p>
                            </div>

                            {{-- Tujuan --}}
                            <div class="mb-4">
                                <h5 class="fw-bold text-primary">
                                    <i class="bi bi-bullseye"></i> Tujuan
                                </h5>
                                <ul class="text-muted">
                                    <li>Mempermudah proses pendaftaran peserta PKL</li>
                                    <li>Mengurangi kesalahan input data</li>
                                    <li>Mendukung digitalisasi administrasi</li>
                                </ul>
                            </div>

                            {{-- Keunggulan --}}
                            <div class="mb-4">
                                <h5 class="fw-bold text-primary">
                                    <i class="bi bi-star-fill"></i> Keunggulan Sistem
                                </h5>

                                <div class="row text-center mt-3">
                                    <div class="col-md-4">
                                        <i class="bi bi-speedometer2 fs-2 text-primary"></i>
                                        <p class="mt-2 mb-0">Cepat</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="bi bi-shield-check fs-2 text-primary"></i>
                                        <p class="mt-2 mb-0">Aman</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="bi bi-ui-checks fs-2 text-primary"></i>
                                        <p class="mt-2 mb-0">Mudah</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Tombol --}}
                            <div class="d-flex justify-content-center mt-4">
                                <a href="{{ url('/') }}" class="btn btn-secondary">
                                    <i class="bi bi-house"></i> Kembali ke Beranda
                                </a>
                            </div>

                        </div>

                        <div class="card-footer text-center text-muted">
                            © 2026 Website Pendaftaran PKL
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

            .card {
                border-radius: 12px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
        </style>
    @endpush
