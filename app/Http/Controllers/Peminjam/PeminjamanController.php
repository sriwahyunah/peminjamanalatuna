<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function create($id)
    {
        $alat = Alat::findOrFail($id);

        return view('peminjam.peminjaman.create', compact('alat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'alat_id' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);

        Peminjaman::create([
            'alat_id' => $request->alat_id,
            'peminjam_id' => auth()->id(),
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'status' => 'dipinjam'
        ]);

        return redirect()->route('peminjam.alat.index')
            ->with('success', 'Alat berhasil dipinjam');
    }
}