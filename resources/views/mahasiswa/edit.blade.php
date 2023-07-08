@extends('layouts.main')

@section('title', ' Edit Data Mahasiswa')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="{{ route('mahasiswa.tambah.update', $mahasiswa->id) }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" placeholder="NIM" name="nim" value="{{ isset($mahasiswa) ? $mahasiswa->nim : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Lengakp</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="{{ isset($mahasiswa) ? $mahasiswa->nama : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ isset($mahasiswa) ? $mahasiswa->tanggal_lahir : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ isset($mahasiswa) ? $mahasiswa->email : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{ isset($mahasiswa) ? $mahasiswa->alamat : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label><br>
            <img src="/images/{{ $mahasiswa->image }}" width="150px">
            <input type="file" class="form-control" placeholder="Image" name="image">
        <div class="d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-light my-3">Simpan</button>
        </div>
        </form>
    </div>
@endsection