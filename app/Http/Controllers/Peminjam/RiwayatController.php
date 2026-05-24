<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat = Peminjaman::with('alat')->latest()->get();

        return view('peminjam.riwayat.index', compact('riwayat'));
    }
}