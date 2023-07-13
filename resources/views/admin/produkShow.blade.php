@extends('layouts.admin')

@section('title', 'Detail Produk')

@section('content')    
    <table class="text-white my-4 col-sm-6 mb-3 mb-sm-0">
        <tr>
            <td rowspan="2"><img src="/images/{{ $product->image }}" width="200px"></td>
            <th scope="row">Nama</th>
            <td>: {{ $product->nama }}</td>
        </tr>
        <tr>
            <th scope="row">Harga</th>
            <td>: {{ formatRupiah($product->harga) }}</td>
        </tr>        
    </table>
    <div class="d-md-flex justify-content-md-end my-5">
        <a class="btn btn-light" href="{{ route('product') }}"> Back</a>
    </div>
@endsection