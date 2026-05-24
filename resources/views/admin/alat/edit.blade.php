@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h4 class="mb-0">
                Edit Data Alat
            </h4>

        </div>

        <div class="card-body">

            {{-- ERROR VALIDASI --}}
            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            {{-- FORM --}}
            <form action="{{ route('alat.update', $alat->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- KATEGORI --}}
                <div class="mb-3">

                    <label class="form-label">
                        Kategori
                    </label>

                    <select name="kategori_id"
                        class="form-control"
                        required>

                        @foreach($kategori as $item)

                            <option value="{{ $item->id }}"
                                {{ $alat->kategori_id == $item->id ? 'selected' : '' }}>

                                {{ $item->nama_kategori }}

                            </option>

                        @endforeach

                    </select>

                </div>

                {{-- KODE ALAT --}}
                <div class="mb-3">

                    <label class="form-label">
                        Kode Alat
                    </label>

                    <input type="text"
                        name="kode_alat"
                        class="form-control"
                        value="{{ $alat->kode_alat }}"
                        required>

                </div>

                {{-- NAMA ALAT --}}
                <div class="mb-3">

                    <label class="form-label">
                        Nama Alat
                    </label>

                    <input type="text"
                        name="nama_alat"
                        class="form-control"
                        value="{{ $alat->nama_alat }}"
                        required>

                </div>

                {{-- STOK --}}
                <div class="mb-3">

                    <label class="form-label">
                        Stok
                    </label>

                    <input type="number"
                        name="stok"
                        class="form-control"
                        value="{{ $alat->stok }}"
                        required>

                </div>

                {{-- KONDISI --}}
                <div class="mb-3">

                    <label class="form-label">
                        Kondisi
                    </label>

                    <select name="kondisi"
                        class="form-control"
                        required>

                        <option value="baik"
                            {{ $alat->kondisi == 'baik' ? 'selected' : '' }}>
                            Baik
                        </option>

                        <option value="rusak"
                            {{ $alat->kondisi == 'rusak' ? 'selected' : '' }}>
                            Rusak
                        </option>

                    </select>

                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                        class="form-control"
                        rows="4">{{ $alat->deskripsi }}</textarea>

                </div>

                {{-- GAMBAR --}}
                <div class="mb-3">

                    <label class="form-label">
                        Gambar
                    </label>

                    <input type="file"
                        name="gambar"
                        class="form-control">

                </div>

                {{-- PREVIEW GAMBAR --}}
                @if($alat->gambar)

                    <div class="mb-3">

                        <img src="{{ asset('storage/'.$alat->gambar) }}"
                            width="120"
                            class="img-thumbnail">

                    </div>

                @endif

                {{-- BUTTON --}}
                <div class="d-flex gap-2">

                    <button type="submit"
                        class="btn btn-success">

                        Update
                    </button>

                    <a href="{{ route('alat.index') }}"
                        class="btn btn-secondary">

                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection