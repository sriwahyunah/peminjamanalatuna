<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'      => 'Administrator',
            'username'  => 'admin',
            'password'  => 'admin123',
            'role'      => 'admin',
            'nim'       => null,
            'no_hp'     => '081234567890',
            'alamat'    => 'Kantor Admin'
        ]);

        User::create([
            'name'      => 'Petugas Lab',
            'username'  => 'petugas',
            'password'  => 'petugas123',
            'role'      => 'petugas',
            'nim'       => null,
            'no_hp'     => '081234567891',
            'alamat'    => 'Ruang Petugas'
        ]);

        User::create([
            'name'      => 'Peminjam',
            'username'  => 'peminjam',
            'password'  => 'peminjam123',
            'role'      => 'peminjam',
            'nim'       => '220001',
            'no_hp'     => '081234567892',
            'alamat'    => 'Takengon'
        ]);
    }
}