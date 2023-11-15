@extends('layouts.canvas')

@section('content')
    {{--  begin of kategori  --}}
    <div class="container d-flex justify-content-start align-items-center text-center category">
        <div class="button-group" role="group">
            <figure class="figure">
                <a href="{{ url('/produk') }}" class="d-flex flex-row">
                    <p class="img-fluid">Semua</p>
                </a>
            </figure>
            <figure class="figure">
                <a href="{{ url('/produk/kategori/akrilik') }}" class="d-flex flex-row">
                    <p class="img-fluid">Akrilik</p>
                </a>
            </figure>
            <figure class="figure">
                <a href="{{ url('/produk/kategori/buket') }}" class="d-flex flex-row">
                    <p class="img-fluid">Buket</p>
                </a>
            </figure>
            <figure class="figure">
                <a href="{{ url('/produk/kategori/simple-frame') }}" class="d-flex flex-row">
                    <p class="img-fluid">Simple Frame</p>
                </a>
            </figure>
            <figure class="figure">
                <a href="{{ url('/produk/kategori/3d-frame') }}" class="d-flex flex-row">
                    <p class="img-fluid">3D Frame</p>
                </a>
            </figure>
        </div>
    </div>
    {{--  ending of kategori  --}}

    {{--  Begin of product  --}}
    <div class="container product">
        <section>
            <div class="row">
                @forelse ($produks as $produk)
                    <div class="col-6 col-lg-4 mt-3">
                        <div class="card card-product">
                            @if ($produk->gambarProduks->isEmpty())
                                <img src="{{ asset('gambar/produk/kosong.jpg') }}" class="card-img-top" alt="...">
                            @else
                                <img src="{{ asset('gambar/produk/' . $produk->gambarProduks[0]) }}" class="card-img-top"
                                    alt="...">
                            @endif
                            <div class="row card-body">
                                <div class="col d-flex flex-column">
                                    <h5 class="card-title">{{ $produk->nama }}</h5>
                                    <p class="card-price">Rp. {{ $produk->harga }}</p>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <a href="{{ url('/produk/' . $produk->id) }}"
                                        class="btn d-flex justify-content-center align-items-center btn-product">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-center my-5">Produk Tidak Ditemukan</h3>
                @endforelse
            </div>
            <div class="navigation">
                <a class="btn" href="{{ $produks->previousPageUrl() }}">Prev</a>
                <a class="btn" href="{{ $produks->nextPageUrl() }}">Next</a>
            </div>
        </section>
    </div>
    {{--  Ending of card  --}}
@endsection
