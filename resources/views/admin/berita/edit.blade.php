@extends('layouts.app')

@section('content')

<div class="container py-5">

```
<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="card border-0 shadow-lg rounded-4">

            <!-- Header -->
            <div class="card-header bg-primary text-white py-3 rounded-top-4">
                <h3 class="mb-0">
                    ✏️ Edit Berita
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

                <form action="{{ route('berita.update', $berita->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- Judul -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            Judul Berita
                        </label>

                        <input type="text"
                               name="judul"
                               class="form-control form-control-lg"
                               value="{{ old('judul', $berita->judul) }}"
                               required>
                    </div>

                    <!-- Isi -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            Isi Berita
                        </label>

                        <textarea name="isi"
                                  rows="8"
                                  class="form-control">{{ old('isi', $berita->isi) }}</textarea>
                    </div>

                    <!-- Gambar -->
                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Gambar Saat Ini
                        </label>

                        <div class="text-center mb-3">

                            @if($berita->gambar)

                            <img src="{{ asset('storage/'.$berita->gambar) }}"
                                 class="img-fluid rounded shadow"
                                 style="max-height:350px; object-fit:cover;">

                            @endif

                        </div>

                        <label class="form-label">
                            Ganti Gambar
                        </label>

                        <input type="file"
                               name="gambar"
                               class="form-control">
                    </div>

                    <!-- Tombol -->
                    <div class="d-flex justify-content-end gap-2">

                        <a href="{{ route('berita.index') }}"
                           class="btn btn-secondary px-4">
                            Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-success px-4">
                            💾 Simpan Perubahan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
</div>
```

</div>
@endsection
