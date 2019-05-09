@extends('layouts.headerfooter') 
@section('content')

<div class="page-top-banner">
	<div class="banner-heading">
		<p> Contact us </p>	
	</div>
</div>
<!-- Cotainer strat -->
<div class="container">
	<!-- row srtrt -->
	<div class="row">
		<!-- start of columns  -->
		<div class="col-md-4 pt-5 pb-5">
			<h1> Information </h1>
			<div class="box-border p-3">
				<div class="row text-dark">
					<div class="col-sm-2">
						<i class="fa fa-phone fa-2x"></i>
					</div>	
					<div class="col-sm-10">
						<h4>Phone</h4>
						<p> +977-9841234466 </p>
					</div>	
				</div>
				<hr>
				<div class="row text-dark">
					<div class="col-sm-2">
						<i class="fab fa-facebook fa-2x"></i>
					</div>
					<div class="col-sm-10">
						<h4>Address</h4>
						<p> Mahendra Bhrikuti Somewhere</p>
					</div>
				</div>
				<hr>
				<div class="row text-dark">
					<div class="col-sm-2">
						<i class="fa fa-envelope fa-2x"></i>
					</div>

					<div class="col-sm-10">
						<h4>Email</h4>
						<p>mb@mb.com, mb@abc.com</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8  pt-5 pb-5">
		<h1>Mail Us</h1>
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
				<div class="form-group col-md-6">
					<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<textarea class="form-control" type="textarea" id="message" name="content" placeholder="Message" maxlength="9999" rows="8"></textarea>                   
			</div>
			<button type="submit" class="btn btn-success">Sign in</button>
		</form>
	</div>
	<!-- end of columns  -->
</div>
<!-- row end -->
</div>
<!-- container end -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d452475.71723632596!2d83.76987053281249!3d27.625552900000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39944f71b9a1b05f%3A0x3583dacae0c52ac!2sMahendra+Highway+Mid+Point!5e0!3m2!1sen!2snp!4v1547622456293" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	
@endsection
