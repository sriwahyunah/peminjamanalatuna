<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalians = Pengembalian::latest()->get();

        return view(
            'petugas.pengembalian.index',
            compact('pengembalians')
        );
    }
}