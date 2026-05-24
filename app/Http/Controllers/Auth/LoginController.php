<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // TAMPIL LOGIN
    public function index()
    {
        return view('auth.login');
    }

    // PROSES LOGIN
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            // ADMIN
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // PETUGAS
            if (Auth::user()->role == 'petugas') {
                return redirect()->route('petugas.dashboard');
            }

            // peminjam
            if (Auth::user()->role == 'peminjam') {
                return redirect()->route('peminjam.dashboard');
            }
        }

        return back()->with('error', 'Username atau Password salah');
    }
}