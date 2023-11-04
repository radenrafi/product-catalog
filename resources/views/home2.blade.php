@extends('layouts.canvas')

@section('title', 'DLI Store')

@section('content')
        {{--  begin of carousel  --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            {{--  begin carousel desktop  --}}
            <div class="carousel-inner d-none d-lg-block carousel-desktop">
                <div class="carousel-item active">
                  <img src="{{asset('images/welcome/carousel1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/welcome/carousel2.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/welcome/carousel3.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            {{--  ending carousel desktop  --}}

            {{--  Begin carousel mobile  --}}
            <div class="carousel-inner d-lg-none">
              <div class="carousel-item active">
                <img src="{{asset('images/welcome/carousel1.png')}}" class="d-block w-100" style="height: 12rem" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/welcome/carousel2.png')}}" class="d-block w-100" style="height: 12rem" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/welcome/carousel3.png')}}" class="d-block w-100" style="height: 12rem" alt="...">
              </div>
            </div>
            {{--  ending carousel mobile  --}}

            <div class="btn-control">
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
        {{--  ending of caraousel  --}}

        {{--  begin of kategori  --}}
        <div class="d-flex justify-content-start text-center category">
            <div class="button-group" role="group">
              <figure class="figure">
                <a href="{{ url('/') }}" class="d-flex flex-row">
                    <p class="img-fluid">Semua</p>
                </a>
              </figure>
              <figure class="figure">
                <a href="{{ url('/produk/kategori/learning-media') }}" class="d-flex flex-row">
                    <p class="img-fluid">Learning Media</p>
                </a>
              </figure>
              <figure class="figure">
                <a href="{{ url('/produk/kategori/digital-book') }}" class="d-flex flex-row">
                    <p class="img-fluid">Digital Book</p>
                </a>
              </figure>
              <figure class="figure">
                <a href="{{ url('/produk/kategori/metaverse') }}" class="d-flex flex-row">
                    <p class="img-fluid">Metaverse</p>
                </a>
              </figure>
            </div>
        </div>
        {{--  ending of kategori  --}}

        {{--  Begin of product  --}}
        <div class="container product">
            <section>
                <div class="row">
                    @foreach ($produks as $produk)
                    <div class="col-6 col-lg-4 mt-3">
                        <div class="card card-product">
                            <img src="{{asset('gambar/produk/'.$produk['gambar'])}}" class="card-img-top" alt="...">
                            <div class="row card-body">
                                <div class="col d-flex flex-column">
                                    <h5 class="card-title">{{$produk['nama']}}</h5>
                                    <p class="card-price">Rp. {{$produk['harga']}}</p>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <a href="{{ url('/produk/'.$produk['id']) }}" class="btn d-flex justify-content-center align-items-center btn-product">
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
