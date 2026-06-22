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

        <!-- MENU -->

        <ul class="menu">

            <li>

                <a href="/">BERANDA</a>

            </li>

            <li>

                <a href="/profil">PROFIL</a>

            </li>

            <li>

                <a href="/guru">GURU</a>

            </li>

            <li>

                <a href="/kontak">KONTAK</a>

            </li>

            <!-- PPDB -->

            <a href="{{ url('/ppdb') }}" class="btn-ppdb">

            <i class="fa-solid fa-user"></i>

             PPDB ONLINE

            </a>

            <!-- AUTH -->

            @auth

                <!-- DASHBOARD -->

                <li>

                    <a href="/dashboard" class="btn-dashboard">

                        <i class="fa-solid fa-gauge"></i>

                        DASHBOARD

                    </a>

                </li>

                <!-- LOGOUT -->

                <li>

                    <form method="POST" 
                          action="{{ route('logout') }}">

                        @csrf

                        <button type="submit" class="btn-logout">

                            <i class="fa-solid fa-right-from-bracket"></i>

                            LOGOUT

                        </button>

                    </form>

                </li>

            @else

                <!-- LOGIN -->

                <li>

                    <a href="/login" class="btn-login">

                        <i class="fa-solid fa-right-to-bracket"></i>

                        LOGIN

                    </a>

                </li>

            @endauth

        </ul>

    </div>

</nav>