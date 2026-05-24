@extends('layouts.petugas')

@section('content')

<div class="container mt-4">

    <h1>Laporan Petugas</h1>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Bola Basket</td>
                <td>Mahasiswa</td>
                <td>24-05-2026</td>
                <td>Dipinjam</td>
            </tr>

        </tbody>

    </table>

</div>

@endsection