@extends('layouts.canvas')

@section('content')
    {{--  Begin of content  --}}
    <div class="container row detail-product">
        <h1 class="detail-title d-lg-none">
            {{ $produk->nama }}
        </h1>

    <div class="col-lg-4 col-11 mx-auto">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: auto; height: 350px; overflow: hidden;">
            <div class="carousel-indicators">
            @foreach ($gambars as $gambar)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" @if ($loop->first) class="active" aria-current="true" @endif aria-label="Slide {{ $loop->index }}"></button>
            @endforeach
            </div>

            <div class="carousel-inner" style="width: auto; height: 350px;">
            @foreach ($gambars as $gambar)
            <div class="carousel-item @if ($loop->first) active @endif" style="width: auto; height: 350px;">
                <img src="{{ asset('gambar/produk/' . $gambar->gambar) }}" class="d-block w-100" style="width: auto; height: 350px; object-fit: cover; object-position: center;" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal{{$loop->index}}">
            </div>
            @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Modal -->
        @foreach ($gambars as $gambar)
        <div class="modal fade" id="exampleModal{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$loop->index}}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('gambar/produk/' . $gambar->gambar) }}" class="d-block w-100" alt="...">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    <!-- ... -->


    <div class="col-lg col-11 mx-1 mt-3 desc-product">
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

    <div class="col-lg-2 col-11 mx-4 pesan-product">
        <div class="jumlah d-flex flex-column align-items-center px-2 py-3">
            {{--  <input type="number" class="form-control mx-3">  --}}
            <p class="jumlah-title m-0 mx-2">Pesan di bawah</p>
            <a href="{{ $produk->link_toko }}" class="btn btn-buy px-5 my-2">Beli di Toko Online</a>
            <a href="{{ $produk->link_wa }}" class="btn btn-buy px-5">Beli di WhatsApp</a>
        </div>
    </div>
    </div>
    {{--  Ending of content  --}}
@endsection
