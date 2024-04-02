<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade');
            $table->string('judul');
            $table->string('image');
            $table->text('sinopsis');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->integer('tahun_terbit')->nullable();
            $table->integer('jumlah');
            $table->integer('halaman');
            $table->string('barcode');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};