@extends('layouts.app')

@section('title','Data Guru')

@section('content')

<div class="container py-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-success text-white">

            <h3 class="fw-bold mb-0">
                Data Guru MTs Nurul Yaqin
            </h3>

        </div>

        <div class="card-body">

            <div class="row mb-3">

                <div class="col-md-6">
                    <input type="text" id="search" class="form-control" placeholder="🔍 Cari Nama Guru...">
                </div>

                <div class="col-md-6 text-end">
                    <span class="badge bg-success fs-6">
                        Total Guru : {{ $guru->count() }}
                    </span>
                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-striped table-hover table-bordered align-middle" id="guruTable">

                    <thead class="table-success text-center">

                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>L/P</th>
                            <th>Tempat</th>
                            <th>Tgl Lahir</th>
                            <th>Jabatan</th>
                            <th>Bidang Studi</th>
                            <th>Alamat</th>
                            <th>Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($guru as $item)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->nama }}</td>

                            <td class="text-center">

                                @if($item->jk=="L")
                                    👨
                                @else
                                    👩
                                @endif

                            </td>

                            <td>{{ $item->tempat }}</td>

                            <td>{{ date('d-m-Y',strtotime($item->tgl_lahir)) }}</td>

                            <td>{{ $item->jabatan }}</td>

                            <td>{{ $item->bidang_studi }}</td>

                            <td>{{ $item->alamat }}</td>

                            <td>

                                <span class="badge bg-success">

                                    {{ $item->status }}

                                </span>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script>

document.getElementById("search").addEventListener("keyup",function(){

let value=this.value.toLowerCase();

let rows=document.querySelectorAll("#guruTable tbody tr");

rows.forEach(row=>{

row.style.display=row.innerText.toLowerCase().includes(value)?"":"none";

});

});

</script>

@endsection