<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('balasan_ulasans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ulasan_id')
                ->constrained('ulasan_produks')
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->text('balasan');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balasan_ulasans');
    }
};
