<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:17 GMT -->
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<!-- Bootstrap 5.3 link -->
	<link href="assets/js/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font-family -->
	<link href="assets/font/raleway/style.css" rel="stylesheet">
	<link href="assets/font/rubik/style.css" rel="stylesheet">
	<!-- Font-awesome link -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/css/all.min.css">
</head>
<body>
<!-- header start here -->
<header id="header">
    <!-- navbar start here -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- navbar-brand -->
            <a class="navbar-brand" href="home.html">
                <img src="{{'assets/images/logo/Logo.png'}}" class="w-100 main-logo" alt="Logo" title="Logo">
            </a>
            <!-- toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-center m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item drop-down">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">Pages</a>
                        <!-- Mega-menu -->
                        <div class="mega-menu fadeIn animated dropdown-menu">
                            <div class="row">
                                <div class="col-sm-3 border-right">
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{route('company-register')}}">Company Register</a></li>

                                            <li><a class="dropdown-item" href="{{route('company-listing')}}">Company Listing</a></li>
                                            <li><a class="dropdown-item" href="{{route('company-details')}}">Company Details</a></li>
                                            <li><a class="dropdown-item" href="{{route('post-job')}}">Post Job</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 border-right">
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{ route('job-listing') }}">Job Listing</a></li>
                                        <li><a class="dropdown-item" href="{{ route('job-details') }}">Job Details</a></li>
                                        <li><a class="dropdown-item" href="{{ route('candidate-listing') }}">Candidate Listing</a></li>
                                        <li><a class="dropdown-item" href="{{ route('candidate-details') }}">Candidate Details</a></li>

                                    </ul>
                                </div>
                                <div class="col-sm-3 border-right">
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{route ('pricing')}}">Pricing</a></li>
                                        <li><a class="dropdown-item" href="{{route ('register')}}">Register</a></li>
                                        <li><a class="dropdown-item" href="{{route ('forgot-password')}}">Forgot Password</a></li>
                                        <li><a class="dropdown-item" href="{{route ('user.login')}}">Login</a></li>
                                        <li><a class="dropdown-item" href="{{route ('faq')}}">Faq</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{route ('blog')}}">Blog </a></li>
                                        <li><a class="dropdown-item" href="{{route ('blog-detail')}}">Blog Detail </a></li>
                                        <li><a class="dropdown-item" href="{{route ('not-found')}}">Not Found</a></li>
                                        <li><a class="dropdown-item" href="{{route ('term-conditions')}}">Term Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- /. mega-menu -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <!-- navbar right button -->
                <ul class="navbar-nav navbar-right">
                    <ul class="navbar-nav navbar-right">
                        <li><a class="btn btn-danger" href="{{ route('employer-login') }}">Sign In</a></li>
                    </ul><!-- navbar right button end here -->
                    <li><a class="btn btn-danger" href="{{ route('employer-login') }}">Sign In</a></li>
                </ul><!-- navbar right button end here -->
            </div><!-- navbar links -->
        </div>
    </nav><!-- navbar -->
    </header>
    <!-- header end here -->

<section class="nearJob">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5 nearcol">
				<h1>Your dream Job</h1>
				<h2 class="text-red">Is Near to You</h2>
			</div>
			<div class="col-sm-7 d-none d-md-block">
				<div class="row">
					<div class="d-flex w-100">
						<img class="w-100" src="assets/images/contact-us/banner.png" alt="Banner" >
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /. nearJob -->

<section class="contacts">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 mb-4">
				<a href="javascript:void(0);">
					<div class="contInner">
						<i class="fa fa-map" aria-hidden="true"></i>
						<h4>Address</h4>
						<p>228-5 Main Street, Georgia.</p>
					</div>
				</a>
			</div>
            <div class="col-sm-4 mb-4">
				<a href="javascript:void(0);">
					<div class="contInner">
						<i class="fa fa-envelope-open" aria-hidden="true"></i>
						<h4>E-mail</h4>
						<p>contact.jp@gmail.com</p>
					</div>
				</a>
			</div>
			<div class="col-sm-4 mb-4">
				<a href="javascript:void(0);">
					<div class="contInner">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<h4>Phone Number</h4>
						<p class="f_rubik">+61589-35968</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /. contacts -->

<section class="contactForm">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<p>Have A Question ?</p>
				<h3>Get in <span class="text-red">Touch Now?</span></h3>

				<form class="form" method="post">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input type="text" name="username" id="username" class="form-control" placeholder="User Name" value="" required>
						</div>
						<div class="col-sm-6 form-group">
							<input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 form-group">
							<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" value="" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 form-group">
							<input type="text" name="write" class="form-control" placeholder="Write your Message" value="" required >
						</div>
					</div>
					<div class="row">
						<div class="mb-3">
							<div class="checkbox">
								<input type="checkbox" name="accept" class="form-check-input" id="accept" required>
								<label class="form-check-label" for="accept">Accept Term & privacy Policy</label>
							</div>

							<input type="submit" name="submit" id="sendMsg" class="btn btn-danger rounded-pill" value="Send Message" >
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /. contactForm -->

<div class="contactMap">
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d717777.9481649355!2d-85.3557869889404!3d33.3103748058766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s228-5%20Main%20Street%2C%20Georgia.!5e0!3m2!1sen!2sin!4v1612943904611!5m2!1sen!2sin" height="385" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!-- intro -->
<div class="intro">
	<div class="way-success"></div>
	<div class="caption">
		<div class="way-inner">
			<h3>WAY TO SUCCESS</h3>
		</div>
	</div>
	<span class="overlay">
		<svg viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve" PreserveAspectRatio="none">
		<path fill="#282b4a" d="M 250 180.5 c -53.85 0 -135.344 -30.044 -250 -165.633 V 262 h 500 V 15.867 C 405.344 180.456 280.85 180.5 250 180.5 Z"/>
		</svg>
	</span>
</div>

<!-- footer start here -->
<footer id="footer">
	<!-- <svg viewBox="0 0 1440 250">
	  <path fill="#fff" fill-opacity="1" d="M0,96L120,122.7C240,149,480,203,720,202.7C960,203,1200,149,1320,122.7L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
	</svg> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<a href="home.html">
					<img src="assets/images/home/jobLogo-footer.png" alt="Logo" title="Logo">
				</a>
				<div class="footer_inner">
					<p class="w-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
						eiusmod tempor incididunt ut<br>labore et dolore accumsan lacus <br> vel facilisis.
					</p>
				</div>
			</div>
			<div class="col-sm-2 mx-auto">
				<h5>Usefull Links</h5>
				<div class="footer_inner">
					<ul class="list-unstyled">
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="contact-us.html">Contact Us</a></li>
						<li><a href="javascript:void(0);">Services</a></li>
						<li><a href="javascript:void(0);">News & Blog </a></li>
						<li><a href="javascript:void(0);">Our features</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<h5>Contact Us</h5>
				<div class="footer_inner">
					<div class="d-flex media">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<div class="media-body"><p> <span class="f_rubik">456,</span> calicut, main road <br> kearala , india <span class="f_rubik">210093</span> </p></div>
					</div>
					<div class="d-flex media">
						<i class="fa-regular fa-envelope"></i>
						<div class="media-body"><p>kdkrishna@gmail.com</p></div>
					</div>
					<div class="d-flex media">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<div class="media-body"><p class="f_rubik">+91 9037502150</p></div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<h5>Get In Touch</h5>
				<div class="footer_inner">
					<form class="form-inline valid" method="post">
						<div class="input-group mb-4">
								<input type="email" name="email" class="form-control" id="email" 	placeholder="E-mail Address" value="" required>
								<button class="btn btn-white" name="submit" type="submit" id="submit">
									<i class="fa-regular fa-paper-plane"></i>
								</button>
						</div>
					</form>
					<ul class="list-inline">
						<li class="list-inline-item"><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0);">
						<i class="fa-brands fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end here -->
<!-- Js Links -->
<script src="assets/js/bootstrap5.3/js/popper.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/common.js"></script>

</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:17 GMT -->
</html>
