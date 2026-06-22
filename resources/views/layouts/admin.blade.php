<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel MTs Nurul Yaqin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .sidebar{
            width:250px;
            height:100vh;
            background:#198754;
            position:fixed;
            left:0;
            top:0;
            padding-top:20px;
        }

        .sidebar h3{
            color:white;
            text-align:center;
            margin-bottom:30px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px 25px;
            transition:.3s;
        }

        .sidebar a:hover{
            background:white;
            color:#198754;
        }

        .content{
            margin-left:250px;
            padding:30px;
        }

    </style>

</head>
<body>

    <div class="sidebar">

        <h3>ADMIN PANEL</h3>

        <a href="{{ route('dashboard') }}">
            🏠 Dashboard
        </a>

        <a href="{{ route('berita.index') }}">
            📰 Berita
        </a>

        <a href="{{ route('galeri.index') }}">
            🖼 Galeri
        </a>

        <a href="{{ route('pengumuman.index') }}">
            📢 Pengumuman
        </a>

        <a href="/">
            🌐 Website
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button class="btn btn-danger w-100 mt-4">
                Logout
            </button>
        </form>

    </div>

    <div class="content">

        @yield('content')

    </div>

</body>
</html>