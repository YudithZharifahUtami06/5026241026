@extends('template')
@section('title', 'Data Keranjang')
@section('konten')
    <a href="/keranjangbeli" class="btn btn-primary mb-4">Beli</a>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjang as $kr)
            <tr>
                <td>{{ $kr->ID }}</td>
                <td>{{ $kr->KodeBarang }}</td>
                <td>{{ $kr->Jumlah }}</td>
                <td>{{ number_format($kr->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($kr->Jumlah * $kr->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbatal/{{ $kr->ID }}" class="btn btn-sm btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $keranjang->links() }}
@endsection
