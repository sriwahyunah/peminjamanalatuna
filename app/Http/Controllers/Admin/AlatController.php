<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alat = Alat::with('kategori')->get();

        return view('admin.alat.index', compact('alat'));
    }

    public function create()
    {
        $kategori = Kategori::all();

        return view('admin.alat.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kategori_id' => 'required',
            'kode_alat' => 'required',
            'nama_alat' => 'required',
            'stok' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('alat', 'public');
        }

        Alat::create($data);

        return redirect()
            ->route('alat.index')
            ->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $alat = Alat::findOrFail($id);

        $kategori = Kategori::all();

        return view('admin.alat.edit', compact('alat', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $alat = Alat::findOrFail($id);

        $data = $request->validate([
            'kategori_id' => 'required',
            'kode_alat' => 'required',
            'nama_alat' => 'required',
            'stok' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('alat', 'public');
        }

        $alat->update($data);

        return redirect()
            ->route('alat.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $alat = Alat::findOrFail($id);

        $alat->delete();

        return redirect()
            ->route('alat.index')
            ->with('success', 'Data berhasil dihapus');
    }
}