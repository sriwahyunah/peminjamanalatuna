<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalians = Pengembalian::latest()->get();
        return view('admin.pengembalian.index', compact('pengembalians'));
    }

    public function create()
    {
        return view('admin.pengembalian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'peminjaman_id' => 'required',
            'tanggal_dikembalikan' => 'required',
            'kondisi' => 'required',
            'denda' => 'required',
            'catatan' => 'nullable',
        ]);

        Pengembalian::create($request->all());

        return redirect()->route('admin.pengembalian.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('admin.pengembalian.edit', compact('pengembalian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'peminjaman_id' => 'required',
            'tanggal_dikembalikan' => 'required',
            'kondisi' => 'required',
            'denda' => 'required',
            'catatan' => 'nullable',
        ]);

        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->update($request->all());

        return redirect()->route('admin.pengembalian.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();

        return redirect()->route('admin.pengembalian.index')
            ->with('success', 'Data berhasil dihapus');
    }
}