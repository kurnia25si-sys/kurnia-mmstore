<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UlasanProduk extends Model
{
    protected $table = 'ulasan_produks';

    protected $fillable = [
        'produk_id',
        'nama_pengulas',
        'rating',
        'komentar',
    ];

    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
