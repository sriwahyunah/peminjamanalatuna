<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Alat;
use App\Models\Pengembalian;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';

    protected $fillable = [
        'user_id',
        'alat_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'jumlah',
        'status',
        'catatan'
    ];

    // RELASI USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // RELASI ALAT
    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }

    // RELASI PENGEMBALIAN
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
}