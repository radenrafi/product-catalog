<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <link rel="stylesheet" href="{{asset('css/canvas.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail-product.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    {{-- <title>@yield('title', 'DLI Store')</title> --}}
    <title>{{ config('app.name', 'Ardians ART') }}</title>
  </head>
  <body>
    {{--  begin navbar desktop  --}}
    <header class="d-none d-lg-block mb-3 header-desktop">
        <nav class="navbar navbar-expand-lg">
            <div class="container container-fluid">
                <a class="navbar-logo navbar-brand d-flex flex-row align-items-center" href="#">
                    <img src="{{asset('images/logo_aa.png')}}" alt="" width="auto" height="55" class="d-inline-block align-text-top">
                    <span>Ardians ART</span>
                </a>
                <div class="nav-desktop-middle">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/produk') }}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <form action="{{ url('/hasil') }}" class="d-flex flex-row align-items-center" method="GET">
                        @csrf
                        <input type="text" name="s" placeholder="cari produk" class="form-control">
                        <i type="submit" class="bi bi-search mx-4"></i>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    {{--  ending navbar desktop  --}}


    {{--  begin navbar mobile  --}}
    <header class="d-lg-none" style="margin-bottom: 6rem">
      {{--  begin logo mobile  --}}
      <nav class="navbar fixed-top bg-light navbar-mobile">
        <div class="px-1 d-flex justify-content-start align-items-center">
            <img src="{{asset('images/logo_aa.png')}}" alt=""  width="50" height="55" class="d-inline-block align-text-top mx-1">
            <h5>
              Ardians ART
            </h5>
        </div>
      </nav>
      {{--  ending logo mobile  --}}
    </header>
    {{--  ending navbar mobile  --}}

    <main>
        @yield('content')
    </main>

    {{--  begin footer mobile  --}}
    <div class="d-lg-none footer-mobile">
      <div class="navbar fixed-bottom d-flex justify-content-center bg-light footer-mobile-box">
        <div class="row">
          <div class="col">
            <a href="/" class="button button-nav-mobile nav-link active" aria-current="page" >
              <i class="bi bi-house-door d-flex justify-content-center"></i>
              <h6>Home</h6>
            </a>
          </div>
          <div class="col">
            <a class="button button-nav-mobile nav-link" href="{{ url('/produk') }}">
              <i class="bi bi-box-seam d-flex justify-content-center"></i>
              <h6>Product</h6>
            </a>
          </div>
          <div class="col">
            <a href="/about" class="button button-nav-mobile nav-link">
              <i class="bi bi-info-circle d-flex justify-content-center"></i>
              <h6>About</h6>
            </a>
          </div>
        </div>
      </div>
    </div>
    {{--  ending footer mobile  --}}

    <div class="d-none d-lg-block footer-desktop">
      <div class="bg-light text-center text-white mt-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Instagram -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #ceae87;"
              href="https://instagram.com/ardians.art_?igshid=OGQ5ZDc2ODk2ZA"
              role="button"
              ><i class="bi bi-instagram"></i
            ></a>
            <!-- Tiktok -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #ceae87;"
              href="https://www.tiktok.com/@ardians.art_?_t=8hVAeo57gpk&_r=1"
              role="button"
              ><i class="bi bi-tiktok"></i
            ></a>
            <!-- Shopee -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #ceae87;"
              href="https://shope.ee/9p0BdBqAnA"
              role="button"
              ><i class="bi bi-shop"></i
            ></a>
            <!-- Wa -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #ceae87;"
              href="https://api.whatsapp.com/message/46XPLO2XULFMA1?autoload=1&app_absent=0"
              role="button"
              ><i class="bi bi-whatsapp"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3 bg-light" style="color: grey">
          © 2023 Copyright:
          <a style="color: grey; text-decoration: none;" href="https://baikstudio.my.id/">Baiq Studio</a>
        </div>
        <!-- Copyright -->
      </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
