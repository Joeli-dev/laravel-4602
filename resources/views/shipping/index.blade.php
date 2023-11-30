{{-- 
    Nama : Mahardika Latief Fatianotoro
    NIM : 1205215121512
    Kelas : D3SI45-03
    
    --}}

@extends('layouts.base')

@section('title', 'Pengiriman Barang')

@section('content')
<x-table>
    @foreach ($shippings as $shipping)
        <tr>
            <td>{{ $shipping['id'] }}</td>
            <td>{{ $shipping['name'] }}</td>
            <td>{{ $shipping['address'] }}</td>
            <td>{{ $shipping['phone_number'] }}</td>
        </tr>
    @endforeach
</x-table>

@endsection






