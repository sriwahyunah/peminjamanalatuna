@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Data Alat</h2>

    <a href="{{ route('alat.create') }}" class="btn btn-primary">
        + Tambah Alat
    </a>
</div>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Alat</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Kondisi</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($alat as $item)

                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->kode_alat }}</td>

                    <td>{{ $item->nama_alat }}</td>

                    <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>

                    <td>{{ $item->stok }}</td>

                    <td>
                        @if($item->kondisi == 'baik')
                            <span class="badge bg-success">Baik</span>
                        @else
                            <span class="badge bg-danger">Rusak</span>
                        @endif
                    </td>

                    <td>{{ $item->deskripsi }}</td>

                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/'.$item->gambar) }}"
                                width="80">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('alat.edit', $item->id) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('alat.destroy', $item->id) }}"
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

                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection