@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">
        Dashboard Admin
    </h2>

    {{-- CARD STATISTIK --}}
    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card bg-primary card-dashboard shadow">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Total Alat</h5>
                            <h2>{{ $totalAlat }}</h2>
                        </div>

                        <i class="fa fa-toolbox"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-success card-dashboard shadow">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Kategori</h5>
                            <h2>{{ $totalKategori }}</h2>
                        </div>

                        <i class="fa fa-layer-group"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-warning card-dashboard shadow">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Peminjaman</h5>
                            <h2>{{ $totalPeminjaman }}</h2>
                        </div>

                        <i class="fa fa-right-left"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-danger card-dashboard shadow">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>User</h5>
                            <h2>{{ $totalUser }}</h2>
                        </div>

                        <i class="fa fa-users"></i>
                    </div>

                </div>
            </div>
        </div>

    </div>


    {{-- TABEL ALAT --}}
    <div class="card shadow mb-4">

        <div class="card-header bg-primary text-white">
            Data Alat Terbaru
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Alat</th>
                        <th>Stok</th>
                        <th>Kondisi</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($alatTerbaru as $alat)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $alat->kode_alat }}</td>

                        <td>{{ $alat->nama_alat }}</td>

                        <td>{{ $alat->stok }}</td>

                        <td>{{ $alat->kondisi }}</td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>


    {{-- TABEL PEMINJAMAN --}}
    <div class="card shadow">

        <div class="card-header bg-success text-white">
            Peminjaman Terbaru
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Alat</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($peminjamanTerbaru as $pinjam)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $pinjam->user->name }}</td>

                        <td>{{ $pinjam->alat->nama_alat }}</td>

                        <td>{{ $pinjam->tanggal_pinjam }}</td>

                        <td>

                            <span class="badge bg-primary">
                                {{ $pinjam->status }}
                            </span>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection