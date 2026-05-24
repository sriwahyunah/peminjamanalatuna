<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $fillable = [
        'user_id',
        'aktivitas',
        'deskripsi',
        'ip_address'
    ];

    // RELASI
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}