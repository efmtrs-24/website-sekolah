<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\GuruController;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Pengumuman;
use App\Models\Ppdb;

/*
|--------------------------------------------------------------------------
| WEBSITE PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $berita = Berita::latest()->take(4)->get();
    $pengumuman = Pengumuman::latest()->take(5)->get();
    $galeri = Galeri::latest()->take(6)->get();

    return view('welcome', compact(
        'berita',
        'pengumuman',
        'galeri'
    ));

})->name('home');

Route::view('/profil', 'profil')->name('profil');

/*
|--------------------------------------------------------------------------
| HALAMAN GURU (TANPA DATABASE)
|--------------------------------------------------------------------------
*/
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

Route::view('/kontak', 'kontak')->name('kontak');


/*
|--------------------------------------------------------------------------
| GALERI PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/galeri', function () {

    $galeri = Galeri::latest()->get();

    return view('galeri', compact('galeri'));

})->name('galeri.public');


/*
|--------------------------------------------------------------------------
| PENGUMUMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/pengumuman', function () {

    $pengumuman = Pengumuman::latest()->get();

    return view('pengumuman', compact('pengumuman'));

})->name('pengumuman.public');


/*
|--------------------------------------------------------------------------
| PPDB
|--------------------------------------------------------------------------
*/

Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb');
Route::get('/ppdb/form', [PpdbController::class, 'form'])->name('ppdb.form');
Route::post('/ppdb/store', [PpdbController::class, 'store'])->name('ppdb.store');
Route::get('/ppdb/sukses', [PpdbController::class, 'sukses'])->name('ppdb.sukses');


/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {

        return view('dashboard', [
            'totalBerita'     => Berita::count(),
            'totalGaleri'     => Galeri::count(),
            'totalPengumuman' => Pengumuman::count(),
            'totalPendaftar'  => Ppdb::count(),
        ]);

    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | BERITA
    |--------------------------------------------------------------------------
    */

    Route::prefix('admin/berita')->group(function () {

        Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
        Route::get('/create', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/store', [BeritaController::class, 'store'])->name('berita.store');
        Route::get('/{id}', [BeritaController::class, 'show'])->name('berita.show');
        Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::delete('/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    });


    /*
    |--------------------------------------------------------------------------
    | GALERI
    |--------------------------------------------------------------------------
    */

    Route::prefix('admin/galeri')->group(function () {

        Route::get('/', [GaleriController::class, 'index'])->name('galeri.index');
        Route::get('/create', [GaleriController::class, 'create'])->name('galeri.create');
        Route::post('/store', [GaleriController::class, 'store'])->name('galeri.store');
        Route::get('/{id}', [GaleriController::class, 'show'])->name('galeri.show');
        Route::get('/{id}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
        Route::put('/{id}', [GaleriController::class, 'update'])->name('galeri.update');
        Route::delete('/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    });


    /*
    |--------------------------------------------------------------------------
    | PENGUMUMAN
    |--------------------------------------------------------------------------
    */

    Route::prefix('admin/pengumuman')->group(function () {

        Route::get('/', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::get('/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
        Route::post('/store', [PengumumanController::class, 'store'])->name('pengumuman.store');
        Route::get('/{id}', [PengumumanController::class, 'show'])->name('pengumuman.show');
        Route::get('/{id}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
        Route::put('/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::delete('/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

    });


    /*
    |--------------------------------------------------------------------------
    | DATA PPDB
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/ppdb', [PpdbController::class, 'dataPendaftar'])
        ->name('admin.ppdb');
});

require __DIR__.'/auth.php';