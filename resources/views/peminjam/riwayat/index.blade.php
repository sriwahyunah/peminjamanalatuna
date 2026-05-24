@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header bg-success">

        <h3 class="card-title text-white">
            Riwayat Peminjaman
        </h3>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">

            <thead class="bg-success text-white">

                <tr>
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                </tr>

            </thead>

            <tbody>

                @forelse($riwayat as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->alat->nama_alat ?? '-' }}
                    </td>

                    <td>
                        {{ $item->tanggal_pinjam }}
                    </td>

                    <td>

                        @if($item->status == 'dipinjam')

                            <span class="badge badge-warning">
                                Dipinjam
                            </span>

                        @elseif($item->status == 'dikembalikan')

                            <span class="badge badge-success">
                                Dikembalikan
                            </span>

                        @else

                            <span class="badge badge-secondary">
                                {{ $item->status }}
                            </span>

                        @endif

                    </td>

                    <td>
                        {{ $item->keterangan }}
                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center">
                        Belum ada riwayat peminjaman
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection