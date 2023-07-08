@extends('layouts.main')

@section('title', 'Tambah Data Mahasiswa')
 
@section('content') 
    <div class="container pt-5">
        <form method="POST" action="{{ route('mahasiswa.tambah.simpan') }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" placeholder="NIM" name="nim" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="address" class="form-control" placeholder="Alamat" name="alamat">
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