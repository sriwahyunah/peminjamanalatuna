@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header bg-warning">
        Edit Kategori
    </div>

    <div class="card-body">

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text"
                       name="nama_kategori"
                       value="{{ $kategori->nama_kategori }}"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control">
                    {{ $kategori->deskripsi }}
                </textarea>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

@endsection