<!-- TOPBAR -->
<div class="topbar">
    <div class="container topbar-content">

        <!-- LEFT -->
        <div class="topbar-left">
            <span>
                <i class="fa-solid fa-location-dot"></i>
                Jl. Wr. Kobak, Pasirgombong
            </span>
        </div>

        <!-- RIGHT -->
        <div class="topbar-right">
            <span>
                <i class="fa-solid fa-phone"></i>
                0812-8086-9497
            </span>

            <span>
                <i class="fa-solid fa-envelope"></i>
                mtsnegeri@mail.com
            </span>
        </div>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="container navbar-content">

        <!-- LOGO -->
        <div class="logo">
            <img src="{{ asset('images/logo.jpeg') }}"
                 alt="Logo Sekolah"
                 class="logo-img">

            <div class="logo-text">
                <h2>MTs Nurul Yaqin</h2>
                <p>MADRASAH BERMUTU DAN BERWIBAWA</p>
            </div>
        </div>

        <!-- TOGGLE MOBILE -->
        <button class="menu-toggle" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- MENU DESKTOP -->
        <ul class="menu">
            <li><a href="/">BERANDA</a></li>
            <li><a href="/profil">PROFIL</a></li>
            <li><a href="/guru">GURU</a></li>
            <li><a href="/kontak">KONTAK</a></li>

            <li>
                <a href="{{ url('/ppdb') }}" class="btn-ppdb">
                    <i class="fa-solid fa-user"></i> PPDB ONLINE
                </a>
            </li>

            @auth
                <li>
                    <a href="/dashboard" class="btn-dashboard">
                        <i class="fa-solid fa-gauge"></i> DASHBOARD
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-logout">
                            <i class="fa-solid fa-right-from-bracket"></i> LOGOUT
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/login" class="btn-login">
                        <i class="fa-solid fa-right-to-bracket"></i> LOGIN
                    </a>
                </li>
            @endauth
        </ul>
    </div>

    <!-- MENU MOBILE -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="/">BERANDA</a>
        <a href="/profil">PROFIL</a>
        <a href="/guru">GURU</a>
        <a href="/kontak">KONTAK</a>
        <a href="{{ url('/ppdb') }}" class="mobile-ppdb">
            <i class="fa-solid fa-user"></i> PPDB ONLINE
        </a>

        @auth
            <a href="/dashboard" class="mobile-dashboard">
                <i class="fa-solid fa-gauge"></i> DASHBOARD
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="mobile-logout">
                    <i class="fa-solid fa-right-from-bracket"></i> LOGOUT
                </button>
            </form>
        @else
            <a href="/login" class="mobile-login">
                <i class="fa-solid fa-right-to-bracket"></i> LOGIN
            </a>
        @endauth
    </div>
</nav>

<script>
function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('show');
}
</script>