@extends('layouts.petugas')

@section('content')

<div class="container mt-4">

    <h2>Edit Data Alat</h2>

    <form action="{{ route('petugas.alat.update', $alat->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Kategori ID</label>
            <input type="number"
                   name="kategori_id"
                   value="{{ $alat->kategori_id }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Kode Alat</label>
            <input type="text"
                   name="kode_alat"
                   value="{{ $alat->kode_alat }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama Alat</label>
            <input type="text"
                   name="nama_alat"
                   value="{{ $alat->nama_alat }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number"
                   name="stok"
                   value="{{ $alat->stok }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Kondisi</label>
            <input type="text"
                   name="kondisi"
                   value="{{ $alat->kondisi }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi"
                      class="form-control">{{ $alat->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file"
                   name="gambar"
                   class="form-control">
        </div>

        <button type="submit"
                class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection