@extends('layouts.app')

@section('content')

<style>

.ppdb-section{
    padding:60px 0;
    background:#f5f7fa;
}

.ppdb-card{
    max-width:900px;
    margin:auto;
    background:#fff;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
}

.ppdb-title{
    text-align:center;
    color:#006400;
    font-size:35px;
    font-weight:700;
    margin-bottom:10px;
}

.ppdb-subtitle{
    text-align:center;
    color:#666;
    margin-bottom:40px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
}

.form-control{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:10px;
    font-size:15px;
}

.form-control:focus{
    border-color:#006400;
    outline:none;
    box-shadow:0 0 5px rgba(0,100,0,.2);
}

.row{
    display:flex;
    gap:20px;
}

.col{
    flex:1;
}

.btn-daftar{
    width:100%;
    background:#006400;
    color:white;
    border:none;
    padding:15px;
    font-size:17px;
    border-radius:10px;
    cursor:pointer;
    transition:.3s;
    font-weight:bold;
}

.btn-daftar:hover{
    background:#004d00;
}

.upload-box{
    border:2px dashed #ccc;
    padding:15px;
    border-radius:10px;
    background:#fafafa;
}

</style>

<section class="ppdb-section">

    <div class="ppdb-card">

        <h2 class="ppdb-title">
            Formulir Pendaftaran PPDB
        </h2>

        <p class="ppdb-subtitle">
            MTs Nurul Yaqin Tahun Ajaran 2026/2027
        </p>

        <form action="{{ route('ppdb.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col">

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text"
                               name="nama"
                               class="form-control"
                               required>
                    </div>

                </div>

                <div class="col">

                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text"
                               name="nisn"
                               class="form-control"
                               required>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col">

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text"
                               name="tempat_lahir"
                               class="form-control">
                    </div>

                </div>

                <div class="col">

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date"
                               name="tanggal_lahir"
                               class="form-control">
                    </div>

                </div>

            </div>

            <div class="form-group">

                <label>Alamat Lengkap</label>

                <textarea name="alamat"
                          rows="4"
                          class="form-control"
                          required></textarea>

            </div>

            <div class="row">

                <div class="col">

                    <div class="form-group">
                        <label>No HP Orang Tua</label>
                        <input type="text"
                               name="no_hp"
                               class="form-control"
                               required>
                    </div>

                </div>

                <div class="col">

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"
                               name="email"
                               class="form-control">
                    </div>

                </div>

            </div>

            <hr>

            <h4 style="color:#006400;">
                Upload Berkas
            </h4>

            <br>

            <div class="form-group">

                <label>Pas Foto</label>

                <div class="upload-box">
                    <input type="file"
                           name="foto"
                           class="form-control">
                </div>

            </div>

            <div class="form-group">

                <label>Akta Kelahiran</label>

                <div class="upload-box">
                    <input type="file"
                           name="akta"
                           class="form-control">
                </div>

            </div>

            <div class="form-group">

                <label>Kartu Keluarga</label>

                <div class="upload-box">
                    <input type="file"
                           name="kk"
                           class="form-control">
                </div>

            </div>

            <div class="form-group">

                <label>Ijazah / SKL</label>

                <div class="upload-box">
                    <input type="file"
                           name="ijazah"
                           class="form-control">
                </div>

            </div>

            <br>

            <button type="submit"
                    class="btn-daftar">

                DAFTAR SEKARANG

            </button>

        </form>

    </div>

</section>

@endsection