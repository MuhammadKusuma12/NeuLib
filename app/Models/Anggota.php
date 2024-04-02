<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama',
        'telpon',
        'email',
        'alamat',
        'tanggal_lahir',
        'total_denda',
        'jenis_kelamin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class, 'id_anggota');
    }

}
