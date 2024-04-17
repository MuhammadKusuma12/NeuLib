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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anggota')->constrained('anggotas')->onDelete('cascade');
            $table->foreignId('id_buku')->constrained('books')->onDelete('cascade');
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->string('denda');
            $table->enum('status_peminjaman', ['keranjang', 'dipinjam', 'dikembalikan', 'proses'])->default('keranjang');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjams');
    }
};
