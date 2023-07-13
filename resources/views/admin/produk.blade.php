@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
    <div class="d-md-flex justify-content-md-end p-3">
      <a href="{{ route('product.tambah') }}">
        <button type="submit" class="btn btn-light">+ &nbsp; Tambah Produk</button>
      </a>
    </div>
    <br>
    <table class="table">
      <thead class="text-white">
        <tr class="text-center text-uppercase fs-6 fw-bold">
          <th class="p-2">No</th>
          <th class="p-2">Foto</th>
          <th class="p-2">Nama</th>
          <th class="p-2">Harga</th>
          <th class="p-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @php ($no = 1)
        @foreach ($data as $key=>$row)
        <tr class="text-white p-3">
          <td class="text-center p-3"> {{ $no++ }}</td>
          <td><img src="/images/{{ $row->image }}" width="100px"></td>
          <td>{{ $row->nama }}</td>
          <td>{{ formatRupiah($row->harga) }}</td>
          <td class="p-3">
            <a href="{{ route('product.show', $row->id) }}">
              <button type="submit" class="btn btn-outline-light">Show</button>
            </a>
            <a href="{{ route('product.edit', $row->id) }}">
              <button type="submit" class="btn btn-outline-light">Edit</button>
            </a>
            <a href="{{ route('product.hapus', $row->id) }}" onclick="return confirm('Anda yakin akan menghapus data ini?')">
              <button type="submit" class="btn btn-outline-light">Hapus</button>
            </a>
          </td>
        </tr>
        
        @endforeach
      </tbody>
    </table>
@endsection