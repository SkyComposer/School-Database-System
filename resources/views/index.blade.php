<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/irda.png" alt="SYF" style="width:90px;height:90px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button><!--navbar-toggle-button-->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li><!--li-->
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Careers</a>
          </li><!--li-->
          <li class="nav-item">
            <a class="nav-link" href="works.php">Our Works</a>
          </li><!--li-->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Interior Designing</a>
                <a class="dropdown-item" href="blog-home-2.html">Construction</a>
                <a class="dropdown-item" href="blog-post.html">Renovation</a>
              </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact us</a>
          </li><!--li-->

        </ul><!--ul-->
      </div><!--collapse nav-->
    </nav><!--nav-->
  </header><!--header-->
        <div class="wrapper bg-light">
  <section class="xs-banner-sec owl-carousel banner-slider">
    <div class="banner-slider-item banner-item1" style="background-image: url(assets/images/banner-slider/success.jpg);">
      <div class="slider-table">
        <div class="slider-table-cell">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-10 offset-lg-1">
                <div class="banner-content text-center">
                  <div class="content wow bounceInDown"  data-wow-duration="1.5s" data-wow-delay="0s">
                    <h2 class="wow bounceInRight" data-wow-duration="4s" data-wow-delay="1s">Hungry For Success</h2>

                    <p  class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">Eat the hunger get driven to success
                    </p>
                  </div>
                  <div class="xs-btn-wraper wow bounceInRight" data-wow-duration="2.5s" data-wow-delay="2s">
                    <a href="#" class="xs-btn">
                      Works
                    </a>
                  </div><!-- .xs-btn-wraper END -->
                </div><!-- .xs-welcome-wraper END -->
              </div><!-- .column END -->
            </div><!-- .row end -->
          </div><!-- .container end -->
        </div><!-- .slider table cell end -->
      </div><!-- .slider table end -->
    </div><!-- .xs-welcome-content END -->
    <div class="banner-slider-item banner-item1" style="background-image: url(assets/images/banner-slider/nerd.jpeg);">
      <div class="slider-table">
        <div class="slider-table-cell">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-10 offset-lg-1">
                <div class="banner-content text-center">
                  <div class="content bounceInDown"  data-wow-duration="1.5s" data-wow-delay="0s">
                    <h2 class="bounceInRight" data-wow-duration="1s" data-wow-delay="2.5s"> Construction?</h2>

                    <p  class="bounceInLeft" data-wow-duration="2s" data-wow-delay="3s">We design the best blueprint so that the construction would be smooth and enounter no errors.
                    </p>
                  </div>
                  <div class="xs-btn-wraper bounceInRight" data-wow-duration="2.5s" data-wow-delay="3.5s">
                    <a href="#" class="xs-btn">
                      Works
                    </a>
                  </div>
                </div><!-- .xs-welcome-wraper END -->
              </div><!-- .column END -->
            </div><!-- .row end -->
          </div><!-- .container end -->
        </div><!-- .slider table cell end -->
      </div><!-- .slider table end -->
    </div><!-- .xs-welcome-content END -->
    <div class="banner-slider-item banner-item1" style="background-image: url(images/banner-slider/books.jpeg);">
      <div class="slider-table">
        <div class="slider-table-cell">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-10 offset-lg-1">
                <div class="banner-content text-center">
                 <div class="content wow bounceInDown"  data-wow-duration="1.5s" data-wow-delay="0s">
                  <h2 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">Renovation?</h2>

                  <p  class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1.5s">Want something renovated? We can renovate your destroyed things faser than ever.
                  </p>
                </div>
                <div class="xs-btn-wraper wow bounceInRight" data-wow-duration="2.5s" data-wow-delay="2s">
                  <a href="#" class="xs-btn">
                    Works
                  </a>
                </div>
              </div><!-- .xs-welcome-wraper END -->
            </div><!-- .column END -->
          </div><!-- .row end -->
        </div><!-- .container end -->
      </div><!-- .slider table cell end -->
    </div><!-- .slider table end -->
  </div><!-- .xs-welcome-content END -->
</section><!-- End banner section -->


<div class="car-box">
  <!-- container start  -->

  <!-- row start  -->
  <div class="row text-center">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 car-box1">
      <div class="row text-center">
        <div class="col-md-8">
          <div class="car-box-info">
            <h4 class="text-white text-center">
              Interior Designing
            </h4>
            <p class = "text-white text-justify pr-3">
              We have all the skilled lectures necessary for your development
            </p>
          </div>  
        </div>
        <div class="col-md-4">
          <div class="car-box-icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 car-box1">
      <div class="row">
        <div class="col-md-8">
          <div class="car-box-info">
            <h4 class="text-white text-center">
              Skilled Lectures
            </h4>
            <p class = "text-white text-justify pr-3">
              We have all the skilled lectures necessary for your development
            </p>
          </div>  
        </div>
        <div class="col-md-4">
          <div class="car-box-icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 car-box1">
      <div class="row">
        <div class="col-md-8">
          <div class="car-box-info">
            <h4 class="text-white text-center">
              Skilled Lectures
            </h4>
            <p class = "text-white text-center">
              We have all the skilled lectures necessary for your development
            </p>
          </div>  
        </div>
        <div class="col-md-4">
          <div class="car-box-icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- row end  -->

  <!-- container end  -->
</div>

<!-- WElcome start  -->
<div class="container">
  <div class="row mt-5 pb-2">
    <div class="col-lg-7 p-5">
      <h2><b>Mahendra Bhrikuti School</b></h2>
      <p>We are an INGO currently working to provide computers to the public schools in western  parts of Nepal. We believe that every 
      students need to know about computers in this advanced world.</p>
    </div>
    <div class="col-lg-5">
      <img class="img-fluid rounded" src="assets/images/mainpage.jpeg" alt="">
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- Welcome end  -->










<main class = "event">
  

  <div class="container">
    <div class="row pl-5 pt-3" style="background-color: #17a2b8; opacity: 0.9;">
    <h1 class="text-white text-center pb-3" style="margin:auto;"> Our Aim </h1>
  </div>
    <!-- row -->
    <div class="row mt-5">
      <div class="col-md-6 wow slideInLeft">

        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/images/vision.jpg" alt="">

      </div>
      <div class="col-md-6 wow slideInRight">
        <h3 class="text-dark"><b>Our Vision</b></h3>

        <p class="text-dark pt-3">This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. </p>

      </div>
    </div>
    <!-- /.row -->
    
    <hr>
    <!-- row -->
    <div class="row">
      <div class="col-md-6 wow slideInLeft">
        <h3 class="text-dark"><b>Our Mission</b></h3>

        <p class="text-dark pt-3">This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text. This is a sample text.</p>


      </div>
      <div class="col-md-6 wow slideInRight">

        <img class="img-fluid rounded mb-3 mb-md-0" src="assets/images/mission.jpeg" alt="">

      </div>

    </div>
    <!-- /.row -->
    
    <hr>
  </div>



</main>


<!-- Enter the parallex  -->
<div class="parallex"><h1 class="text-white text-center pt-5 mb-3">Testimonial</h1>
  <div class="owl-one owl-carousel owl-theme">
    <div class="item active text-center">
      <div class="container pt-1">
        <div class="row m-5 bg-dark p-5">

          <div class="col-md-12">
            <div class="img-fluid text-center"> <img src="http://bestjquery.com/tutorial/hover-effect/demo119/images/img-1.jpg" style=" display:block;margin-left: auto;margin-right: auto; width: 100px; border-radius: 100%; margin-top: -100px" alt="">
            </div>
          </div>
          <div class="col-md-12 text-center p-5 bg-dark">
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.<br>
              <span>Ravi Singh </span></p> 
            </div>

          </div>
        </div>

      </div>
      <div class="item"><h4>2</h4></div>
      <div class="item"><h4>3</h4></div>
    </div>
  </div>
  <!-- End the Parallex  -->

  <!-- Owl Carousel Begins Now  -->
  <div class="container pb-5">
    <div class="row pl-5 pt-3 mt-3 mb-3" style="background-color: #17a2b8; opacity: 0.9;">
    <h1 class="text-white text-center pb-3" style="margin:auto;"> Our Teachers </h1>
  </div>
    <div class="owl-two owl-carousel owl-theme">
      <div class="item">
        <div class="text-center">
          <div class="box13">
            <img src="http://bestjquery.com/tutorial/hover-effect/demo119/images/img-1.jpg">
            <div class="box-content">
              <h3 class="title">Ar. Aditya Parajuli</h3>
              <span class="post">Executive Director</span>
              <span class="post">9846135999</span>
              <span class="post">aditya@irda.com.np</span>
              <span class="post">parajuli.aditya11@gmail.com</span>
              <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="text-center">
          <div class="box13">
            <img src="http://bestjquery.com/tutorial/hover-effect/demo119/images/img-1.jpg">
            <div class="box-content">
              <h3 class="title">Ar. Aditya Parajuli</h3>
              <span class="post">Executive Director</span>
              <span class="post">9846135999</span>
              <span class="post">aditya@irda.com.np</span>
              <span class="post">parajuli.aditya11@gmail.com</span>
              <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="text-center">
          <div class="box13">
            <img src="http://bestjquery.com/tutorial/hover-effect/demo119/images/img-1.jpg">
            <div class="box-content">
              <h3 class="title">Ar. Aditya Parajuli</h3>
              <span class="post">Executive Director</span>
              <span class="post">9846135999</span>
              <span class="post">aditya@irda.com.np</span>
              <span class="post">parajuli.aditya11@gmail.com</span>
              <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="text-center">
          <div class="box13">
            <img src="http://bestjquery.com/tutorial/hover-effect/demo119/images/img-1.jpg">
            <div class="box-content">
              <h3 class="title">Ar. Aditya Parajuli</h3>
              <span class="post">Executive Director</span>
              <span class="post">9846135999</span>
              <span class="post">aditya@irda.com.np</span>
              <span class="post">parajuli.aditya11@gmail.com</span>
              <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- OWl Carousel Ends  -->

<!-- Container start  -->
<div class="container">
  <!-- row start  -->
  <div class="row">
    <!-- col strt  -->
    <div class="col-md-6 col-sm-12">
      <h1> Latest News </h1>
      <div class="wrapperclass">
        <div class="row">
          <div class="col-sm-5">
            <img src="assets/images/vision.jpg" class="img-fluid rounded">
          </div>
          <div class="col-sm-7">
            <h4><b> Hello World </b></h4>
            <p> 2019/07/01   </p>
            <p>THis is a samaple text for soenoe for stometihg ietih iij </p>
          </div>
        </div>
        <hr>
        <div class="row">
          
          <div class="col-sm-5 pt-2">
            <img src="assets/images/vision.jpg" class="img-fluid rounded">
          </div>
          <div class="col-sm-7">
            <h4><b> Hello World </b></h4>
            <p> date </p>
            <p>THis is a samaple text for soenoe for stometihg ietih iij </p>
          </div>
        </div>
        
      </div>
    </div>
    <!-- col end -->
    <!-- col strt  -->
    <div class="col-md-6 col-sm-12">
      <h1> Events </h1>
      <div class="wrapperclass">
        <div class="row">
          <div class="col-sm-4">
            <img src="assets/images/mission.jpeg" class="img-fluid rounded">
          </div>
          <div class="col-sm-8">
            <p><b> Hello World </b></p>
            <p>THis is a samaple text for soenoe for stometihg ietih iij THis is a samaple text for soenoe for stometihg ietih iij THis is a samaple text for soenoe for stometihg ietih iij THis is a samaple text for soenoe for stometihg ietih iij </p> 
            <p> 2018/23/29 | Melbourne</p>
          </div>
        </div>
        <hr>
        <div class="row">

          <div class="col-sm-4">
            <img src="assets/images/mission.jpeg" class="img-fluid rounded">
          </div>
          <div class="col-sm-8">
            <p><b> Hello World </b></p>
            <p>THis is a samapleasdasdasdassad text for soenoe for stometihg ietih iij THis is a samaple text for soenoe for stometihg ietih iij THis is a samaple text for soenoe for stometihg ietih iij THis is a samaple text for soenoe for stometihg ietih iij </p> 
            <p> 2018/23/29 | Melbourne</p>
          </div>
        </div>
        
      </div>
    </div>
    <!-- col end -->
    
  </div>
  <!-- row end -->
</div>
<!-- container end  -->





</div>
<!-- bg lihgt enf  -->




  
  <script src="{{ asset('css/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}" type="text/JavaScript"></script>
  <script src="{{ asset('css/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}" type="text/JavaScript"></script>
  <script src="{{ asset('js/script.js')}}" type="text/JavaScript"></script>

  


  <script type="text/JavaScript">
    $('.owl-two').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
        0:{
          items:1,
          nav:true
        },
        600:{
          items:2,
          nav:false
        },
        1000:{
          items:4,
          nav:true,
          loop:false
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
          loop:false
        }
      }
    })
  </script>
    </body>
</html>
