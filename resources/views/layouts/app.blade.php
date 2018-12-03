<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apotik Sehat Farma</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="{{asset('polished/polished.min.css')}}"> -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Apotik Sehat Farma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Produk
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/transaksi_user')}}">Transaksi</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/login')}}">Login</a>
            </li>
            @if (Route::has('login'))
                    @auth
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li> -->
                    <!-- <form action="{{ route('logout') }}" method="POST"> -->
                    <li class="nav-item active">
                        @csrf
                        <a class="nav-link" href="{{ url('/home') }}">Sign Out</a>
                    <!-- </li> -->
                  </form>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <li>
                        @if (Route::has('register'))
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                        @endif
                    @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
       @yield('content')
    </div>
    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <footer class="py-5 bg-primary">
      <!-- <div class="container"> -->
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      <!-- </div> -->
      <!-- /.container -->
    </footer> -->


  </body>
</html>
