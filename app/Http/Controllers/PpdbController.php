<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;

class PpdbController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Halaman Informasi PPDB
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('ppdb.index');
    }

    /*
    |--------------------------------------------------------------------------
    | Form Pendaftaran
    |--------------------------------------------------------------------------
    */

    public function form()
    {
        return view('ppdb.form');
    }

    /*
    |--------------------------------------------------------------------------
    | Simpan Data Pendaftaran
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',

            'foto'   => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'akta'   => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
            'kk'     => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
            'ijazah' => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $foto = null;
        $akta = null;
        $kk = null;
        $ijazah = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')
                ->store('ppdb/foto', 'public');
        }

        if ($request->hasFile('akta')) {
            $akta = $request->file('akta')
                ->store('ppdb/akta', 'public');
        }

        if ($request->hasFile('kk')) {
            $kk = $request->file('kk')
                ->store('ppdb/kk', 'public');
        }

        if ($request->hasFile('ijazah')) {
            $ijazah = $request->file('ijazah')
                ->store('ppdb/ijazah', 'public');
        }

        Ppdb::create([
            'nama'          => $request->nama,
            'nisn'          => $request->nisn,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat'        => $request->alamat,
            'no_hp'         => $request->no_hp,
            'email'         => $request->email,

            'foto'          => $foto,
            'akta'          => $akta,
            'kk'            => $kk,
            'ijazah'        => $ijazah,
        ]);

        return redirect()
            ->route('ppdb.sukses')
            ->with('success', 'Pendaftaran berhasil dikirim.');
    }

    /*
    |--------------------------------------------------------------------------
    | Halaman Sukses
    |--------------------------------------------------------------------------
    */

    public function sukses()
    {
        return view('ppdb.sukses');
    }

    /*
    |--------------------------------------------------------------------------
    | Data Pendaftar (Admin)
    |--------------------------------------------------------------------------
    */

    public function dataPendaftar()
    {
        $ppdb = Ppdb::latest()->get();

        return view('admin.ppdb.index', compact('ppdb'));
    }
}