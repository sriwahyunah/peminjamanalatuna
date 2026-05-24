@extends('layouts.admin')

@section('content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <h4>Tambah User</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.user.store') }}"
                  method="POST">

                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text"
                           name="name"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text"
                           name="username"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password"
                           name="password"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Role</label>

                    <select name="role"
                            class="form-control">

                        <option value="">-- Pilih Role --</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                        <option value="mahasiswa">Mahasiswa</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text"
                           name="nim"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text"
                           name="no_hp"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>

                    <textarea name="alamat"
                              class="form-control"></textarea>
                </div>

                <button class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('admin.user.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection