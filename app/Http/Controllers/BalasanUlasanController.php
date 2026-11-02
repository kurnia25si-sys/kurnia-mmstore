<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BalasanUlasanController extends Controller
{
    // Menampilkan semua balasan
    public function index()
    {
        $balasan = DB::table('balasan_ulasans')
            ->join('ulasan_produks', 'balasan_ulasans.ulasan_id', '=', 'ulasan_produks.id')
            ->join('produk', 'ulasan_produks.produk_id', '=', 'produk.id')
            ->join('users', 'balasan_ulasans.user_id', '=', 'users.id')
            ->select(
                'balasan_ulasans.*',
                'ulasan_produks.nama_pengulas',
                'ulasan_produks.komentar',
                'produk.nama_produk',
                'users.name as nama_admin'
            )
            ->orderByDesc('balasan_ulasans.created_at')
            ->get();

        return view('admin.balasan-ulasan.index', compact('balasan'));
    }

    // Menampilkan form tambah balasan
    public function create()
    {
        $ulasan = DB::table('ulasan_produks')
            ->join('produk', 'ulasan_produks.produk_id', '=', 'produk.id')
            ->select(
                'ulasan_produks.*',
                'produk.nama_produk'
            )
            ->orderByDesc('ulasan_produks.created_at')
            ->get();

        return view('admin.balasan-ulasan.create', compact('ulasan'));
    }

    // Menyimpan balasan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ulasan_id' => 'required|exists:ulasan_produks,id',
            'balasan' => 'required|string',
        ]);

        DB::table('balasan_ulasans')->insert([
            'ulasan_id' => $validated['ulasan_id'],
            'user_id' => Auth::id(),
            'balasan' => $validated['balasan'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('balasan-ulasan.index')
            ->with('success', 'Balasan berhasil ditambahkan.');
    }

    // Mengarahkan detail ke halaman edit
    public function show(string $id)
    {
        return redirect()->route('balasan-ulasan.edit', $id);
    }

    // Menampilkan form edit balasan
    public function edit(string $id)
    {
        $balasan = DB::table('balasan_ulasans')
            ->where('id', $id)
            ->first();

        abort_if(!$balasan, 404);

        $ulasan = DB::table('ulasan_produks')
            ->join('produk', 'ulasan_produks.produk_id', '=', 'produk.id')
            ->select(
                'ulasan_produks.*',
                'produk.nama_produk'
            )
            ->orderByDesc('ulasan_produks.created_at')
            ->get();

        return view('admin.balasan-ulasan.edit', compact('balasan', 'ulasan'));
    }

    // Memperbarui balasan
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'ulasan_id' => 'required|exists:ulasan_produks,id',
            'balasan' => 'required|string',
        ]);

        $ada = DB::table('balasan_ulasans')
            ->where('id', $id)
            ->exists();

        abort_if(!$ada, 404);

        DB::table('balasan_ulasans')
            ->where('id', $id)
            ->update([
                'ulasan_id' => $validated['ulasan_id'],
                'balasan' => $validated['balasan'],
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('balasan-ulasan.index')
            ->with('success', 'Balasan berhasil diperbarui.');
    }

    // Menghapus balasan
    public function destroy(string $id)
    {
        DB::table('balasan_ulasans')
            ->where('id', $id)
            ->delete();

        return redirect()
            ->route('balasan-ulasan.index')
            ->with('success', 'Balasan berhasil dihapus.');
    }
}
