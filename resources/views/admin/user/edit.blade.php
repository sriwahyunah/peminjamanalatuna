@extends('layouts.admin')

@section('content')

<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <h4>Edit User</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.user.update', $user->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama</label>

                    <input type="text"
                           name="name"
                           value="{{ $user->name }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Username</label>

                    <input type="text"
                           name="username"
                           value="{{ $user->username }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Password Baru</label>

                    <input type="password"
                           name="password"
                           class="form-control">

                    <small>
                        Kosongkan jika tidak ingin mengganti password
                    </small>
                </div>

                <div class="mb-3">
                    <label>Role</label>

                    <select name="role"
                            class="form-control">

                        <option value="admin"
                            {{ $user->role == 'admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                        <option value="petugas"
                            {{ $user->role == 'petugas' ? 'selected' : '' }}>
                            Petugas
                        </option>

                        <option value="mahasiswa"
                            {{ $user->role == 'mahasiswa' ? 'selected' : '' }}>
                            Mahasiswa
                        </option>

                    </select>
                </div>

                <div class="mb-3">
                    <label>NIM</label>

                    <input type="text"
                           name="nim"
                           value="{{ $user->nim }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>No HP</label>

                    <input type="text"
                           name="no_hp"
                           value="{{ $user->no_hp }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>

                    <textarea name="alamat"
                              class="form-control">{{ $user->alamat }}</textarea>
                </div>

                <button class="btn btn-primary">
                    Update
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