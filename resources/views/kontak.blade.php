@extends('layouts.app')

@section('content')

<style>
    .contact-section{
        padding:80px 0;
        background:#f8f9fa;
    }

    .section-title{
        font-size:40px;
        font-weight:700;
        color:#006400;
        margin-bottom:15px;
    }

    .section-subtitle{
        color:#666;
        margin-bottom:50px;
    }

    .info-card{
        background:white;
        border-radius:20px;
        padding:35px;
        box-shadow:0 5px 20px rgba(0,0,0,0.08);
        height:100%;
    }

    .info-card h4{
        color:#006400;
        font-weight:700;
        margin-bottom:25px;
    }

    .info-item{
        margin-bottom:20px;
        line-height:1.8;
        word-wrap: break-word;
    }

    .info-item strong{
        color:#333;
        display:block;
    }

    .social-btn{
        display:inline-block;
        padding:12px 20px;
        border-radius:10px;
        text-decoration:none;
        color:white;
        font-weight:600;
        margin-right:10px;
        margin-top:10px;
    }

    .wa-btn{
        background:#25D366;
    }

    .fb-btn{
        background:#1877F2;
    }

    .contact-form{
        background:white;
        padding:35px;
        border-radius:20px;
        box-shadow:0 5px 20px rgba(0,0,0,0.08);
    }

    .form-control{
        border-radius:10px;
        padding:12px;
    }

    .btn-send{
        background:#006400;
        color:white;
        border:none;
        padding:12px 25px;
        border-radius:10px;
        font-weight:600;
    }

    .btn-send:hover{
        background:#008000;
    }

    .map-container{
    width:100%;
    overflow:hidden;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.1);
    }

    .map-container iframe{
    width:100%;
    height:500px;
    border:none;
    display:block;
    }

    @media(max-width:768px){
    .map-container iframe{
        height:300px;
    }
}
</style>

<div class="contact-section">

    <div class="container">

        <div class="text-center">
            <h1 class="section-title">Kontak Sekolah</h1>
            <p class="section-subtitle">
                Hubungi kami untuk informasi PPDB, akademik, maupun kegiatan sekolah.
            </p>
        </div>

        <div class="row g-4">

            <!-- Informasi Sekolah -->
            <div class="col-lg-5">

                <div class="info-card">

                    <h4>📍 Informasi Sekolah</h4>

                    <div class="info-item">
                        <strong>Nama Sekolah</strong>
                        MTs Nurul Yaqin
                    </div>

                    <div class="info-item">
                        <strong>Alamat</strong>
                        Jl. Wr. Kobak, Pasirgombong,
                        Cikarang Utara, Kabupaten Bekasi,
                        Jawa Barat.
                    </div>

                    <div class="info-item">
                        <strong>WhatsApp</strong>
                        0812-8086-9497
                    </div>

                    <div class="info-item">
                        <strong>Email</strong>
                        mtsnegeri@mail.com
                    </div>

                    <div class="info-item">
                        <strong>Jam Operasional</strong>
                        Senin - Sabtu<br>
                        07.00 - 15.00 WIB
                    </div>

                    <a href="https://wa.me/6285100706998"
                       target="_blank"
                       class="social-btn wa-btn">
                        WhatsApp
                    </a>

                    <a href="https://facebook.com"
                       target="_blank"
                       class="social-btn fb-btn">
                        Facebook
                    </a>

                </div>

            </div>

            
            <!-- MAPS -->
<div class="col-12">

    <div class="card border-0 shadow-lg mt-4 rounded-4">

        <div class="card-body p-4">

            <h3 class="text-success fw-bold mb-4">
                📍 Lokasi Sekolah
            </h3>

            <div class="map-container">

                <iframe
                    src="https://www.google.com/maps?q=Pasirgombong+Cikarang&output=embed"
                    loading="lazy"
                    allowfullscreen>
                </iframe>

            </div>

        </div>

    </div>

</div>

@endsection