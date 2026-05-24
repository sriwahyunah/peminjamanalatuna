@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Peminjaman</h2>
            <p class="text-muted mb-0">
                Kelola data peminjaman alat
            </p>
        </div>

        <a href="#" class="btn btn-primary">
            + Tambah Peminjaman
        </a>
    </div>



    <!-- CARD -->
    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <!-- SEARCH -->
            <div class="row mb-3">

                <div class="col-md-4">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Cari peminjam..."
                    >
                </div>

            </div>



            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Alat</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Ahmad Fauzi</td>
                            <td>Laptop Asus</td>
                            <td>20 Mei 2026</td>
                            <td>25 Mei 2026</td>

                            <td>
                                <span class="badge bg-warning text-dark">
                                    Dipinjam
                                </span>
                            </td>

                            <td>

                                <a href="#"
                                   class="btn btn-sm btn-info text-white">
                                    Detail
                                </a>

                                <a href="#"
                                   class="btn btn-sm btn-warning text-white">
                                    Edit
                                </a>

                                <button class="btn btn-sm btn-danger">
                                    Hapus
                                </button>

                            </td>
                        </tr>



                        <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>Proyektor Epson</td>
                            <td>18 Mei 2026</td>
                            <td>21 Mei 2026</td>

                            <td>
                                <span class="badge bg-success">
                                    Kembali
                                </span>
                            </td>

                            <td>

                                <a href="#"
                                   class="btn btn-sm btn-info text-white">
                                    Detail
                                </a>

                                <a href="#"
                                   class="btn btn-sm btn-warning text-white">
                                    Edit
                                </a>

                                <button class="btn btn-sm btn-danger">
                                    Hapus
                                </button>

                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection