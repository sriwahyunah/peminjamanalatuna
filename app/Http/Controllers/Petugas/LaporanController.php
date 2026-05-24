<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Alat;

class LaporanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::latest()->get();

        $pengembalians = Pengembalian::latest()->get();

        $alats = Alat::all();

        return view('petugas.laporan.index', compact(
            'peminjamans',
            'pengembalians',
            'alats'
        ));
    }
}