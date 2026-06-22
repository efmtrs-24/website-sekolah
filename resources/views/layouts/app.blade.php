<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- GOOGLE FONT -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f5f5;
            color:#333;
        }

        a{
            text-decoration:none;
        }

        ul{
            list-style:none;
        }

        .container{
            width:90%;
            margin:auto;
        }

        /* TOPBAR */

        .topbar{
            background:#006b2d;
            color:white;
            padding:8px 0;
            font-size:13px;
        }

        .topbar-content{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .topbar-left,
        .topbar-right{
            display:flex;
            gap:20px;
            align-items:center;
        }

        /* NAVBAR */

        .navbar{
            background:white;
            padding:15px 0;
            box-shadow:0 2px 8px rgba(0,0,0,0.08);
            position:sticky;
            top:0;
            z-index:1000;
        }

        .navbar-content{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .logo img{
            width:70px;
        }

        .logo-text h2{
            font-size:28px;
            color:#006b2d;
        }

        .logo-text p{
            font-size:13px;
            color:#666;
        }

        .menu{
            display:flex;
            gap:30px;
            align-items:center;
        }

        .menu a{
            color:#333;
            font-weight:500;
            transition:0.3s;
        }

        .menu a:hover{
            color:#006b2d;
        }

        .btn-ppdb{
            background:#006b2d;
            color:white !important;
            padding:12px 20px;
            border-radius:8px;
        }

        /* HERO */

        .hero{
            height:85vh;
            position:relative;
            overflow:hidden;
        }

        .hero img{
            width:100%;
            height:100%;
            object-fit:cover;
        }

        .overlay{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,90,40,0.7);
        }

        .hero-content{
            position:absolute;
            top:50%;
            left:8%;
            transform:translateY(-50%);
            color:white;
            max-width:600px;
        }

        .hero-content h4{
            color:#ffdd57;
            font-size:35px;
            margin-bottom:10px;
            font-style:italic;
        }

        .hero-content h1{
            font-size:75px;
            line-height:1.1;
            margin-bottom:20px;
            font-weight:700;
        }

        .hero-content p{
            line-height:1.8;
            font-size:18px;
            margin-bottom:30px;
        }

        .hero-btn{
            display:flex;
            gap:15px;
        }

        .btn{
            padding:14px 28px;
            border-radius:8px;
            font-weight:600;
        }

        .btn-white{
            background:white;
            color:#006b2d;
        }

        .btn-outline{
            border:2px solid white;
            color:white;
        }

        /* FITUR */

        .fitur{
            margin-top:-50px;
            position:relative;
            z-index:10;
        }

        .fitur-grid{
            display:grid;
            grid-template-columns:repeat(5,1fr);
            gap:20px;
        }

        .fitur-box{
            background:white;
            padding:30px 20px;
            border-radius:10px;
            text-align:center;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        }

        .fitur-box i{
            font-size:40px;
            color:#006b2d;
            margin-bottom:15px;
        }

        .fitur-box h3{
            margin-bottom:10px;
            font-size:18px;
        }

        .fitur-box p{
            font-size:14px;
            color:#666;
        }

        /* SECTION */

        .section{
            padding:70px 0;
        }

        .section-title{
            color:#006b2d;
            margin-bottom:30px;
            font-size:28px;
        }

        /* BERITA */

        .content-grid{
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
            gap:25px;
        }

        .card{
            background:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
        }

        .card-header{
            background:#f8f8f8;
            padding:15px 20px;
            border-bottom:1px solid #eee;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .card-header h3{
            color:#006b2d;
            font-size:20px;
        }

        .lihat{
            color:#006b2d;
            font-size:14px;
        }

        .berita-item{
            display:flex;
            gap:15px;
            padding:20px;
            border-bottom:1px solid #eee;
        }

        .berita-item img{
            width:120px;
            height:80px;
            object-fit:cover;
            border-radius:8px;
        }

        .berita-text h4{
            margin-bottom:8px;
            font-size:16px;
        }

        .berita-text p{
            font-size:13px;
            color:#666;
        }

        /* PENGUMUMAN */

        .pengumuman-item{
            display:flex;
            gap:15px;
            padding:20px;
            border-bottom:1px solid #eee;
        }

        .tanggal{
            min-width:60px;
            background:#006b2d;
            color:white;
            text-align:center;
            border-radius:8px;
            padding:10px;
            font-weight:bold;
        }

        /* =========================
   GALERI
========================= */

.galeri{
    padding:25px;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.galeri-item{
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    transition:0.3s ease;
}

.galeri-item:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.galeri-item img{
    width:100%;
    height:280px;
    object-fit:cover;
    display:block;
}

.galeri-item h5{
    padding:15px;
    margin:0;
    text-align:center;
    font-size:16px;
    font-weight:600;
    color:#333;
    line-height:1.5;
}

        /* FOOTER */

        footer{
            background:#006b2d;
            color:white;
            padding-top:60px;
            margin-top:60px;
        }

        .footer-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:40px;
        }

        footer h3{
            margin-bottom:20px;
        }

        footer p{
            line-height:1.8;
            color:#ddd;
        }

        footer li{
            margin-bottom:10px;
        }

        .copyright{
            text-align:center;
            border-top:1px solid rgba(255,255,255,0.2);
            margin-top:40px;
            padding:20px;
            font-size:14px;
        }

        /* RESPONSIVE */

        @media(max-width:992px){

            .menu{
                display:none;
            }

            .fitur-grid{
                grid-template-columns:repeat(2,1fr);
            }

            .content-grid{
                grid-template-columns:1fr;
            }

            .footer-grid{
                grid-template-columns:1fr 1fr;
            }

            .hero-content h1{
                font-size:50px;
            }

        }

        @media(max-width:768px){

            .fitur-grid{
                grid-template-columns:1fr;
            }

            .footer-grid{
                grid-template-columns:1fr;
            }

            .hero-content h1{
                font-size:40px;
            }

            .hero{
                height:70vh;
            }

            .topbar-content{
                flex-direction:column;
                gap:10px;
            }

        }

    </style>

    <style>
.card{
    overflow:hidden;
}

.form-control{
    border-radius:10px;
}

.btn{
    border-radius:10px;
}

textarea{
    resize:none;
}
</style>

</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

</body>
</html>