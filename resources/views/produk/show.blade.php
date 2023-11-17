@extends('layouts.app')

@section('title', $produk->nama)
@section('produk', 'active')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $produk->nama }}</h1>
                <p>Kategori : {{ $produk->kategori }}</p>

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($produk->gambarProduks as $gambar)
                            @if ($loop->iteration == 1)
                                <div class="carousel-item active">
                                    <img src="{{ asset("gambar/produk/$gambar->gambar") }}" class="d-block w-100"
                                        alt="{{ $gambar->gambar }}">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="{{ asset("gambar/produk/$gambar->gambar") }}" class="d-block w-100"
                                        alt="{{ $gambar->gambar }}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- <img src="{{ asset("gambar/produk/$gambar->gambar") }}" alt=""> --}}
                <br>
                <div>
                    {!! $produk->deskripsi !!}
                </div>
                <div>
                    <h5>Harga:</h5>
                    <p>Rp. {{ $produk->harga }}</p>
                </div>
                <div>
                    <h5>Link Toko:</h5>
                    <a href="{{ $produk->link_toko }}">{{ $produk->link_toko }}</a>
                </div>
                <div>
                    <h5>link WA:</h5>
                    <a href="{{ $produk->link_wa }}">{{ $produk->link_wa }}</a>
                </div>
                <p>
                    <a class="btn btn-primary mt-3" href="{{ url('/admin/produk/' . $produk->id . '/gambar/create') }}"
                        role="button">Tambah Gambar</a>
                </p>
                <table class="table table-striped">
                    <tbody>
                        @forelse ($produk->gambarProduks as $gambar)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $gambar->gambar }}</th>
                                <th>
                                    <form action="{{ url('/admin/produk/' . $produk->id . '/gambar/' . $gambar->id) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger justify-items-center">Hapus</button>
                                    </form>
                                </th>
                            </tr>
                        @empty
                            <div class="alert alert-success" role="alert">
                                Tidak ada data
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
