<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UlasanProdukController;
use App\Http\Controllers\BalasanUlasanController;
use App\Http\Controllers\KeranjangController;


// Halaman utama Guest
Route::get('/', function () {

    // Mengambil data produk beserta nama kategori
    $produk = DB::table('produk')
        ->leftJoin('kategori', 'produk.kategori_id', '=', 'kategori.id')
        ->select(
            'produk.*',
            'kategori.nama_kategori as kategori_nama'
        )
        ->orderByDesc('produk.created_at')
        ->get();

    // Mengambil data kategori
    $kategori = DB::table('kategori')
        ->orderBy('nama_kategori')
        ->get();

    // Mengambil ulasan beserta produk dan balasan admin
    $ulasan = DB::table('ulasan_produks')
        ->join('produk', 'ulasan_produks.produk_id', '=', 'produk.id')
        ->leftJoin('balasan_ulasans', 'ulasan_produks.id', '=', 'balasan_ulasans.ulasan_id')
        ->leftJoin('users', 'balasan_ulasans.user_id', '=', 'users.id')
        ->select(
            'ulasan_produks.*',
            'produk.nama_produk',
            'balasan_ulasans.balasan',
            'balasan_ulasans.created_at as waktu_balasan',
            'users.name as nama_admin'
        )
        ->orderByDesc('ulasan_produks.created_at')
        ->get();

    return view('guest.home', compact('produk', 'ulasan', 'kategori'));
});


// Halaman Contact
Route::get('/contact', function () {
    return view('guest.contact');
});


// Authentication
Route::get('/auth', [AuthController::class, 'showLogin'])->name('login');
Route::post('/auth', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


// Admin
Route::middleware(['auth'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Pelanggan
    Route::resource('pelanggan', PelangganController::class);

    // CRUD User
    Route::resource('users', UserController::class);

    // CRUD Produk
    Route::resource('produk', ProdukController::class);

    // CRUD Kategori
    Route::resource('kategori', KategoriController::class);

    // CRUD Ulasan Produk
    Route::resource('ulasan-produk', UlasanProdukController::class);

    // CRUD Balasan Ulasan
    Route::resource('balasan-ulasan', BalasanUlasanController::class);

    // Query Builder Produk
    Route::get('/admin/produk-query', function () {
        $produk = DB::table('produk')
            ->where('stok', '>', 0)
            ->where(function ($query) {
                $query->where('harga', '>', 0)
                    ->orWhereNull('harga');
            })
            ->orderBy('nama_produk')
            ->get();

        return view('admin.produk.query', compact('produk'));
    })->name('produk.query');

});

// Detail Produk
Route::get('/detail-produk/{id}', function ($id) {
    $produk = DB::table('produk')
        ->leftJoin('kategori', 'produk.kategori_id', '=', 'kategori.id')
        ->select(
            'produk.*',
            'kategori.nama_kategori as kategori_nama'
        )
        ->where('produk.id', $id)
        ->first();

    if (!$produk) {
        abort(404);
    }

    return view('guest.detail-produk', compact('produk'));
})->name('produk.detail');

// Route Keranjang
Route::get('/keranjang', [KeranjangController::class, 'index'])
    ->name('keranjang.index');

Route::post('/keranjang/tambah/{id}', [KeranjangController::class, 'tambah'])
    ->name('keranjang.tambah');
