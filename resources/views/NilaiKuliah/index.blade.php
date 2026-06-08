@extends('template')

@section('title','Data Nilai Kuliah')

@section('konten')

<a href="/nilaikuliah/tambah" class="btn btn-primary">
    Tambah Data
</a>

<br><br>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>

    @foreach($nilaikuliah as $n)

    @php
        if($n->nilaiangka <= 40)
            $huruf = 'D';
        elseif($n->nilaiangka <= 60)
            $huruf = 'C';
        elseif($n->nilaiangka <= 80)
            $huruf = 'B';
        else
            $huruf = 'A';

        $bobot = $n->nilaiangka * $n->sks;
    @endphp

    <tr>
        <td>{{ $n->id }}</td>
        <td>{{ $n->nrp }}</td>
        <td>{{ $n->nilaiangka }}</td>
        <td>{{ $n->sks }}</td>
        <td>{{ $huruf }}</td>
        <td>{{ $bobot }}</td>
    </tr>

    @endforeach
</table>

{{ $nilaikuliah->links() }}

@endsection
