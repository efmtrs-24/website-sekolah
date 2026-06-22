@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Galeri</h3>

    <form action="{{ route('galeri.update',$galeri->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <input type="text"
               name="judul"
               value="{{ $galeri->judul }}"
               class="form-control mb-3">

        <img src="{{ asset('storage/'.$galeri->gambar) }}"
             width="200"
             class="mb-3">

        <input type="file"
               name="gambar"
               class="form-control mb-3">

        <button class="btn btn-success">
            Simpan Perubahan
        </button>

    </form>

</div>

@endsection