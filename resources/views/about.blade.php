@extends('layouts.canvas')

@section('title', 'About')

@section('content')

<div class="container about">
    <section class="about mt-5">
      <h1 class="mb-4">Selamat Datang di Ardians ART</h1>
      <p>
        Kami dengan bangga menciptakan karya unik dan indah yang menceritakan tentang keahlian dan dedikasi. Dengan warisan yang kaya akan kreativitas, kami menyuntikkan passion ke setiap karya, menghasilkan mahakarya yang memancarkan keindahan dan keaslian.
Perjalanan kami dimulai dari tahun 2020, dimana kami saat itu bingung ketika ingin memberikan sebuah hadiah kepada kerabat dan juga sanak saudara.
      </p>
      <p>
        Hal tersebut membuat kami terpacu untuk menghasilkan suatu produk berupa kreasi kerajinan tangan untuk hadiah ulang tahun, wisuda, pernikahan, atau acara besar lainnya. Saat ini kami menyebutnya Ardians Art
Ardians Art saat ini sudah berkembang pesat, yaitu sudah tersedia di beberapa marketplace seperti shopee dan tiktok. Selain itu, Ardians Art juga tersedia di toko offline. Produk Ardians Art memiliki banyak variasi yaitu terdapat 50 macam dan sudah pernah terjual ke 33 Provinsi di Indonesia.
      </p>
      <div class="container text-center mt-5">
        <h1 class="mb-1">Toko Kami</h1>
        <span class="text-center mb-5">Kunjungi katalog produk kami pada e-commerce</span>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mt-5">
          <div class="col">
            <a href="https://instagram.com/ardians.art_?igshid=OGQ5ZDc2ODk2ZA" class="d-flex flex-column align-items-center" style="margin-bottom: 5em; text-decoration: none; color: black;">
              <img style="height: 10em; width: 10em;" src="{{ asset('images/logo-about (1).png') }}">
              <span>@ardians.art_</span>
            </a>
          </div>
          <div class="col">
            <a href="https://www.tiktok.com/@ardians.art_?_t=8hVAeo57gpk&_r=1" class="d-flex flex-column align-items-center" style="margin-bottom: 5em; text-decoration: none; color: black;">
              <img style="height: 10em; width: 10em;" src="{{ asset('images/logo-about (2).png') }}">
              <span>@ardians.art_</span>
            </a>
          </div>
          <div class="col">
            <a href="https://shope.ee/9p0BdBqAnA" class="d-flex flex-column align-items-center" style="margin-bottom: 5em; text-decoration: none; color: black;">
              <img style="height: 10em; width: 10em;" src="{{ asset('images/logo-about (3).webp') }}">
              <span>ardians.art_</span>
            </a>
          </div>
          <div class="col">
            <a href="https://api.whatsapp.com/message/46XPLO2XULFMA1?autoload=1&app_absent=0" class="d-flex flex-column align-items-center" style="margin-bottom: 5em; text-decoration: none; color: black;">
              <img style="height: 10em; width: 10em;" src="{{ asset('images/logo-about (4).webp') }}">
              <span>085707347576</span>
            </a>
          </div>
        </div>

        <iframe style="height: 450px; width: 100%; margin-bottom: 5em;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.3007418626376!2d112.6783062!3d-7.8635631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62b91fd6a4047%3A0xf2cf9b7a8793e255!2sardians.art!5e0!3m2!1sid!2sid!4v1700294211682!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </div>

@endsection
