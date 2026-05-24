@extends('layouts.admin')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data User</h3>

        <a href="{{ route('admin.user.create') }}"
           class="btn btn-primary">
            Tambah User
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>NIM</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($users as $user)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $user->name }}</td>

                        <td>{{ $user->username }}</td>

                        <td>
                            @if($user->role == 'admin')
                                <span class="badge bg-danger">
                                    Admin
                                </span>

                            @elseif($user->role == 'petugas')
                                <span class="badge bg-warning">
                                    Petugas
                                </span>

                            @else
                                <span class="badge bg-success">
                                    Mahasiswa
                                </span>
                            @endif
                        </td>

                        <td>{{ $user->nim }}</td>

                        <td>{{ $user->no_hp }}</td>

                        <td>{{ $user->alamat }}</td>

                        <td>

                            <a href="{{ route('admin.user.edit', $user->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('admin.user.destroy', $user->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="8" class="text-center">
                            Data user kosong
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection