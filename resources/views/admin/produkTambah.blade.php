@extends('layouts.admin')

@section('title', 'Tambah Produk')
 
@section('content') 
    <div class="container pt-5">
        <form method="POST" action="{{ route('product.tambah.simpan') }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama Produk" name="nama" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Harga (Rp)</label>
            <input type="address" class="form-control" placeholder="Harga Product" name="harga">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" placeholder="Foto" name="image">
        </div>
        <div class="d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-light my-3">Simpan</button>
        </div>
        </form>
    </div>
@endsection