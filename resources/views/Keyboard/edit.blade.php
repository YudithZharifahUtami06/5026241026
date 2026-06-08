@extends('template')
@section('title','Edit Keyboard')

@section('konten')

<a href="/keyboard" class="btn btn-secondary">
Kembali
</a>

<br><br>

@foreach($keyboard as $k)

<form action="/keyboard/update" method="post">

{{ csrf_field() }}

<input type="hidden"
       name="id"
       value="{{ $k->kodekeyboard }}">

<label>Merk Keyboard</label>

<input type="text"
       name="merkkeyboard"
       class="form-control"
       value="{{ $k->merkkeyboard }}">

<br>

<label>Stock Keyboard</label>

<input type="number"
       name="stockkeyboard"
       class="form-control"
       value="{{ $k->stockkeyboard }}">

<br>

<label>Tersedia</label>

<input type="text"
       name="tersedia"
       class="form-control"
       value="{{ $k->tersedia }}">

<br>

<input type="submit"
       value="Update Data"
       class="btn btn-primary">

</form>

@endforeach

@endsection
