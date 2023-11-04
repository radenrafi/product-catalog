@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($produks as $produk)
        <div class="col">
            <div class="card">
            <img src="{{asset('gambar/produk/'.$produk['gambar'])}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$produk['nama']}}</h5>
                <p class="card-text">{{$produk['harga']}}</p>
            </div>
            </div>
        </div>
        @endforeach
        {{-- @foreach ($gambars as $gambar)
        <div class="col">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$produk->nama}}</h5>
                <p class="card-text">{{$produk->harga}}</p>
            </div>
            </div>
        </div>
        @endforeach --}}
    </div>
</div>
@endsection
