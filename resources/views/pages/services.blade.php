@extends('layouts.headerfooter') 
@section('content')

<div class="page-top-banner">
	<div class="banner-heading">
		<p> Services  </p>	
	</div>
</div>
<div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="section__title text-center pb-5">
                    <h1>Why Choose Us?</h1>
                    <hr>
                    <h4>We provide most of the services that other schools probably dont have </h4>
                </div>
            </div>
        </div>
        <div class="row mt--40">
            <!-- Start Single Choose Option -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="container-fluid">
                    <!-- details start -->
                    <div class="row text-right">
                        <div class="col-md-10">
                            <h4 class="">English Language</h4>
                            <p>aincididunt ut labore et dolore magnaincidunt ut labore et dolore magnam aliquam qua</p>
                        </div>
                        <div class="col-md-2">
                                <i class="fas fa-3x fa-sort-alpha-up text-success"></i>
                                
                        </div>
                    </div>
                    <!-- details end -->
                    <!-- details start -->
                    <div class="row text-right">
                            <div class="col-md-10">
                                <h4 class="">Good Meals</h4>
                                <p>aincididunt ut labore et dolore magnaincidunt ut labore et dolore magnam aliquam qua</p>
                            </div>
                            <div class="col-md-2">
                                    <i class="fas fa-3x fa-utensils text-danger"></i>
                            </div>
                        </div>
                        <!-- details end -->
                        <!-- details start -->
                    <div class="row  text-right">
                            <div class="col-md-10">
                                <h4 class="text-success">Transportation</h4>
                                <p>aincididunt ut labore et dolore magnaincidunt ut labore et dolore magnam aliquam qua</p>
                            </div>
                            <div class="col-md-2">
                                    <i class="fas fa-3x fa-bus text-primary"></i>
                            </div>
                        </div>
                        <!-- details end -->
                </div>
            </div>
            <!-- End Single Choose Option -->
            <!-- Start Single Choose Option -->
            <div class="col-lg-4 col-md-6 col-sm-12 d-block d-lg-block d-md-none">
                        <img src="assets/images/mainpage.jpeg" alt="choose images" class="img-fluid">
            </div>
            <!-- End Single Choose Option -->
            <!-- Start Single Choose Option -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="dacre__choose__option text__align--left">
                    
                    {{-- start details  --}}
                    <div class="row no-gutters">
                            <div class="col-md-2">
                                    <i class="fas fa-3x fa-book-reader text-success"></i>
                            </div>
                            <div class="col-md-10 text-left">
                                <h4 class="">Fruitful Education</h4>
                                <p>aincididunt ut labore et dolore magnaincidunt ut labore et dolore magnam aliquam qua</p>
                            </div>
                        </div>
                     {{-- end details  --}}
                     {{-- start details  --}}
                    <div class="row">
                            <div class="col-md-2">
                                    <i class="fas fa-3x fa-chalkboard-teacher text-danger"></i>
                            </div>
                            <div class="col-md-10 text-left">
                                <h4 class="">Professional Teachers</h4>
                                <p>aincididunt ut labore et dolore magnaincidunt ut labore et dolore magnam aliquam qua</p>
                            </div>
                        </div>
                     {{-- end details  --}}
                     {{-- start details  --}}
                    <div class="row">
                            <div class="col-md-2">
                                    <i class="fas fa-3x fa-futbol text-muted"></i>
                            </div>
                            <div class="col-md-10 text-left">
                                <h4 class="">Games and Extra Activities</h4>
                                <p>aincididunt ut labore et dolore magnaincidunt ut labore et dolore magnam aliquam qua</p>
                            </div>
                        </div>
                     {{-- end details  --}}
                </div>
            </div>
            <!-- End Single Choose Option -->
        </div>
    </div>
    <section class="enroll-section mt-5" style="background-image: url(assets/images/grass.jpeg);
background-repeat: no-repeat;
background-size: cover;
background-position: center center;">
    <div class="container-fluid">
      <div class="row text-white" style="padding: 70px 0">
        <div class="col-md-6 text-center">
          <h1> Want to Enroll your child in our class ?</h1>
          <h5> You can enroll through our application form. Visit Contact us for more.</h5>
        </div>
        <div class="col-md-6">
          <button class="btn btn-primary text-right btn-lg"> Contact Us </button>
        </div>
      </div>
    </div>
  </section>
  <!-- Enroll Section -->
@endsection