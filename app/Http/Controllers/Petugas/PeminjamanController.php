<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::all();

        return view(
            'petugas.peminjaman.index',
            compact('peminjamans')
        );
    }
}