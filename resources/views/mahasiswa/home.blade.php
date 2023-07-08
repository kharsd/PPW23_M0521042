@extends('layouts.main')

@section('title', 'Daftar Data Mahasiswa')

@section('content')
    <div class="d-md-flex justify-content-md-end p-3">
      <a href="{{ route('mahasiswa.tambah') }}" class="btn btn-outline-light" role="button" data-bs-toggle="button">+ &nbsp; Tambah Data Mahasiswa</a>
    </div>
    <br>
    <table class="table">
      <thead class="text-white">
        <tr class="text-center text-uppercase fs-6 fw-bold">
          <th class="p-2">No</th>
          <th class="p-2">Foto</th>
          <th class="p-2">NIM</th>
          <th class="p-2">Nama Mahasiswa</th>
          <th class="p-2">Tanggal lahir</th>
          <th class="p-2">Email</th>
          <th class="p-2">Alamat</th>
          <th class="p-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @php ($no = 1)
        @foreach ($data as $key=>$row)
        <tr class="text-white p-3">
          <td class="text-center p-3"> {{ $no++ }}</td>
          <td><img src="/images/{{ $row->image }}" width="100px"></td>
          <td>{{ $row->nim }}</td>
          <td>{{ $row->nama }}</td>
          <td>{{ $row->tanggal_lahir }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->alamat }}</td>
          <td>
            <a href="{{ route('mahasiswa.show', $row->id) }}}" class="btn btn-outline-light" role="button" data-bs-toggle="button">
              <span class="material-icons-outlined" onclick="closeSidebar()">visibility</span>
            </a>
            <a href="{{ route('mahasiswa.edit', $row->id) }}}" class="btn btn-outline-light" role="button" data-bs-toggle="button">
              <span class="material-icons-outlined" onclick="closeSidebar()">edit</span>
            </a>|
            <a href="{{ route('mahasiswa.hapus', $row->id) }}}" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-outline-light" role="button" data-bs-toggle="button">
              <span class="material-icons-outlined" onclick="closeSidebar()">delete</span>
            </a>
          </td>
        </tr>
        
        @endforeach
      </tbody>
    </table>
@endsection