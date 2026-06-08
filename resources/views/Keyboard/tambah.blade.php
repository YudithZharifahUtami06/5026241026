@extends('template')
@section('title','Tambah Keyboard')

@section('konten')

<a href="/keyboard" class="btn btn-secondary">
Kembali
</a>

<br><br>

<form action="/keyboard/store" method="post">

{{ csrf_field() }}

<label>Merk Keyboard</label>

<input type="text"
       name="merkkeyboard"
       class="form-control">

<br>

<label>Stock Keyboard</label>

<input type="number"
       name="stockkeyboard"
       class="form-control">

<br>

<label>Tersedia</label>

<input type="text"
       name="tersedia"
       class="form-control">

<br>

<input type="submit"
       value="Simpan Data"
       class="btn btn-primary">

</form>

@endsection
