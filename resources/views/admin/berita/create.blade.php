@extends('layouts.admin')

@section('content')

<div class="container py-5">

    <div class="card p-4">

        <h2>Tambah Berita</h2>

        <form action="/admin/berita/store"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">

                <label>Judul</label>

                <input type="text"
                       name="judul"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Isi Berita</label>

                <textarea name="isi"
                          class="form-control"
                          rows="5"></textarea>

            </div>

            <div class="mb-3">

                <label>Gambar</label>

                <input type="file"
                       name="gambar"
                       class="form-control">

            </div>

            <button class="btn btn-success">

                Simpan

            </button>

        </form>

    </div>

</div>

@endsection