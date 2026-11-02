<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function tambah(Request $request, $id)
    {
        $produk = DB::table('produk')->where('id', $id)->first();

        if (!$produk) {
            return redirect('/')->with('error', 'Produk tidak ditemukan.');
        }

        if ($produk->stok <= 0) {
            return redirect('/')->with('error', 'Stok produk sedang habis.');
        }

        $keranjang = session()->get('keranjang', []);

        if (isset($keranjang[$id])) {
            if ($keranjang[$id]['jumlah'] >= $produk->stok) {
                return redirect('/')->with('error', 'Jumlah produk melebihi stok.');
            }

            $keranjang[$id]['jumlah']++;
        } else {
            $keranjang[$id] = [
                'id' => $produk->id,
                'nama_produk' => $produk->nama_produk,
                'harga' => $produk->harga,
                'gambar' => $produk->gambar,
                'jumlah' => 1,
            ];
        }

        session()->put('keranjang', $keranjang);

        return redirect()->route('keranjang.index')
    ->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function index()
    {
        $keranjang = session()->get('keranjang', []);

        return view('guest.cart', compact('keranjang'));
    }
}
