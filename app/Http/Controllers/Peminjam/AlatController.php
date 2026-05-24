<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Alat;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::with('kategori')->get();

        return view('peminjam.alat.index', compact('alats'));
    }
}