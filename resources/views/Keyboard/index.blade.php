@extends('template')
@section('title','Data Keyboard')

@section('konten')

<a href="/keyboard/tambah" class="btn btn-primary">
Tambah Keyboard Baru
</a>

<br><br>

<form action="/keyboard/cari" method="GET">

<input type="text"
       name="cari"
       class="form-control"
       placeholder="Cari Merk Keyboard">

<br>

<input type="submit"
       value="CARI"
       class="btn btn-light">

</form>

<br>

<table class="table table-striped">

<tr>
    <th>Kode</th>
    <th>Merk</th>
    <th>Stock</th>
    <th>Tersedia</th>
    <th>Opsi</th>
</tr>

@foreach($keyboard as $k)

<tr>
    <td>{{ $k->kodekeyboard }}</td>
    <td>{{ $k->merkkeyboard }}</td>
    <td>{{ $k->stockkeyboard }}</td>
    <td>{{ $k->tersedia }}</td>

    <td>
        <a href="/keyboard/edit/{{ $k->kodekeyboard }}"
           class="btn btn-warning">
           Edit
        </a>

        <a href="/keyboard/hapus/{{ $k->kodekeyboard }}"
           class="btn btn-danger">
           Hapus
        </a>
    </td>
</tr>

@endforeach

</table>

{{$keyboard->links()}}

@endsection
