@extends('layouts.admin')

@section('content')

<h2>Tambah Pengembalian</h2>

<form action="{{ route('admin.pengembalian.store') }}" method="POST">
@csrf

Peminjaman ID<br>
<input type="text" name="peminjaman_id"><br><br>

Tanggal Dikembalikan<br>
<input type="date" name="tanggal_dikembalikan"><br><br>

Kondisi<br>
<input type="text" name="kondisi"><br><br>

Denda<br>
<input type="number" name="denda"><br><br>

Catatan<br>
<textarea name="catatan"></textarea><br><br>

<button type="submit">Simpan</button>

</form>

@endsection