@extends('layouts.canvas')

@section('content')
    {{--  Begin of content  --}}
    <div class="row detail-product">
        <h1 class="detail-title d-lg-none">
            {{ $produk->nama }}
        </h1>

        <div class="col-lg-4 col-11 gambar-product">
            @foreach ($gambars as $gambar)
                @if ($loop->iteration == 1)
                    <div class="row">
                        <img class="img-parent" src="{{ asset('gambar/produk/' . $gambar->gambar) }}" alt="">
                    </div>
                @elseif ($loop->iteration == 2)
                    @if ($loop->last)
                        <div class="row row-img my-3">
                            <div class="col d-flex justify-content-center">
                                <img class="img-cild" src="{{ asset('gambar/produk/' . $gambar->gambar) }}" alt="">
                            </div>
                        </div>
                    @else
                        <div class="row row-img my-3">
                            <div class="col d-flex justify-content-center">
                                <img class="img-cild" src="{{ asset('gambar/produk/' . $gambar->gambar) }}" alt="">
                            </div>
                    @endif
                @elseif ($loop->iteration == 3)
                    @if ($loop->last)
                        <div class="col d-flex justify-content-center">
                            <img class="img-cild" src="{{ asset('gambar/produk/' . $gambar->gambar) }}" alt="">
                        </div>
        </div>
    @else
        <div class="col d-flex justify-content-center">
            <img class="img-cild" src="{{ asset('gambar/produk/' . $gambar->gambar) }}" alt="">
        </div>
        @endif
    @else
        <div class="col d-flex justify-content-center">
            <img class="img-cild" src="{{ asset('gambar/produk/' . $gambar->gambar) }}" alt="">
        </div>
    </div>
    @endif
    @endforeach
    </div>

    <div class="col-lg col-11 mx-2 mt-3 desc-product">
        <h1 class="detail-title d-none d-lg-block">
            {{ $produk->nama }}
        </h1>
        <p class="detail-price">
            Rp. {{ $produk->harga }}
        </p>
        <p class="detail-sub-title d-flex flex-column">
            Info Produk
            <span class="line"></span>
        </p>
        <p class="detail-isi">
            {!! $produk->deskripsi !!}
        </p>
    </div>

    <div class="col-lg-2 col-11 mx-4 d-flex flex-column justify-content-center align-items-center pesan-product">
        <div class="jumlah d-flex flex-row align-items-center px-2 py-3 ">
            {{--  <input type="number" class="form-control mx-3">  --}}
            <p class="jumlah-title m-0 mx-2">Pesan di bawah</p>
        </div>
        <a href="{{ $produk->link_toko }}" class="btn btn-buy px-5">Beli di Toko Online</a>
        <a href="{{ $produk->link_wa }}" class="btn btn-buy px-5">Beli lewat WhatsApp</a>
    </div>
    </div>
    {{--  Ending of content  --}}
@endsection
