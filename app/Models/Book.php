<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kategori',
        'judul',
        'image',
        'sinopsis',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'jumlah',
        'halaman',
        'barcode'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class, 'id_buku');
    }
}
