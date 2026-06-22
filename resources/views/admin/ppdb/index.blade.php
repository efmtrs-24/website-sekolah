@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">

    <!-- Header -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">

            <div>
                <h2 class="fw-bold text-success mb-1">
                    Data Pendaftar PPDB
                </h2>

                <p class="text-muted mb-0">
                    Daftar calon siswa yang telah melakukan pendaftaran online.
                </p>
            </div>

            <div class="text-end">
                <h5 class="mb-0">
                    Total Pendaftar
                </h5>

                <h2 class="fw-bold text-success">
                    {{ $ppdb->count() }}
                </h2>
            </div>

        </div>
    </div>

    <!-- Statistik -->
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-body text-center">

                    <h6 class="text-muted">
                        Total Pendaftar
                    </h6>

                    <h1 class="fw-bold text-success">
                        {{ $ppdb->count() }}
                    </h1>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-body text-center">

                    <h6 class="text-muted">
                        Pendaftar Hari Ini
                    </h6>

                    <h1 class="fw-bold text-primary">
                        {{ $ppdb->where('created_at','>=',today())->count() }}
                    </h1>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow">
                <div class="card-body text-center">

                    <h6 class="text-muted">
                        Status PPDB
                    </h6>

                    <h1 class="fw-bold text-warning">
                        Aktif
                    </h1>

                </div>
            </div>
        </div>

    </div>

    <!-- Tabel Data -->
    <div class="card border-0 shadow">

        <div class="card-header bg-success text-white">
            <h5 class="mb-0">
                Data Calon Siswa
            </h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-success">

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Foto</th>
                            <th>Akta</th>
                            <th>KK</th>
                            <th>Ijazah</th>
                            <th>Tanggal Daftar</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($ppdb as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $item->nama }}
                            </td>

                            <td>
                                {{ $item->nisn }}
                            </td>

                            <td>
                                {{ $item->alamat }}
                            </td>

                            <td>
                                {{ $item->no_hp }}
                            </td>

                            <!-- FOTO -->
                            <td>
                                @if($item->foto)
                                    <a href="{{ asset('storage/'.$item->foto) }}"
                                       target="_blank"
                                       class="btn btn-success btn-sm">
                                        Lihat Foto
                                    </a>
                                @else
                                    <span class="badge bg-danger">
                                        Tidak Ada
                                    </span>
                                @endif
                            </td>

                            <!-- AKTA -->
                            <td>
                                @if($item->akta)
                                    <a href="{{ asset('storage/'.$item->akta) }}"
                                       target="_blank"
                                       class="btn btn-primary btn-sm">
                                        Lihat Akta
                                    </a>
                                @else
                                    <span class="badge bg-danger">
                                        Tidak Ada
                                    </span>
                                @endif
                            </td>

                            <!-- KK -->
                            <td>
                                @if($item->kk)
                                    <a href="{{ asset('storage/'.$item->kk) }}"
                                       target="_blank"
                                       class="btn btn-warning btn-sm">
                                        Lihat KK
                                    </a>
                                @else
                                    <span class="badge bg-danger">
                                        Tidak Ada
                                    </span>
                                @endif
                            </td>

                            <!-- IJAZAH -->
                            <td>
                                @if($item->ijazah)
                                    <a href="{{ asset('storage/'.$item->ijazah) }}"
                                       target="_blank"
                                       class="btn btn-info btn-sm">
                                        Lihat Ijazah
                                    </a>
                                @else
                                    <span class="badge bg-danger">
                                        Tidak Ada
                                    </span>
                                @endif
                            </td>

                            <td>
                                {{ $item->created_at->format('d-m-Y') }}
                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="10" class="text-center text-danger">

                                Belum ada data pendaftar.

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