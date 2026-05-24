@extends('layouts.petugas')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

        <h5 class="mb-0">
            Data Pengembalian
        </h5>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-light">

                <tr>

                    <th>ID</th>
                    <th>Peminjaman ID</th>
                    <th>Tanggal Dikembalikan</th>
                    <th>Kondisi</th>
                    <th>Denda</th>
                    <th>Catatan</th>

                </tr>

            </thead>

            <tbody>

                @forelse($pengembalians as $pengembalian)

                    <tr>

                        <td>
                            {{ $pengembalian->id }}
                        </td>

                        <td>
                            {{ $pengembalian->peminjaman_id }}
                        </td>

                        <td>
                            {{ $pengembalian->tanggal_dikembalikan }}
                        </td>

                        <td>

                            @if($pengembalian->kondisi == 'baik')

                                <span class="badge bg-success">
                                    Baik
                                </span>

                            @elseif($pengembalian->kondisi == 'rusak')

                                <span class="badge bg-danger">
                                    Rusak
                                </span>

                            @else

                                <span class="badge bg-warning text-dark">
                                    {{ $pengembalian->kondisi }}
                                </span>

                            @endif

                        </td>

                        <td>
                            Rp {{ number_format($pengembalian->denda, 0, ',', '.') }}
                        </td>

                        <td>
                            {{ $pengembalian->catatan }}
                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            Data pengembalian belum ada

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection