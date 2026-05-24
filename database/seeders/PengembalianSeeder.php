<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengembalian;

class PengembalianSeeder extends Seeder
{
    public function run(): void
    {
        Pengembalian::create([
            'peminjaman_id'         => 1,
            'tanggal_dikembalikan'  => now(),
            'kondisi'               => 'baik',
            'denda'                 => 0,
            'catatan'               => 'Dikembalikan dengan baik'
        ]);
    }
}