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

    <title>@yield('title', 'DLI Store')</title>
  </head>
  <body>
    {{--  begin navbar desktop  --}}
    <header class="d-none d-lg-block mb-3 header-desktop">
        <nav class="navbar navbar-expand-lg">
            <div class="container container-fluid">
                <a class="navbar-brand d-flex flex-row align-items-center" href="#">
                    <img src="{{asset('images/logo.png')}}" alt="" width="50" height="55" class="d-inline-block align-text-top">
                    DLISTORE
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
                        <input type="text" name="s" class="form-control">
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
            <img src="{{asset('images/logo.png')}}" alt=""  width="50" height="55" class="d-inline-block align-text-top mx-1">
            <h5>
                DLISTORE
            </h5>
        </div>
      </nav>
      {{--  ending logo mobile  --}}
    </header>
    {{--  ending navbar mobile  --}}

    <main class="container">
        @yield('content')
    </main>

    <footer>
        {{--  begin footer mobile  --}}
        <div class="d-lg-none footer-mobile">
          <div class="navbar fixed-bottom d-flex justify-content-center bg-light footer-mobile-box">
            <div class="row">
              <div class="col">
                <a href="/home" class="button button-nav-mobile">
                  <i class="bi bi-house-door d-flex justify-content-center"></i>
                  <h6>Home</h6>
                </a>
              </div>
              <div class="col">
                <a href="/product" class="button button-nav-mobile">
                  <i class="bi bi-box-seam d-flex justify-content-center"></i>
                  <h6>Product</h6>
                </a>
              </div>
              <div class="col">
                <a href="/about" class="button button-nav-mobile">
                  <i class="bi bi-info-circle d-flex justify-content-center"></i>
                  <h6>About</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        {{--  ending footer mobile  --}}

        {{--  begin footer desktop  --}}
        <div class="d-none d-lg-block footer-desktop">
            <div class="container">
                <div class="row row-cols-5 py-5 mt-5 border-top">
                    <div class="col footer-brand">
                        <a class="navbar-brand d-flex flex-row align-items-center" href="#">
                            <img src="{{asset('images/logo.png')}}" alt="" width="50" height="55" class="d-inline-block align-text-top">
                            DLISTORE
                        </a>
                        <p>Designed &copy;DLI2022</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, dicta?</p>
                    </div>

                    <div class="col">
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>
                    </div>
              </div>
        </div>
        {{--  ending footer desktop  --}}
    </footer>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
