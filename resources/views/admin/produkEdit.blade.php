@extends('layouts.admin')

@section('title', ' Edit Produk')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="{{ route('product.tambah.update', $product->id) }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3"> 
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="{{ isset($product) ? $product->nama : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" placeholder="harga" name="harga" value="{{ isset($product) ? $product->harga : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label><br>
            <img src="/images/{{ $product->image }}" width="150px">
            <input type="file" class="form-control" placeholder="Image" name="image">
        </div>
        <div class="d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-light my-3">Simpan</button>
        </div>
        </form>
    </div>
@endsection