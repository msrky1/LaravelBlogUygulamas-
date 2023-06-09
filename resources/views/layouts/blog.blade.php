<!doctype html>
<html lang="tr">

<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel Blog Uygulaması">

    <meta name="author" content="Laravel Blog Uygulaması">

    <title>Laravel Blog Uygulaması</title>


    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/bootstrap/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/magnific-popup/dist/magnific-popup.css">
 
    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('Assets') }}/plugins/slick-carousel/slick/slick-theme.css">

 
    <link rel="stylesheet" href="{{ asset('Assets') }}/css/style.css">


    @livewireStyles
</head>

<body>

    <header class="navigation">
        <div class="header-top ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-md-4">
                        <div class="header-top-socials text-center text-lg-left text-md-left">
                            <a href="/" target="_blank"><i class="ti-facebook"></i></a>
                            <a href="/" target="_blank"><i class="ti-twitter"></i></a>
                            <a href="/" target="_blank"><i class="ti-github"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg  py-4" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/blog-list">
                    Laravel Blog <span>Uygulaması</span>
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                @if (Auth::check())
                <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                    <ul class="navbar-nav ml-auto">
              
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Hoş Geldin! {{ Auth::user()->name }} <span class="sr-only">(current)</span></a>
                       
                  </li>
                   
                  
                        <li class="nav-item active">
                            <a class="nav-link" href="/admin-paneli">Admin <span class="sr-only">(current)</span></a>

                        </li>

                    </ul>



                    <a class="btn btn-solid-border btn-round-full" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıkış</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>


                </div>
                @endif
            </div>
        </nav>
    </header>


    {{ $slot }}


    <footer class="footer section">
        <div class="container">


            <div class="footer-btm pt-4">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="copyright">
                            &copy; Laravel Blog <span class="text-color">Uygulaması</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
                        <ul class="list-inline footer-socials">
                            <li class="list-inline-item"><a href="/"><i class="ti-facebook mr-2"></i>Facebook</a>
                            </li>
                            <li class="list-inline-item"><a href="/"><i class="ti-twitter mr-2"></i>Twitter</a>
                            </li>
                            <li class="list-inline-item"><a href="/"><i class="ti-linkedin mr-2 "></i>Linkedin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 

    @livewireScripts
 
    <script src="{{ asset('Assets') }}/plugins/jquery/jquery.js"></script>
    <script src="{{ asset('Assets') }}/js/contact.js"></script>
  
    
    <script src="{{ asset('Assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
  
    <script src="{{ asset('Assets') }}/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

    <script src="{{ asset('Assets') }}/plugins/slick-carousel/slick/slick.min.js"></script>
  
    <script src="{{ asset('Assets') }}/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="{{ asset('Assets') }}/plugins/counterup/jquery.counterup.min.js"></script>

   

    <script src="{{ asset('Assets') }}/js/script.js"></script>

</body>

</html>
