@extends('layouts.admin')

@section('content')

<h2>Edit Pengembalian</h2>

<form action="{{ route('admin.pengembalian.update', $pengembalian->id) }}" method="POST">
@csrf
@method('PUT')

Peminjaman ID<br>
<input type="text" name="peminjaman_id" value="{{ $pengembalian->peminjaman_id }}"><br><br>

Tanggal Dikembalikan<br>
<input type="date" name="tanggal_dikembalikan" value="{{ $pengembalian->tanggal_dikembalikan }}"><br><br>

Kondisi<br>
<input type="text" name="kondisi" value="{{ $pengembalian->kondisi }}"><br><br>

Denda<br>
<input type="number" name="denda" value="{{ $pengembalian->denda }}"><br><br>

Catatan<br>
<textarea name="catatan">{{ $pengembalian->catatan }}</textarea><br><br>

<button type="submit">Update</button>

</form>

@endsection