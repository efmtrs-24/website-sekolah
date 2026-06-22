<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    // Tampilkan semua pengumuman
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();

        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    // Form tambah pengumuman
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    // Simpan pengumuman
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi'   => 'required',
        ]);

        Pengumuman::create([
            'judul' => $request->judul,
            'isi'   => $request->isi,
        ]);

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    // Detail pengumuman
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.show', compact('pengumuman'));
    }

    // Form edit
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'isi'   => 'required',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->update([
            'judul' => $request->judul,
            'isi'   => $request->isi,
        ]);

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->delete();

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus.');
    }
}