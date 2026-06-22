@extends('layouts.admin')

@section('content')

<div class="container py-5">

    <div class="card p-4">

        <h2>Tambah Pengumuman</h2>

        <form action="/admin/pengumuman/store"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Judul</label>

                <input type="text"
                       name="judul"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Isi</label>

                <textarea name="isi"
                          class="form-control"
                          rows="5"></textarea>

            </div>

            <div class="mb-3">

                <label>Tanggal</label>

                <input type="date"
                       name="tanggal"
                       class="form-control">

            </div>

            <button class="btn btn-success">

                Simpan

            </button>

        </form>

    </div>

</div>

@endsection