@extends('layouts.admin')

@section('content')

<div class="container py-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold text-success">
                📰 Data Berita
            </h2>

            <small class="text-muted">
                Kelola seluruh berita website sekolah
            </small>
        </div>

        <a href="/admin/berita/create"
           class="btn btn-success shadow">

            <i class="fas fa-plus"></i>
            Tambah Berita

        </a>

    </div>

    {{-- Card --}}
    <div class="card border-0 shadow-lg">

        <div class="card-header bg-success text-white">

            <h5 class="mb-0">
                Daftar Berita
            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-success">

                        <tr>
                            <th width="70">No</th>
                            <th width="150">Gambar</th>
                            <th>Judul Berita</th>
                            <th width="180">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                    @forelse($beritas as $berita)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>

                                @if($berita->gambar)

                                    <img
                                        src="{{ asset('storage/'.$berita->gambar) }}"
                                        width="120"
                                        class="img-thumbnail rounded shadow-sm">

                                @else

                                    <span class="badge bg-secondary">
                                        Tidak Ada Gambar
                                    </span>

                                @endif

                            </td>

                            <td>

                                <strong>
                                    {{ $berita->judul }}
                                </strong>

                            </td>

                            <td>

                                <a href="/admin/berita/{{ $berita->id }}/edit"
                                   class="btn btn-warning btn-sm">

                                    ✏ Edit

                                </a>

                                <form
                                    action="/admin/berita/{{ $berita->id }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus berita ini?')">

                                        🗑 Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4" class="text-center text-muted">

                                Belum ada data berita.

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection