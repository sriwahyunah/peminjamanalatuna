@extends('layouts.peminjam')

@section('content')
<div class="container mt-4">

    <h3>Form Peminjaman</h3>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('peminjam.peminjaman.store') }}" method="POST">
                @csrf

                <input type="hidden" name="alat_id" value="{{ $alat->id }}">

                <div class="mb-3">
                    <label>Nama Alat</label>
                    <input type="text" class="form-control" value="{{ $alat->nama_alat }}" disabled>
                </div>

                <div class="mb-3">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" class="form-control" required>
                </div>

                <button class="btn btn-success">
                    Pinjam Sekarang
                </button>

            </form>

        </div>
    </div>

</div>
@endsection