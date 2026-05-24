<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peminjaman;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        Peminjaman::create([
            'user_id'           => 3,
            'alat_id'           => 1,
            'tanggal_pinjam'    => now(),
            'tanggal_kembali'   => now()->addDays(3),
            'jumlah'            => 1,
            'status'            => 'dipinjam',
            'catatan'           => 'Dipakai praktikum'
        ]);
    }
}