<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'kategori',
        'kategori_id',
        'deskripsi',
        'harga',
        'stok',
        'gambar',
    ];

    public function kategoriRelasi(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function ulasan(): HasMany
    {
        return $this->hasMany(UlasanProduk::class, 'produk_id');
    }
}
