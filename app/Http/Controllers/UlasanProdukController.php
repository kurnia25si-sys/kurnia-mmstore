<?php

namespace App\Http\Controllers;

use App\Models\UlasanProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class UlasanProdukController extends Controller
{
    // Menampilkan semua ulasan
    public function index()
    {
        $ulasan = UlasanProduk::with('produk')
            ->latest()
            ->get();

        return view('admin.ulasan.index', compact('ulasan'));
    }

    // Menampilkan form tambah ulasan
    public function create()
    {
        $produk = Produk::orderBy('nama_produk')->get();

        return view('admin.ulasan.create', compact('produk'));
    }

    // Menyimpan ulasan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'nama_pengulas' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'required|string',
        ]);

        UlasanProduk::create($validated);

        return redirect()
            ->route('ulasan-produk.index')
            ->with('success', 'Ulasan berhasil ditambahkan.');
    }

    // Mengarahkan detail ulasan ke halaman edit
    public function show(string $id)
    {
        return redirect()->route('ulasan-produk.edit', $id);
    }

    // Menampilkan form edit ulasan
    public function edit(string $id)
    {
        $ulasan = UlasanProduk::findOrFail($id);
        $produk = Produk::orderBy('nama_produk')->get();

        return view('admin.ulasan.edit', compact('ulasan', 'produk'));
    }

    // Memperbarui ulasan
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'produk_id' => 'required|exists:produk,id',
            'nama_pengulas' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'required|string',
        ]);

        $ulasan = UlasanProduk::findOrFail($id);
        $ulasan->update($validated);

        return redirect()
            ->route('ulasan-produk.index')
            ->with('success', 'Ulasan berhasil diperbarui.');
    }

    // Menghapus ulasan
    public function destroy(string $id)
    {
        $ulasan = UlasanProduk::findOrFail($id);
        $ulasan->delete();

        return redirect()
            ->route('ulasan-produk.index')
            ->with('success', 'Ulasan berhasil dihapus.');
    }
}
