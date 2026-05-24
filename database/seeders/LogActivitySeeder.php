<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LogActivity;

class LogActivitySeeder extends Seeder
{
    public function run(): void
    {
        LogActivity::create([
            'user_id'     => 1,
            'aktivitas'   => 'Login Admin',
            'deskripsi'   => 'Admin berhasil login',
            'ip_address'  => '127.0.0.1'
        ]);
    }
}