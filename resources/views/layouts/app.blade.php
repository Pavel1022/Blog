<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand CSS Blog by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.css"') }}">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @auth
                @if(Request::url() === url('/'))
                <li class="nav-item active">
                  <a class="nav-link" href="{{ '/' }}">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ '/' }}">Home
                  </a>
                </li> 
                @endif
              <li class="nav-item">
                <a class="nav-link" href="#">New Post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">All Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post-details.html">Profile</a>
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}</a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
                @endauth
                @guest
                @if(Request::url() === url('/login'))
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                  <span class="sr-only">(current)</span>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                  </li>
                @endif
                @if(Request::url() === url('/register'))
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                  <span class="sr-only">(current)</span>
                </li>
                @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                  </li>
                  @endif
                @endguest
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    
    @yield('content')
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co.
                    
                 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{ url('js/owl.js') }}"></script>
    <script src="{{ url('js/slick.js') }}"></script>
    <script src="{{ url('js/isotope.js') }}"></script>
    <script src="{{ url('js/accordions.js') }}"></script>
    

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>