<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Alat;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();

        $totalAlat = Alat::count();

        $totalKategori = Kategori::count();

        $totalPeminjaman = Peminjaman::count();

        $totalPengembalian = Pengembalian::count();

        $alatTerbaru = Alat::latest()->take(5)->get();

        $peminjamanTerbaru = Peminjaman::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUser',
            'totalAlat',
            'totalKategori',
            'totalPeminjaman',
            'totalPengembalian',
            'alatTerbaru',
            'peminjamanTerbaru'
        ));
    }
}