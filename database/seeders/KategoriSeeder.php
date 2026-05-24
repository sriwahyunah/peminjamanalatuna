<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Elektronik',
            'deskripsi'     => 'Peralatan elektronik'
        ]);

        Kategori::create([
            'nama_kategori' => 'Olahraga',
            'deskripsi'     => 'Peralatan olahraga'
        ]);

        Kategori::create([
            'nama_kategori' => 'Multimedia',
            'deskripsi'     => 'Peralatan multimedia'
        ]);
    }
}