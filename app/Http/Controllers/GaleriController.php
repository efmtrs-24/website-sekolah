<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Halaman Admin Galeri
     */
    public function index()
    {
        $galeris = Galeri::latest()->get();

        return view('admin.galeri.index', compact('galeris'));
    }

    /**
     * Halaman Galeri Publik
     */
    public function public()
    {
        $galeris = Galeri::latest()->get();

        return view('galeri', compact('galeris'));
    }

    /**
     * Form Tambah Galeri
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Simpan Data Galeri
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')
                              ->store('galeri', 'public');
        }

        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $gambar,
        ]);

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil ditambahkan.');
    }

    /**
     * Detail Galeri
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.show', compact('galeri'));
    }

    /**
     * Form Edit Galeri
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update Galeri
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $galeri->gambar &&
                Storage::disk('public')->exists($galeri->gambar)
            ) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            $gambar = $request->file('gambar')
                              ->store('galeri', 'public');

            $galeri->gambar = $gambar;
        }

        $galeri->judul = $request->judul;

        $galeri->save();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil diperbarui.');
    }

    /**
     * Hapus Galeri
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if (
            $galeri->gambar &&
            Storage::disk('public')->exists($galeri->gambar)
        ) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil dihapus.');
    }
}