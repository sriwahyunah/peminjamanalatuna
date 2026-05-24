@extends('layouts.petugas')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-primary text-white">

        <h5 class="mb-0">
            Data Peminjaman
        </h5>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-light">

                <tr>

                    <th>ID</th>
                    <th>User ID</th>
                    <th>Alat ID</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Catatan</th>

                </tr>

            </thead>

            <tbody>

                @forelse($peminjamans as $peminjaman)

                    <tr>

                        <td>
                            {{ $peminjaman->id }}
                        </td>

                        <td>
                            {{ $peminjaman->user_id }}
                        </td>

                        <td>
                            {{ $peminjaman->alat_id }}
                        </td>

                        <td>
                            {{ $peminjaman->tanggal_pinjam }}
                        </td>

                        <td>
                            {{ $peminjaman->tanggal_kembali }}
                        </td>

                        <td>
                            {{ $peminjaman->jumlah }}
                        </td>

                        <td>

                            @if($peminjaman->status == 'dipinjam')

                                <span class="badge bg-primary">
                                    Dipinjam
                                </span>

                            @elseif($peminjaman->status == 'dikembalikan')

                                <span class="badge bg-success">
                                    Dikembalikan
                                </span>

                            @else

                                <span class="badge bg-warning text-dark">
                                    {{ $peminjaman->status }}
                                </span>

                            @endif

                        </td>

                        <td>
                            {{ $peminjaman->catatan }}
                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="8"
                            class="text-center">

                            Data peminjaman belum ada

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection