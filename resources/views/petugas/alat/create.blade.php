@extends('layouts.petugas')

@section('content')

<div class="container mt-4">

    <h2>Tambah Data Alat</h2>

    <form action="{{ route('petugas.alat.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Kategori ID</label>
            <input type="number"
                   name="kategori_id"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Kode Alat</label>
            <input type="text"
                   name="kode_alat"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama Alat</label>
            <input type="text"
                   name="nama_alat"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number"
                   name="stok"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Kondisi</label>
            <input type="text"
                   name="kondisi"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi"
                      class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file"
                   name="gambar"
                   class="form-control">
        </div>

        <button type="submit"
                class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

@endsection