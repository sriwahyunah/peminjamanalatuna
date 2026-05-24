<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alat;

class AlatSeeder extends Seeder
{
    public function run(): void
    {
        Alat::create([
            'kategori_id' => 1,
            'kode_alat'   => 'ALT001',
            'nama_alat'   => 'Laptop Asus',
            'stok'        => 5,
            'kondisi'     => 'baik',
            'deskripsi'   => 'Laptop untuk praktikum',
            'gambar'      => null
        ]);

        Alat::create([
            'kategori_id' => 2,
            'kode_alat'   => 'ALT002',
            'nama_alat'   => 'Bola Futsal',
            'stok'        => 10,
            'kondisi'     => 'baik',
            'deskripsi'   => 'Bola futsal standar',
            'gambar'      => null
        ]);

        Alat::create([
            'kategori_id' => 3,
            'kode_alat'   => 'ALT003',
            'nama_alat'   => 'Proyektor Epson',
            'stok'        => 3,
            'kondisi'     => 'baik',
            'deskripsi'   => 'Proyektor ruang seminar',
            'gambar'      => null
        ]);
    }
}