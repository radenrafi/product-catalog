@extends('layouts.canvas')

@section('content')
        {{--  begin of carousel  --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            {{--  begin carousel desktop  --}}
            <div class="carousel-inner carousel-desktop">
                <div class="carousel-item active">
                  <img src="{{asset('images/welcome/crsl-1.jpg')}}" class="d-block w-100" height="500" style="object-fit: cover; object-position: center" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/welcome/crsl-2.jpg')}}" class="d-block w-100" height="500" style="object-fit: cover; object-position: center"  alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/welcome/crsl-3.jpg')}}" class="d-block w-100" height="500" style="object-fit: cover; object-position: center"  alt="...">
                </div>
            </div>
            {{--  ending carousel desktop  --}}

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
        <div class="container mt-5">
          <div class="text-center product-home">
            <p>Produk kami</p>
            <h2>Koleksi Produk</h2>
          </div>
          <div class="d-flex justify-content-center text-center category">
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
                                        Beli
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
