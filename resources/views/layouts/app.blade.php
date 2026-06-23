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
        :root{
            --primary:#006b2d;
            --primary-dark:#004f21;
            --secondary:#ffdd57;
            --text:#333;
            --muted:#666;
            --bg:#f5f5f5;
            --white:#fff;
            --shadow:0 5px 20px rgba(0,0,0,0.08);
            --shadow-hover:0 10px 25px rgba(0,0,0,0.15);
            --radius:12px;
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            background:var(--bg);
            color:var(--text);
            overflow-x:hidden;
        }

        a{
            text-decoration:none;
        }

        ul{
            list-style:none;
            margin:0;
            padding:0;
        }

        img{
            max-width:100%;
            display:block;
        }

        button{
            font-family:'Poppins', sans-serif;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:auto;
        }

        /* =========================
           TOPBAR
        ========================= */
        .topbar{
            background:var(--primary);
            color:var(--white);
            padding:8px 0;
            font-size:13px;
        }

        .topbar-content{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:15px;
        }

        .topbar-left,
        .topbar-right{
            display:flex;
            gap:20px;
            align-items:center;
            flex-wrap:wrap;
        }

        .topbar i{
            margin-right:6px;
        }

        /* =========================
           NAVBAR
        ========================= */
        .navbar{
            background:var(--white);
            padding:14px 0;
            box-shadow:0 2px 8px rgba(0,0,0,0.08);
            position:sticky;
            top:0;
            z-index:1000;
        }

        .navbar-content{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:20px;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:15px;
            min-width:0;
        }

        .logo img{
            width:68px;
            height:68px;
            object-fit:cover;
            border-radius:10px;
            flex-shrink:0;
        }

        .logo-text h2{
            font-size:26px;
            color:var(--primary);
            line-height:1.2;
            margin-bottom:4px;
        }

        .logo-text p{
            font-size:12px;
            color:var(--muted);
            line-height:1.4;
        }

        /* MENU DESKTOP */
        .menu{
            display:flex;
            gap:18px;
            align-items:center;
            flex-wrap:wrap;
        }

        .menu li{
            display:flex;
            align-items:center;
        }

        .menu a{
            color:var(--text);
            font-weight:500;
            transition:0.3s;
        }

        .menu a:hover{
            color:var(--primary);
        }

        /* BUTTON UMUM */
        .btn,
        .btn-login,
        .btn-dashboard,
        .btn-logout,
        .btn-ppdb{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:8px;
            border:none;
            border-radius:10px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
            text-decoration:none;
        }

        .btn{
            padding:14px 28px;
        }

        .btn-login,
        .btn-dashboard,
        .btn-logout{
            background:var(--primary);
            color:var(--white) !important;
            padding:11px 18px;
            font-size:14px;
        }

        .btn-ppdb{
            background:var(--primary);
            color:var(--white) !important;
            padding:12px 18px;
            font-size:14px;
        }

        .btn-login:hover,
        .btn-dashboard:hover,
        .btn-logout:hover,
        .btn-ppdb:hover{
            background:var(--primary-dark);
            color:var(--white) !important;
        }

        .btn-logout{
            outline:none;
        }

        /* TOGGLE MOBILE */
        .menu-toggle{
            display:none;
            background:var(--primary);
            color:var(--white);
            border:none;
            width:46px;
            height:46px;
            border-radius:10px;
            font-size:20px;
            cursor:pointer;
            flex-shrink:0;
        }

        .menu-toggle:hover{
            background:var(--primary-dark);
        }

        /* MOBILE MENU */
        .mobile-menu{
            display:none;
            flex-direction:column;
            gap:12px;
            background:var(--white);
            padding:20px;
            border-top:1px solid #eee;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
        }

        .mobile-menu.show{
            display:flex;
        }

        .mobile-menu a{
            color:var(--text);
            font-weight:600;
            padding:10px 0;
            border-bottom:1px solid #f0f0f0;
        }

        .mobile-menu form{
            margin:0;
        }

        .mobile-login,
        .mobile-dashboard,
        .mobile-logout,
        .mobile-ppdb{
            width:100%;
            background:var(--primary);
            color:var(--white) !important;
            padding:12px 15px !important;
            border-radius:10px;
            border:none;
            display:flex;
            align-items:center;
            justify-content:center;
            gap:8px;
            text-align:center;
            font-weight:600;
            font-size:15px;
            margin-top:4px;
        }

        .mobile-logout{
            cursor:pointer;
        }

        /* =========================
           HERO
        ========================= */
        .hero{
            height:85vh;
            min-height:520px;
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
            inset:0;
            background:rgba(0,90,40,0.70);
        }

        .hero-content{
            position:absolute;
            top:50%;
            left:8%;
            transform:translateY(-50%);
            color:var(--white);
            max-width:650px;
            z-index:2;
        }

        .hero-content h4{
            color:var(--secondary);
            font-size:34px;
            margin-bottom:10px;
            font-style:italic;
            line-height:1.3;
        }

        .hero-content h1{
            font-size:72px;
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
            flex-wrap:wrap;
            gap:15px;
        }

        .btn-white{
            background:var(--white);
            color:var(--primary);
        }

        .btn-white:hover{
            background:#f0f0f0;
        }

        .btn-outline{
            border:2px solid var(--white);
            color:var(--white);
        }

        .btn-outline:hover{
            background:rgba(255,255,255,0.12);
        }

        /* =========================
           FITUR
        ========================= */
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
            background:var(--white);
            padding:30px 20px;
            border-radius:var(--radius);
            text-align:center;
            box-shadow:var(--shadow);
            transition:0.3s ease;
            height:100%;
        }

        .fitur-box:hover{
            transform:translateY(-4px);
            box-shadow:var(--shadow-hover);
        }

        .fitur-box i{
            font-size:40px;
            color:var(--primary);
            margin-bottom:15px;
        }

        .fitur-box h3{
            margin-bottom:10px;
            font-size:18px;
            color:var(--text);
        }

        .fitur-box p{
            font-size:14px;
            color:var(--muted);
            line-height:1.6;
        }

        /* =========================
           SECTION
        ========================= */
        .section{
            padding:70px 0;
        }

        .section-title{
            color:var(--primary);
            margin-bottom:30px;
            font-size:28px;
            font-weight:700;
        }

        /* =========================
           CONTENT GRID
        ========================= */
        .content-grid{
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
            gap:25px;
        }

        .card{
            background:var(--white);
            border-radius:var(--radius);
            overflow:hidden;
            box-shadow:var(--shadow);
        }

        .card-header{
            background:#f8f8f8;
            padding:16px 20px;
            border-bottom:1px solid #eee;
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:10px;
        }

        .card-header h3{
            color:var(--primary);
            font-size:20px;
            font-weight:700;
            margin:0;
        }

        .lihat{
            color:var(--primary);
            font-size:14px;
            font-weight:600;
        }

        /* =========================
           BERITA
        ========================= */
        .berita-item{
            display:flex;
            gap:15px;
            padding:20px;
            border-bottom:1px solid #eee;
        }

        .berita-item:last-child{
            border-bottom:none;
        }

        .berita-item img{
            width:120px;
            height:80px;
            object-fit:cover;
            border-radius:10px;
            flex-shrink:0;
        }

        .berita-text h4{
            margin-bottom:8px;
            font-size:16px;
            line-height:1.5;
        }

        .berita-text p{
            font-size:13px;
            color:var(--muted);
            line-height:1.6;
        }

        /* =========================
           PENGUMUMAN
        ========================= */
        .pengumuman-item{
            display:flex;
            gap:15px;
            padding:20px;
            border-bottom:1px solid #eee;
        }

        .pengumuman-item:last-child{
            border-bottom:none;
        }

        .tanggal{
            min-width:60px;
            background:var(--primary);
            color:var(--white);
            text-align:center;
            border-radius:10px;
            padding:10px;
            font-weight:700;
            line-height:1.4;
            flex-shrink:0;
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
            background:var(--white);
            border-radius:15px;
            overflow:hidden;
            box-shadow:var(--shadow);
            transition:0.3s ease;
        }

        .galeri-item:hover{
            transform:translateY(-5px);
            box-shadow:var(--shadow-hover);
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
            color:var(--text);
            line-height:1.5;
        }

        /* =========================
           FORM / TABLE / UMUM
        ========================= */
        .form-control{
            width:100%;
            border:1px solid #ddd;
            border-radius:10px;
            padding:12px 14px;
            outline:none;
            transition:0.3s;
        }

        .form-control:focus{
            border-color:var(--primary);
            box-shadow:0 0 0 3px rgba(0,107,45,0.12);
        }

        textarea{
            resize:none;
        }

        table{
            width:100%;
        }

        /* =========================
           FOOTER
        ========================= */
        footer{
            background:var(--primary);
            color:var(--white);
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
            font-size:20px;
        }

        footer p{
            line-height:1.8;
            color:#ddd;
            font-size:14px;
        }

        footer li{
            margin-bottom:10px;
        }

        footer a{
            color:#ddd;
            transition:0.3s;
        }

        footer a:hover{
            color:var(--white);
        }

        .copyright{
            text-align:center;
            border-top:1px solid rgba(255,255,255,0.2);
            margin-top:40px;
            padding:20px;
            font-size:14px;
            color:#eee;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media(max-width:1200px){
            .hero-content h1{
                font-size:60px;
            }

            .fitur-grid{
                grid-template-columns:repeat(3,1fr);
            }
        }

        @media(max-width:992px){

            /* NAVBAR */
            .menu{
                display:none;
            }

            .menu-toggle{
                display:flex;
                align-items:center;
                justify-content:center;
            }

            .navbar-content{
                gap:15px;
            }

            .logo img{
                width:58px;
                height:58px;
            }

            .logo-text h2{
                font-size:20px;
            }

            .logo-text p{
                font-size:11px;
            }

            /* HERO */
            .hero{
                height:75vh;
                min-height:480px;
            }

            .hero-content{
                left:6%;
                max-width:560px;
            }

            .hero-content h1{
                font-size:48px;
            }

            .hero-content h4{
                font-size:28px;
            }

            /* FITUR */
            .fitur-grid{
                grid-template-columns:repeat(2,1fr);
            }

            /* CONTENT */
            .content-grid{
                grid-template-columns:1fr;
            }

            .galeri{
                grid-template-columns:repeat(2,1fr);
            }

            /* FOOTER */
            .footer-grid{
                grid-template-columns:1fr 1fr;
            }
        }

        @media(max-width:768px){

            .container{
                width:92%;
            }

            /* TOPBAR */
            .topbar{
                font-size:12px;
            }

            .topbar-content{
                flex-direction:column;
                align-items:flex-start;
                gap:8px;
            }

            .topbar-left,
            .topbar-right{
                width:100%;
                flex-direction:column;
                align-items:flex-start;
                gap:6px;
            }

            /* NAVBAR */
            .navbar{
                padding:12px 0;
            }

            .logo{
                gap:10px;
                max-width:calc(100% - 60px);
            }

            .logo img{
                width:50px;
                height:50px;
            }

            .logo-text h2{
                font-size:17px;
            }

            .logo-text p{
                font-size:10px;
            }

            /* HERO */
            .hero{
                height:70vh;
                min-height:420px;
            }

            .hero-content{
                left:5%;
                right:5%;
                max-width:100%;
            }

            .hero-content h4{
                font-size:22px;
            }

            .hero-content h1{
                font-size:36px;
            }

            .hero-content p{
                font-size:15px;
                margin-bottom:22px;
            }

            .hero-btn{
                flex-direction:column;
                align-items:flex-start;
                width:100%;
            }

            .hero-btn .btn{
                width:100%;
                text-align:center;
            }

            /* FITUR */
            .fitur{
                margin-top:-35px;
            }

            .fitur-grid{
                grid-template-columns:1fr;
            }

            /* CARD */
            .card-header{
                padding:14px 16px;
            }

            .card-header h3{
                font-size:18px;
            }

            /* BERITA */
            .berita-item{
                flex-direction:column;
            }

            .berita-item img{
                width:100%;
                height:180px;
            }

            /* PENGUMUMAN */
            .pengumuman-item{
                align-items:flex-start;
            }

            /* GALERI */
            .galeri{
                padding:18px;
                grid-template-columns:1fr;
                gap:18px;
            }

            .galeri-item img{
                height:220px;
            }

            /* FOOTER */
            .footer-grid{
                grid-template-columns:1fr;
                gap:30px;
            }

            footer{
                padding-top:45px;
            }
        }

        @media(max-width:480px){

            .container{
                width:94%;
            }

            .hero-content h1{
                font-size:30px;
            }

            .hero-content h4{
                font-size:18px;
            }

            .hero-content p{
                font-size:14px;
            }

            .btn{
                padding:12px 18px;
                font-size:14px;
            }

            .topbar{
                font-size:11px;
            }

            .logo-text h2{
                font-size:15px;
            }

            .logo-text p{
                font-size:9px;
            }

            .menu-toggle{
                width:42px;
                height:42px;
                font-size:18px;
            }

            .fitur-box{
                padding:24px 16px;
            }

            .section{
                padding:55px 0;
            }
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

</body>
</html>