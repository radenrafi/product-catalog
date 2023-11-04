@extends('layouts.canvas')

@section('title', 'About')

@section('content')

{{--  begin of jumbotron  --}}
<div class="row d-flex flex-md-row-reverse">
    <div class="col d-flex justify-content-center align-items-center">
        <img src="{{asset('images/welcome/Group 3.png')}}" class="" alt="">
    </div>
    <div class="col d-flex flex-column align-items-start justify-content-center">
        <h2>Lorem, ipsum dolor.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, illum.</p>
    </div>
</div>
{{--  ending of jumbotron  --}}

<section class="row about-product my-5">
    <div class="col d-flex justify-content-center align-items-center">
        <img src="{{asset('images/welcome/Group 1.png')}}" class="" alt="">
    </div>
    <div class="col d-flex flex-column align-items-start justify-content-center">
        <h2>Lorem, ipsum dolor.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, illum.</p>
        <button class="btn bg-warning btn-buy px-5">Pelajari Selengkapnya</button>
    </div>
</section>

<section class="row about-product flex-md-row-reverse my-5">
    <div class="col d-flex justify-content-center align-items-center">
        <img src="{{asset('images/welcome/Group 2.png')}}" class="" alt="">
    </div>
    <div class="col d-flex flex-column align-items-start justify-content-center">
        <h2>Lorem, ipsum dolor.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, illum.</p>
        <button class="btn bg-warning btn-buy px-5">Pelajari Selengkapnya</button>
    </div>
</section>

@endsection
