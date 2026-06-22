@extends('layouts.admin')

@section('content')

<style>

    .page-title{
        font-weight:700;
        color:#198754;
    }

    .card-galeri{
        border:none;
        border-radius:20px;
        overflow:hidden;
        transition:.3s;
        box-shadow:0 4px 15px rgba(0,0,0,.08);
        background:white;
    }

    .card-galeri:hover{
        transform:translateY(-8px);
        box-shadow:0 10px 25px rgba(0,0,0,.15);
    }

    .galeri-img{
        height:220px;
        width:100%;
        object-fit:cover;
        transition:.5s;
    }

    .card-galeri:hover .galeri-img{
        transform:scale(1.08);
    }

    .badge-galeri{
        position:absolute;
        top:15px;
        right:15px;
        background:#198754;
        color:white;
        padding:6px 12px;
        border-radius:20px;
        font-size:12px;
    }

    .galeri-content{
        padding:20px;
    }

    .btn-detail{
        border-radius:30px;
    }

</style>

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="page-title">
                🖼️ Data Galeri
            </h2>

            <p class="text-muted">
                Kelola seluruh dokumentasi kegiatan sekolah
            </p>

        </div>

        <a href="/admin/galeri/create"
           class="btn btn-success shadow">

            ➕ Tambah Galeri

        </a>

    </div>

    {{-- Statistik --}}
    <div class="row mb-4">

        <div class="col-md-4">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Galeri
                    </h6>

                    <h2 class="fw-bold text-success">
                        {{ $galeris->count() }}
                    </h2>

                </div>

            </div>

        </div>

    </div>

    {{-- Data Galeri --}}
    <div class="row">

        @forelse($galeris as $galeri)

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

            <div class="card-galeri">

                <div class="position-relative">

                    <img
                        src="{{ asset('storage/'.$galeri->gambar) }}"
                        class="galeri-img">

                    <span class="badge-galeri">
                        Foto
                    </span>

                </div>

                <div class="galeri-content">

                    <h5 class="fw-bold">
                        {{ $galeri->judul }}
                    </h5>

                    <hr>

                    <div class="d-flex justify-content-between">

                        <div>

                            <a href="/admin/galeri/{{ $galeri->id }}/edit"
                               class="btn btn-warning btn-sm">

                                ✏️

                            </a>

                            <form
                                action="/admin/galeri/{{ $galeri->id }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus galeri ini?')">

                                    🗑️

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">

            <div class="alert alert-warning text-center">

                Belum ada data galeri.

            </div>

        </div>

        @endforelse

    </div>

</div>

@endsection