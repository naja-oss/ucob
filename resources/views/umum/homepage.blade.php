@extends('layouts.front')
@section('title', 'Form Pendaftaran Siswa PKL')
@section('content')

    <form action="{{ url('/umum/homepage') }}" method="POST"enctype="multipart/form-data">
        @csrf
        <br class="hero-title">
        <strong>Selamat Datang di Pendaftaran PKL</strong>
        </h1>

        {{-- COURSE LIST --}}
        <div class="row g-4">

            {{-- Bahasa Inggris --}}
            <div class="col-md-3">
                <div class="card course-card h-100">
                    <img src="{{ asset('foto') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Bahasa Inggris</h5>
                        <ol class="text-start">
                            <li>Paket Elementary</li>
                            <li>Paket Intermediate</li>
                            <li>Paket Conversation</li>
                        </ol>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ url('/umum/pendaftaran') }}" class="btn btn-secondary">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Desain Grafis --}}
            <div class="col-md-3">
                <div class="card course-card h-100">
                    <img src="{{ asset('img/desain.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Desain Grafis</h5>
                        <ol class="text-start">
                            <li>Corel Draw</li>
                            <li>Adobe Photoshop</li>
                            <li>Desain Canva</li>
                        </ol>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ url('/umum/pendaftaran') }}" class="btn btn-secondary">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Digital Marketing --}}
            <div class="col-md-3">
                <div class="card course-card h-100">
                    <img src="{{ asset('img/
                    digital.png') }}" class="card-img-top">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Kursus Digital Marketing</h5>
                        <ol class="text-start">
                            <li>Paket Pemula</li>
                            <li>Paket Mahir</li>
                        </ol>
                        <div class="mt-auto d-flex justify-content-center">
                            <a href="{{ url('/umum/pendaftaran') }}" class="btn btn-secondary">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Komputer --}}
            <div class="col-md-3">
                <div class="card course-card h-100">
                    <img src="{{ asset('img/komputer.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Kursus Komputer</h5>
                        <ol class="text-start">
                            <li>Microsoft Word</li>
                            <li>Microsoft Excel</li>
                            <li>Microsoft Power Point</li>
                        </ol>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ url('/umum/pendaftaran') }}" class="btn btn-secondary">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
