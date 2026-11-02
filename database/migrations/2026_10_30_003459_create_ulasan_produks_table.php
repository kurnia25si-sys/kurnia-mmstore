<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ulasan_produks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('produk_id')
                ->constrained('produk')
                ->cascadeOnDelete();

            $table->string('nama_pengulas');
            $table->unsignedTinyInteger('rating');
            $table->text('komentar');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ulasan_produks');
    }
};
