@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">
                Tambah Data Alat
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
            <form action="{{ route('alat.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                {{-- KATEGORI --}}
                <div class="mb-3">

                    <label class="form-label">
                        Kategori
                    </label>

                    <select name="kategori_id"
                        class="form-control"
                        required>

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        @foreach($kategori as $item)

                            <option value="{{ $item->id }}">

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
                        placeholder="Masukkan kode alat"
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
                        placeholder="Masukkan nama alat"
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
                        placeholder="Masukkan stok"
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

                        <option value="">
                            -- Pilih Kondisi --
                        </option>

                        <option value="baik">
                            Baik
                        </option>

                        <option value="rusak">
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
                        rows="4"
                        placeholder="Masukkan deskripsi alat"></textarea>

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

                {{-- BUTTON --}}
                <div class="d-flex gap-2">

                    <button type="submit"
                        class="btn btn-success">

                        Simpan
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