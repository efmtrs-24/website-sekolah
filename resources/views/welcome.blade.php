@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- HERO -->

<section class="hero">

    <img src="{{ asset('images/profile.jpeg') }}" 
     class="img-fluid rounded shadow">
    <div class="overlay"></div>

    <div class="hero-content">

        <h4>Selamat Datang di</h4>

        <h1>
            MTs NURUL
            YAQIN
        </h1>

        <p>
            MADRASAH BERMUTU DAN BERWIBAWA
        </p>

        <div class="hero-btn">

            <a href="/profil" class="btn btn-white">
                Profil Sekolah
            </a>

            <a href="/ppdb" class="btn btn-white">
                Informasi PPDB
            </a>

        </div>

    </div>

</section>

<!-- FITUR -->

<section class="fitur">

    <div class="container">

        <div class="fitur-grid">

            <div class="fitur-box">

                <i class="fa-solid fa-award"></i>

                <h3>Akreditasi A</h3>

                <p>Terakreditasi unggul nasional</p>

            </div>

            <div class="fitur-box">

                <i class="fa-solid fa-user-graduate"></i>

                <h3>Guru Profesional</h3>

                <p>Tenaga pengajar berpengalaman</p>

            </div>

            <div class="fitur-box">

                <i class="fa-solid fa-trophy"></i>

                <h3>Prestasi Siswa</h3>

                <p>Prestasi akademik & non akademik</p>

            </div>

            <div class="fitur-box">

                <i class="fa-solid fa-school"></i>

                <h3>Fasilitas Lengkap</h3>

                <p>Sarana dan prasarana modern</p>

            </div>

            <div class="fitur-box">

                <i class="fa-solid fa-mosque"></i>

                <h3>Lingkungan Islami</h3>

                <p>Nyaman dan religius</p>

            </div>

        </div>

    </div>

</section>

<!-- CONTENT -->

<section class="section">

    <div class="container">

        <div class="content-grid">

            <!-- BERITA -->

<div class="card">

    <div class="card-header">

        <h3>BERITA TERBARU</h3>


    </div>

    @forelse($berita as $item)

        <div class="berita-item">

            <img
                src="{{ asset('storage/'.$item->gambar) }}"
                alt="{{ $item->judul }}"
                class="img-fluid rounded">

            <div class="berita-text">

                <h4>
                    {{ $item->judul }}
                </h4>

                <p>
                    {{ \Illuminate\Support\Str::limit($item->isi, 80) }}
                </p>

            </div>

        </div>

    @empty

        <p>Belum ada berita.</p>

    @endforelse

</div>

            <!-- PENGUMUMAN -->

            <div class="card">

    <div class="card-header">
        <h3>PENGUMUMAN</h3>

    </div>

    @forelse($pengumuman as $item)

        <div class="pengumuman-item">

            <div class="tanggal">
                {{ $item->created_at->format('d') }}
                <br>
                {{ strtoupper($item->created_at->format('M')) }}
            </div>

            <div>
                <strong>{{ $item->judul }}</strong>

                <p>
                    {{ \Illuminate\Support\Str::limit($item->isi, 60) }}
                </p>
            </div>

        </div>

    @empty

        <p>Belum ada pengumuman.</p>

    @endforelse

</div>

</div>
            <!-- GALERI -->
            <div class="card">

                <div class="card-header">

                    <h3>GALERI KEGIATAN</h3>

                </div>

                <div class="galeri">

                    @forelse($galeri as $item)

                        <div class="galeri-item">

                            <img
                                src="{{ asset('storage/'.$item->gambar) }}"
                                alt="{{ $item->judul }}">

                            <h5>
                                {{ $item->judul }}
                            </h5>

                        </div>

                    @empty

                        <p>
                            Belum ada galeri kegiatan.
                        </p>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

</section>

@endsection