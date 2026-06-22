@extends('layouts.admin')

@section('content')

<style>

.page-title{
    color:#198754;
    font-weight:700;
}

.card-custom{
    border:none;
    border-radius:20px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
}

.table thead{
    background:#198754;
    color:white;
}

.table tbody tr:hover{
    background:#f8f9fa;
}

.badge-date{
    background:#198754;
    color:white;
    padding:8px 12px;
    border-radius:20px;
    font-size:12px;
}

</style>

<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="page-title">
                📢 Data Pengumuman
            </h2>

            <p class="text-muted mb-0">
                Kelola seluruh pengumuman sekolah
            </p>

        </div>

        <a href="{{ route('pengumuman.create') }}"
           class="btn btn-success shadow">

            ➕ Tambah Pengumuman

        </a>

    </div>

    <!-- Notifikasi -->
    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <!-- Statistik -->
    <div class="row mb-4">

        <div class="col-md-4">

            <div class="card card-custom">

                <div class="card-body text-center">

                    <h6 class="text-muted">
                        Total Pengumuman
                    </h6>

                    <h1 class="fw-bold text-success">

                        {{ $pengumuman->count() }}

                    </h1>

                </div>

            </div>

        </div>

    </div>

    <!-- Tabel -->
    <div class="card card-custom">

        <div class="card-header bg-success text-white">

            <h5 class="mb-0">
                Daftar Pengumuman
            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="80">No</th>
                            <th>Judul Pengumuman</th>
                            <th>Isi Pengumuman</th>
                            <th width="180">Tanggal</th>
                            <th width="220">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    @forelse($pengumuman as $item)

                        <tr>

                            <td>

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                <strong>
                                    {{ $item->judul }}
                                </strong>

                            </td>

                            <td>

                                {{ Str::limit($item->isi, 100) }}

                            </td>

                            <td>

                                <span class="badge-date">

                                    {{ $item->created_at->format('d-m-Y') }}

                                </span>

                            </td>

                            <td>

                                <a href="{{ route('pengumuman.edit',$item->id) }}"
                                   class="btn btn-warning btn-sm">

                                    ✏️ Edit

                                </a>

                                <form action="{{ route('pengumuman.destroy',$item->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus pengumuman ini?')">

                                        🗑️ Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5"
                                class="text-center text-muted">

                                Belum ada data pengumuman.

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