<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre" rel="stylesheet"  type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        {{-- Custom Css and js --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    </head>
    <body>
            <header class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/irda.png" alt="SYF" style="width:90px;height:90px;"></a>
              MBSchool
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
              </button><!--navbar-toggle-button-->
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li><!--li-->
                  <li class="nav-item">
                    <a class="nav-link" href="/aboutus">About Us</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/gallery">Gallery</a>
                  </li><!--li-->
                  <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                  </li><!--li-->
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact us</a>
                  </li><!--li-->
                </ul><!--ul-->
              </div><!--collapse nav-->
            </nav><!--nav-->
          </header><!--header-->

          @include('inc.messages')
        @yield('content')
          <div class="footer pt-5 pb-5">
              <div class="container-fluid text-white">
                  <div class="row">
                    <div class="col-md-3 pb-4">
                    <img src="" alt="logo">MBSchool
                    <p> Our school has something really special. Do consider making your kids join our school. 
                      Becasue in MBSchool "What other choice do you have?" </p>
                      <div class="socialicons">
                          <ul class="list-unstyled list-inline social-icons">
                              <!-- List Item 1 -->
                              <!--<a> tag is put outside the <li> tag so as to make the entire icon redirect to the social media site it refers to -->
        
                              <li class="locater">
                                  <a href="https://www.facebook.com/SYFNepal" class="facebook" target="_blank">
                                      <i class="fab fa-facebook-f lh32"></i>
                                  </a>
                              </li>
                              <!-- List Item 2 -->
                              <li class="locater">
                                  <a href="#" class="twitter" target="_blank">
                                      <i class="fab fa-twitter lh32"></i>
                                  </a>
                              </li>
                              <!-- List Item 3 -->
                              <li class="locater">
                                  <a href="#" class="googleplus" target="_blank">
                                      <i class="fab fa-google-plus-g lh32"></i>
                                  </a>
                              </li>
                              <!-- List Item 4 -->
                              <li class="locater">
                                  <a href="https://www.youtube.com/channel/UCzApUcs3n5va8wrOZvyFAqQ" class="youtube" target="_blank">
                                      <i class="fab fa-youtube lh32"></i>
                                  </a>
                              </li>
                              <!-- List Item 5 -->
                              <li class="locater">
                                  <a href="#" class="linkedin" target="_blank">
                                      <i class="fab fa-linkedin-in lh32"></i>
                              </li>
                              </a>
                          </ul>
                      </div>
                      
                    </div>
                    <div class="col-md-3 pb-4">
                      <h3>News</h3>
                    </div>
                    <div class="col-md-3 pb-4">
                      <h3>Contact Us</h3>
                      <span style="font-size: 18px"><i class="fa fa-phone"></i> +977-98412736487</span>
                      <br>
                      <span style="font-size: 18px"><i class="fa fa-envelope"></i> rolpa Dolpa</span>
                      <br>
                      <span style="font-size: 18px"><i class="fa fa-phone"></i> +977-98412736487</span>
                    </div>
                    <div class="col-md-3 pb-4">
                      <h3> Quick Links </h3>
                      <ul>
                        <li>Home</li>
                        <li>Services</li>
                        <li>About Us</li>
                        <li>Home</li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
          </div>
        

<script src="{{ asset('css/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}" type="text/JavaScript"></script>
<script src="{{ asset('css/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}" type="text/JavaScript"></script>
<script src="{{ asset('js/script.js')}}" type="text/JavaScript"></script>
<script src="{{ asset('js/lightbox.min.js')}}" type="text/JavaScript"></script>


<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin.min.js')}}" type="text/JavaScript"></script>
<script src="js/sb-admin.min.js"></script>

<script type="text/JavaScript">
  $('.owl-two').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
      },
      600:{
        items:2,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
      },
      1000:{
        items:4,
        nav:false,
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
      }
    }
  })
</script>
<script type="text/JavaScript">
  $('.owl-one').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
      }
    }
  })
</script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
  </body>
</html>