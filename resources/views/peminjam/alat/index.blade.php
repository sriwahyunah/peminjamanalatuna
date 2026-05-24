@extends('layouts.peminjam')

@section('content')
<div class="container mt-4">

    <h2>Data Alat</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($alats as $i => $alat)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $alat->nama_alat }}</td>
                <td>{{ $alat->stok }}</td>
                <td>{{ $alat->kategori->nama_kategori ?? '-' }}</td>
                <td>

                    <!-- 🔥 FIX UTAMA DI SINI -->
                    <a href="{{ route('peminjam.peminjaman.create', $alat->id) }}"
                       class="btn btn-primary btn-sm">
                        Pinjam
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection