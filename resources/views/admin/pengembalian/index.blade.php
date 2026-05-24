@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Data Pengembalian</h2>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Alat</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Kondisi</th>
                <th>Denda</th>
            </tr>
        </thead>

        <tbody>

            @forelse($pengembalians as $pengembalian)

            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    {{ $pengembalian->peminjaman->user->name ?? '-' }}
                </td>

                <td>
                    {{ $pengembalian->peminjaman->alat->nama_alat ?? '-' }}
                </td>

                <td>
                    {{ $pengembalian->peminjaman->tanggal_pinjam ?? '-' }}
                </td>

                <td>
                    {{ $pengembalian->tanggal_kembali }}
                </td>

                <td>
                    {{ $pengembalian->kondisi_alat }}
                </td>

                <td>
                    Rp {{ number_format($pengembalian->denda, 0, ',', '.') }}
                </td>
            </tr>

            @empty

            <tr>
                <td colspan="7" class="text-center">
                    Data pengembalian belum tersedia
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection