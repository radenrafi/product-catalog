@extends('layouts.canvas')

@section('title', 'Produk')

@section('content')
        {{--  begin of kategori  --}}
        <div class="d-flex justify-content-start align-items-center text-center category">
            <div class="button-group" role="group">
              <figure class="figure">
                <a href="{{ url('/produk') }}" class="d-flex flex-row">
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
                    @forelse ($produks as $produk)
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
                    @empty
                    <h3 class="text-center my-5">Produk Tidak Ditemukan</h3>
                    @endforelse

                </div>
            </section>
        </div>
        {{--  Ending of card  --}}

@endsection
