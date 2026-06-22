@extends('layouts.admin')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow border-0 rounded-4">

                <div class="card-header bg-success text-white py-3">

                    <h3 class="mb-0">
                        📸 Tambah Galeri Kegiatan
                    </h3>

                </div>

                <div class="card-body p-4">

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{ route('galeri.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Judul Galeri
                            </label>

                            <input type="text"
                                   name="judul"
                                   class="form-control form-control-lg"
                                   placeholder="Masukkan judul kegiatan"
                                   required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Upload Gambar
                            </label>

                            <input type="file"
                                   name="gambar"
                                   class="form-control"
                                   accept="image/*"
                                   required>

                            <small class="text-muted">
                                Format: JPG, JPEG, PNG (Maks. 2 MB)
                            </small>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="{{ route('galeri.index') }}"
                               class="btn btn-secondary">

                                ← Kembali

                            </a>

                            <button type="submit"
                                    class="btn btn-success">

                                💾 Simpan Galeri

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection