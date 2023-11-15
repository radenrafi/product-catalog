@extends('layouts.canvas')

@section('content')
    {{--  begin of carousel  --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        {{--  begin carousel desktop  --}}
        <div class="carousel-inner carousel-desktop">
            <div class="carousel-item active">
                <img src="{{ asset('images/welcome/crsl-1.jpg') }}" class="d-block w-100" height="500"
                    style="object-fit: cover; object-position: center" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/welcome/crsl-2.jpg') }}" class="d-block w-100" height="500"
                    style="object-fit: cover; object-position: center" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/welcome/crsl-3.jpg') }}" class="d-block w-100" height="500"
                    style="object-fit: cover; object-position: center" alt="...">
            </div>
        </div>
        {{--  ending carousel desktop  --}}
    {{--  begin of carousel  --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        {{--  begin carousel desktop  --}}
        <div class="carousel-inner carousel-desktop">
            <div class="carousel-item active">
                <img src="{{ asset('images/welcome/crsl-1.jpg') }}" class="d-block w-100" height="500"
                    style="object-fit: cover; object-position: center" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/welcome/crsl-2.jpg') }}" class="d-block w-100" height="500"
                    style="object-fit: cover; object-position: center" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/welcome/crsl-3.jpg') }}" class="d-block w-100" height="500"
                    style="object-fit: cover; object-position: center" alt="...">
            </div>
        </div>
        {{--  ending carousel desktop  --}}

        <div class="btn-control">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{--  ending of caraousel  --}}

    {{-- begin of kategori  --}}
    {{-- <div class="d-flex justify-content-start text-center category">
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
    </div> --}}
    {{--  ending of kategori  --}}

    <div class="title-category">
        <h2>Lihat Koleksi Terbaik Kami</h2>
        <p>pilih produk sesuai kebutuhanmu.</p>
    </div>

    {{--  Begin of product  --}}
    <div class="container product">
        <section>
            <span>Akrilik</span>
            <div class="row mb-3">
                @foreach ($produkAkriliks as $produk)
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
                @endforeach
            </div>
            <span>Bucket</span>
            <div class="row mb-3 product-category">
                @foreach ($produkBukets as $produk)
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
                @endforeach
            </div>
            <span>Simple Frame</span>
            <div class="row mb-3 product-category">
                @foreach ($produkSimpleFrames as $produk)
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
                @endforeach
            </div>
            <span>3D</span>
            <div class="row mb-3 product-category">
                @foreach ($produk3DFrames as $produk)
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
                                    <a href="{{ url('/produk/' . $produk['id']) }}"
                                        class="btn d-flex justify-content-center align-items-center btn-product">
                                    <a href="{{ url('/produk/' . $produk['id']) }}"
                                        class="btn d-flex justify-content-center align-items-center btn-product">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    {{--  Ending of card  --}}
@endsection
