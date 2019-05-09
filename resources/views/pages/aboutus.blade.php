@extends('layouts.headerfooter') 
@section('content')

<div class="page-top-banner">
	<div class="banner-heading">
		<p> About us </p>	
	</div>
</div>
<!-- Cotainer strat -->
<div class="container">
    <!-- row srtrt -->
    <div class="row pt-5">
        <div class="col-md-6">
                <img class="img-fluid" src="assets/images/school.jpeg" alt="school picture here">
        </div>
        <div class="col-md-6">
            <h1>Mahendra Bhrikuti School</h1>
            <p> We always sought for the best for your children. We provide quality education for your children which
                will help them to learn and grow.
        </div>
	</div>
	<!-- row srtrt -->
    <div class="row pt-5">
			<div class="col-md-6">
					<h1>Mahendra Bhrikuti School</h1>
					<p> We always sought for the best for your children. We provide quality education for your children which
						will help them to learn and grow.
				</div>
        <div class="col-md-6">
                <img class="img-fluid" src="assets/images/school.jpeg" alt="school picture here">
        </div>
        
	</div>


<!-- row end -->
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
        <div class="col-md-6 text-center">
          <a href="/contact"><button class="btn btn-primary text-right btn-lg p-3"> Contact Us </button></a>
        </div>
      </div>
    </div>
  </section>
<!-- container end -->

	
@endsection
