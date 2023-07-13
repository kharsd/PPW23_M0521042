@extends('layouts.user')

@section('title', 'Moraa Florist')
 
@section('content') 
    <div class="row">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($data as $key=>$row)
            <div class="col">
                <div class="card">
                    <img src="/images/{{ $row->image }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $row->nama }}</h5>
                    <p class="card-text">{{ formatRupiah($row->harga) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection