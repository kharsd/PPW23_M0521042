@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1 class="text-uppercase text-center">data mahasiswa</h1>
            </div>
        </div>
    </div>
    
    <table class="text-white my-4 col-sm-6 mb-3 mb-sm-0">
        <tr>
            <th scope="row">NIM</th>
            <td>: {{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <th scope="row">Nama Lengkap</th>
            <td>: {{ $mahasiswa->nama }}</td>
        </tr>
        <tr>
            <th scope="row">Tanggal Lahir</th>
            <td>: {{ $mahasiswa->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td>: {{ $mahasiswa->email }}</td>
        </tr>
        <tr>
            <th scope="row">Alamat</th>
            <td>: {{ $mahasiswa->alamat }}</td>
        </tr>        
    </table>
    <div class="d-md-flex justify-content-md-end my-5">
        <a class="btn btn-light" href="{{ route('mahasiswa') }}"> Back</a>
    </div>
@endsection