@extends('layouts.admin')

@section('content')

<style>

body{
    background:#f4f6f9;
}

/* Welcome */
.welcome-box{
    background:linear-gradient(135deg,#198754,#20c997);
    color:white;
    padding:30px;
    border-radius:20px;
    margin-bottom:30px;
    box-shadow:0 5px 20px rgba(0,0,0,.15);
}

.welcome-box h2{
    margin-bottom:10px;
    font-weight:700;
}

/* Sidebar */
.sidebar{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
}

.sidebar h4{
    color:#198754;
}

.sidebar a{
    display:block;
    padding:12px 15px;
    margin-bottom:10px;
    border-radius:10px;
    text-decoration:none;
    color:#333;
    font-weight:500;
    transition:.3s;
}

.sidebar a:hover{
    background:#198754;
    color:white;
}

/* Dashboard Title */
.dashboard-title{
    font-weight:700;
    color:#1b4332;
    margin-bottom:25px;
}

/* Card Dashboard */
.card-dashboard{
    border:none;
    border-radius:20px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
    transition:.3s;
    height:100%;
}

.card-dashboard:hover{
    transform:translateY(-5px);
}

.card-body{
    padding:25px;
}

.card-label{
    font-size:18px;
    font-weight:600;
    color:#555;
    margin-bottom:10px;
    line-height:1.5;
}

.card-number{
    font-size:50px;
    font-weight:700;
    color:#1b4332;
    line-height:1;
}

.icon-box{
    width:70px;
    height:70px;
    border-radius:15px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:35px;
    color:white;
}

/* Activity */
.activity-box{
    margin-top:30px;
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
}

.activity-box h4{
    color:#198754;
    margin-bottom:20px;
}

.activity-box ul{
    padding-left:20px;
}

.activity-box li{
    margin-bottom:10px;
}

</style>

<div class="container py-4">

    <!-- Welcome -->
    <div class="welcome-box">
        <h2>Selamat Datang Admin 👋</h2>

        <p>
            Gunakan dashboard ini untuk mengelola berita sekolah,
            galeri kegiatan, pengumuman, PPDB, dan seluruh informasi
            website sekolah MTs Nurul Yaqin.
        </p>
    </div>

    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 mb-4">

            <div class="sidebar">

                <h4 class="fw-bold mb-4">
                    ADMIN PANEL
                </h4>

                <a href="{{ route('dashboard') }}">
                    🏠 Dashboard
                </a>

                <a href="{{ route('berita.index') }}">
                    📰 Kelola Berita
                </a>

                <a href="{{ route('galeri.index') }}">
                    🖼️ Kelola Galeri
                </a>

                <a href="{{ route('pengumuman.index') }}">
                    📢 Kelola Pengumuman
                </a>
                
                <a href="{{ route('admin.ppdb') }}">
                🎓 Data Pendaftar PPDB
                </a>

                <a href="{{ url('/') }}">
                    🌐 Lihat Website
                </a>

            </div>

        </div>

        <!-- Content -->
        <div class="col-md-9">

            <h2 class="dashboard-title">
                Dashboard Admin
            </h2>

            <div class="row g-4">

                <!-- Berita -->
                <div class="col-md-4">

                    <div class="card card-dashboard">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>

                                    <div class="card-label">
                                        Total Berita
                                    </div>

                                    <div class="card-number">
                                        10
                                    </div>

                                </div>

                                <div class="icon-box bg-primary">
                                    📰
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Galeri -->
                <div class="col-md-4">

                    <div class="card card-dashboard">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>

                                    <div class="card-label">
                                        Total Galeri
                                    </div>

                                    <div class="card-number">
                                        20
                                    </div>

                                </div>

                                <div class="icon-box bg-success">
                                    🖼️
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Pengumuman -->
                <div class="col-md-4">

                    <div class="card card-dashboard">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>

                                    <div class="card-label">
                                        Total Pengumuman
                                    </div>

                                    <div class="card-number">
                                        5
                                    </div>

                                </div>

                                <div class="icon-box bg-danger">
                                    📢
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Aktivitas Terbaru -->
            <div class="activity-box">

                <h4>
                    Aktivitas Terbaru
                </h4>

                <ul>
                    <li>Berita baru berhasil ditambahkan.</li>
                    <li>Galeri kegiatan diperbarui.</li>
                    <li>Pengumuman PPDB telah dipublikasikan.</li>
                    <li>Admin terakhir login hari ini.</li>
                </ul>

            </div>

        </div>

    </div>

</div>

@endsection