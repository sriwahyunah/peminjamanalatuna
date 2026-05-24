<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Kategori;
use App\Models\Peminjaman;

class Alat extends Model
{
    protected $table = 'alats';

    protected $fillable = [
        'kategori_id',
        'kode_alat',
        'nama_alat',
        'stok',
        'kondisi',
        'deskripsi',
        'gambar'
    ];

    // RELASI KATEGORI
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // RELASI PEMINJAMAN
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }
}