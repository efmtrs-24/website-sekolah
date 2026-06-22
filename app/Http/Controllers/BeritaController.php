<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Menampilkan semua berita
     */
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Form tambah berita
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Simpan berita
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required|max:255',
            'isi'    => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')
                ->store('berita', 'public');
        }

        Berita::create([
            'judul'  => $request->judul,
            'isi'    => $request->isi,
            'gambar' => $gambar,
        ]);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Detail berita
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.show', compact('berita'));
    }

    /**
     * Form edit berita
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update berita
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'  => 'required|max:255',
            'isi'    => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $berita->gambar &&
                Storage::disk('public')->exists($berita->gambar)
            ) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $gambar = $request->file('gambar')
                ->store('berita', 'public');

            $berita->gambar = $gambar;
        }

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;

        $berita->save();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Hapus berita
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if (
            $berita->gambar &&
            Storage::disk('public')->exists($berita->gambar)
        ) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil dihapus');
    }
}