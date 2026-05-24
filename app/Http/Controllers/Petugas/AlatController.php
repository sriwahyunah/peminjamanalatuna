<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alat;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::all();

        return view('petugas.alat.index', compact('alats'));
    }

    public function create()
    {
        return view('petugas.alat.create');
    }
}