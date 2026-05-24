@extends('layouts.petugas')

@section('content')

<div class="container mt-4">

    <h2 class="mb-4">Data Alat</h2>

    <a href="{{ route('petugas.alat.create') }}"
       class="btn btn-primary mb-3">
        Tambah Alat
    </a>

    <table class="table table-bordered">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Alat</th>
                <th>Stok</th>
                <th>Kondisi</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($alats as $alat)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $alat->kode_alat }}</td>
                <td>{{ $alat->nama_alat }}</td>
                <td>{{ $alat->stok }}</td>
                <td>{{ $alat->kondisi }}</td>
                <td>{{ $alat->deskripsi }}</td>

                <td>
                    @if($alat->gambar)
                        <img src="{{ asset('images/' . $alat->gambar) }}"
                             width="80">
                    @else
                        Tidak Ada
                    @endif
                </td>

                <td>

                    <a href="{{ route('petugas.alat.edit', $alat->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('petugas.alat.destroy', $alat->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>

                </td>
            </tr>

            @empty

            <tr>
                <td colspan="8" class="text-center">
                    Data kosong
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection