@extends('layouts.base')

@section('title', 'Pengiriman Barang')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Daftar Produk</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['nama'] }}</td>
                            <td>{{ $product['deskripsi'] }}</td>
                            <td>{{ $product['stok'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h1>Daftar Pemesanan</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Pelanggan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order['id'] }}</td>
                            <td>{{ $order['customer_id'] }}</td>
                            <td>{{ $order['status'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection