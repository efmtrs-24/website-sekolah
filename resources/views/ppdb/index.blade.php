@extends('layouts.app')

@section('content')

<div class="container" style="max-width:1000px; margin:50px auto;">

    <div style="
        background:white;
        padding:40px;
        border-radius:15px;
        box-shadow:0 5px 20px rgba(0,0,0,.1);
    ">

        <h1 style="color:#006400; text-align:center;">
            Penerimaan Peserta Didik Baru (PPDB)
        </h1>

        <hr>

        <h3>Persyaratan Pendaftaran</h3>

        <ul>
            <li>Fotokopi Akta Kelahiran</li>
            <li>Fotokopi Kartu Keluarga</li>
            <li>Fotokopi Ijazah/SKL</li>
            <li>Pas Foto 3x4 sebanyak 2 lembar</li>
        </ul>

        <h3>Jadwal Pendaftaran</h3>

        <p>
            Pendaftaran dibuka mulai
            <b>1 Juni 2026</b> sampai
            <b>31 Juli 2026</b>.
        </p>

        <div style="text-align:center; margin-top:40px;">

            <a href="{{ route('ppdb.form') }}"
               style="
                    background:#006400;
                    color:white;
                    padding:15px 35px;
                    border-radius:10px;
                    text-decoration:none;
                    font-size:18px;
                    font-weight:bold;
                    display:inline-block;
               ">

                📝 Daftarkan Sekarang

            </a>

        </div>

    </div>

</div>

@endsection