@extends('layouts.main')

@section('title', 'Data Mahasiswa')
 
@section('content') 
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                <h3 class="card-title text-center mb-4">Mahasiswa Baru</h3>
                <p class="card-text ">Masukkan data mahasiswa baru.</p>
                <a href="{{ route('mahasiswa.tambah') }}" class="btn btn-dark">Form Mahasiswa</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                <h3 class="card-title text-center mb-4">Daftar Mahasiswa</h3>
                <p class="card-text">Lihat data mahasiswa.</p>
                <a href="{{ route('mahasiswa') }}" class="btn btn-dark">List Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
@endsection