@extends('layouts.petugas')

@section('content')

<!-- WELCOME -->
<div class="welcome-box">

    <h2>Dashboard Petugas</h2>

    <p class="text-muted">
        Selamat datang, Petugas 👋
    </p>

</div>

<!-- CARD -->
<div class="row g-4">

    <!-- TOTAL PEMINJAMAN -->

    <div class="col-md-4">

        <div class="card bg-primary card-box shadow">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <h5>Total Peminjaman</h5>
                        <h1>15</h1>
                    </div>

                    <div class="card-icon">
                        <i class="bi bi-arrow-left-right"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- TOTAL PENGEMBALIAN -->

    <div class="col-md-4">

        <div class="card bg-success card-box shadow">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <h5>Total Pengembalian</h5>
                        <h1>12</h1>
                    </div>

                    <div class="card-icon">
                        <i class="bi bi-box-arrow-in-left"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- TOTAL ALAT -->

    <div class="col-md-4">

        <div class="card bg-warning card-box shadow">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <h5>Total Alat</h5>
                        <h1>25</h1>
                    </div>

                    <div class="card-icon">
                        <i class="bi bi-box"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="card mt-5 shadow border-0">

    <div class="card-header bg-primary text-white">
        Data Peminjaman Terbaru
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-light">

                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Nama Alat</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>Andi</td>
                    <td>Laptop Asus</td>
                    <td>2026-05-23</td>
                    <td>
                        <span class="badge bg-success">
                            Dipinjam
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>Proyektor Epson</td>
                    <td>2026-05-23</td>
                    <td>
                        <span class="badge bg-warning text-dark">
                            Menunggu
                        </span>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

<style>

    .welcome-box{
        background:white;
        padding:25px;
        border-radius:15px;
        margin-bottom:25px;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    .card-box{
        border:none;
        border-radius:15px;
        color:white;
        transition:0.3s;
    }

    .card-box:hover{
        transform:translateY(-5px);
    }

    .card-icon{
        font-size:40px;
        opacity:0.8;
    }

</style>

@endsection