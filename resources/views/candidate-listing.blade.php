<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>candidate-Listing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylesheet.css')}}">
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
									{{-- <li><a class="dropdown-item" href="{{route ('coming-soon')}}">Coming Soon</a></li> --}}
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
						<img class="w-100" src="assets/images/post-job/banner.png" alt="Banner">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /. nearJob -->

<section class="candidateList">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h3>Candidate <span class="text-red">Listing</span></h3>
				<div class="row">
					<div class="col-sm-3 pe-0 dropdown-container position-relative">
						<select name="education" id="education" class="form-control">
							<option value="education">Education</option>
						</select>
					</div>
					<div class="col-sm-3 pe-0 dropdown-container position-relative">
						<select name="year" id="year" class="form-control">
							<option value="year">Year</option>
							<option value="1year">1 Year</option>
							<option value="2year">2 Year</option>
							<option value="4year">4 Year</option>
							<option value="7year">7 Year</option>
							<option value="10year">10 Year</option>
						</select>
					</div>
					<div class="col-sm-3 pe-0 dropdown-container position-relative">
						<select name="location" id="location" class="form-control">
							<option value="location">Loaction</option>
							<option value="newyork">New York</option>
							<option value="losangeles">Los Angeles</option>
							<option value="shicago">Shicago</option>
							<option value="uniteskingdom">United Kingdom</option>
						</select>
					</div>
					<div class="col-sm-3">
						<input type="submit" name="inputsearch" id="input-search" class="btn btn-danger btn-block form-control" value="Search">
					</div>
				</div><!-- /. row -->
				<div class="listCandidates">
					<div class="row">
						<div class="col-sm-8">
							<div class="media">
								<div class="jobImage w-auto float-md-start">
									<div class="image-card me-4">
										<img src="assets/images/candidate-listing/candidate1.png" alt="Candidate-1">
									</div>
								</div>
								<div class="media-body">
									<h5>Anna Deo</h5>
									<ul class="list-inline">
										<li class="list-inline-item">
											<i class="fa fa-phone mr-2" aria-hidden="true"></i>
											<span class="f_rubik">9865235893</span>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
											San Francisco
										</li>
										<li class="list-inline-item">
											<i class="fa fa-file-text-o mr-2" aria-hidden="true"></i>
											Full Time
										</li>
									</ul>
									<ul class="list-inline editText mb-0">
										<li class="list-inline-item">Java Script</li>
										<li class="list-inline-item">PHP</li>
										<li class="list-inline-item">CSS</li>
										<li class="list-inline-item">C++</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-end listRight">
							<h5 class="f_rubik">$5000-1000 <br><span>(Monthly)</span></h5>
							<a href="candidate-details.html" class="btn btn-outline-dark rounded-pill">
								View Details
							</a>
						</div>
					</div><!-- /. row -->
				</div><!-- /. listCandidates -->
				<div class="listCandidates">
					<div class="row">
						<div class="col-sm-8">
							<div class="media">
								<div class="jobImage w-auto float-md-start">
									<div class="image-card me-4">
										<img src="assets/images/candidate-listing/candidate2.png" alt="Candidate-2">
									</div>
								</div>
								<div class="media-body">
									<h5>Stephen Henry</h5>
									<ul class="list-inline">
										<li class="list-inline-item">
											<i class="fa fa-phone mr-2" aria-hidden="true"></i>
											<span class="f_rubik">9865235893</span>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
											San Francisco
										</li>
										<li class="list-inline-item">
											<i class="fa fa-file-text-o mr-2" aria-hidden="true"></i>
											Full Time
										</li>
									</ul>
									<ul class="list-inline editText mb-0">
										<li class="list-inline-item">Java Script</li>
										<li class="list-inline-item">PHP</li>
										<li class="list-inline-item">CSS</li>
										<li class="list-inline-item">C++</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-end listRight">
							<h5 class="f_rubik">$8000-1000 <br><span>(Monthly)</span></h5>
							<a href="candidate-details.html" class="btn btn-outline-dark rounded-pill">
								View Details
							</a>
						</div>
					</div><!-- /. row -->
				</div><!-- /. listCandidates -->
				<div class="listCandidates">
					<div class="row">
						<div class="col-sm-8">
							<div class="media">
								<div class="jobImage w-auto float-md-start">
									<div class="image-card me-4">
										<img src="assets/images/candidate-listing/candidate3.png" alt="Candidate-3">
									</div>
								</div>
								<div class="media-body">
									<h5>Mark Frendi</h5>
									<ul class="list-inline">
										<li class="list-inline-item">
											<i class="fa fa-phone mr-2" aria-hidden="true"></i>
											<span class="f_rubik">9865235893</span>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
											San Francisco
										</li>
										<li class="list-inline-item">
											<i class="fa fa-file-text-o mr-2" aria-hidden="true"></i>
											Full Time
										</li>
									</ul>
									<ul class="list-inline editText mb-0">
										<li class="list-inline-item">Java Script</li>
										<li class="list-inline-item">PHP</li>
										<li class="list-inline-item">CSS</li>
										<li class="list-inline-item">C++</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-end listRight">
							<h5 class="f_rubik">$5000-1000 <br><span>(Monthly)</span></h5>
							<a href="candidate-details.html" class="btn btn-outline-dark rounded-pill">
								View Details
							</a>
						</div>
					</div><!-- /. row -->
				</div><!-- /. listCandidates -->
				<div class="listCandidates">
					<div class="row">
						<div class="col-sm-8">
							<div class="media">
								<div class="jobImage w-auto float-md-start">
									<div class="image-card me-4">
										<img src="assets/images/candidate-listing/candidate4.png" alt="Candidate-4">
									</div>
								</div>
								<div class="media-body">
									<h5>Ken Hery</h5>
									<ul class="list-inline">
										<li class="list-inline-item">
											<i class="fa fa-phone mr-2" aria-hidden="true"></i>
											<span class="f_rubik">9865235893</span>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
											San Francisco
										</li>
										<li class="list-inline-item">
											<i class="fa fa-file-text-o mr-2" aria-hidden="true"></i>
											Full Time
										</li>
									</ul>
									<ul class="list-inline editText mb-0">
										<li class="list-inline-item">Java Script</li>
										<li class="list-inline-item">PHP</li>
										<li class="list-inline-item">CSS</li>
										<li class="list-inline-item">C++</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-end listRight">
							<h5 class="f_rubik">$5000-1000 <br><span>(Monthly)</span></h5>
							<a href="candidate-details.html" class="btn btn-outline-dark rounded-pill">
								View Details
							</a>
						</div>
					</div><!-- /. row -->
				</div><!-- /. listCandidates -->
				<div class="listCandidates">
					<div class="row">
						<div class="col-sm-8">
							<div class="media">
								<div class="jobImage w-auto float-md-start">
									<div class="image-card me-4">
										<img src="assets/images/candidate-listing/candidate5.png" alt="Candidate-5">
									</div>
								</div>
								<div class="media-body">
									<h5>Anna Deo</h5>
									<ul class="list-inline">
										<li class="list-inline-item">
											<i class="fa fa-phone mr-2" aria-hidden="true"></i>
											<span class="f_rubik">9865235893</span>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
											San Francisco
										</li>
										<li class="list-inline-item">
											<i class="fa fa-file-text-o mr-2" aria-hidden="true"></i>
											Full Time
										</li>
									</ul>
									<ul class="list-inline editText mb-0">
										<li class="list-inline-item">Java Script</li>
										<li class="list-inline-item">PHP</li>
										<li class="list-inline-item">CSS</li>
										<li class="list-inline-item">C++</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-end listRight">
							<h5 class="f_rubik">$5000-1000 <br><span>(Monthly)</span></h5>
							<a href="candidate-details.html" class="btn btn-outline-dark rounded-pill">
								View Details
							</a>
						</div>
					</div><!-- /. row -->
				</div><!-- /. listCandidates -->
				<div class="listCandidates">
					<div class="row">
						<div class="col-sm-8">
							<div class="media">
								<div class="jobImage w-auto float-md-start">
									<div class="image-card me-4">
										<img src="assets/images/candidate-listing/candidate6.png" alt="Candidate-6">
									</div>
								</div>
								<div class="media-body">
									<h5>Anna Deo</h5>
									<ul class="list-inline">
										<li class="list-inline-item">
											<i class="fa fa-phone mr-2" aria-hidden="true"></i>
											<span class="f_rubik">9865235893</span>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
											San Francisco
										</li>
										<li class="list-inline-item">
											<i class="fa fa-file-text-o mr-2" aria-hidden="true"></i>
											Full Time
										</li>
									</ul>
									<ul class="list-inline editText mb-0">
										<li class="list-inline-item">Java Script</li>
										<li class="list-inline-item">PHP</li>
										<li class="list-inline-item">CSS</li>
										<li class="list-inline-item">C++</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4 text-end listRight">
							<h5 class="f_rubik">$5000-1000 <br><span>(Monthly)</span></h5>
							<a href="candidate-details.html" class="btn btn-outline-dark rounded-pill">
								View Details
							</a>
						</div>
					</div><!-- /. row -->
				</div><!-- /. listCandidates -->
				<div class="row">
					<div class="col-sm-12">
						<nav class="pull-left">
						  <ul class="pagination f_rubik mb-0">
							<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
							<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						  </ul>
						</nav>
						<p class="showing">Showing 6 out of 30</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /. candidateList -->

<!-- footer area start -->
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
<!-- footer area start -->
<footer id="footer">
	<!-- <svg viewBox="0 0 1440 250">
	  <path fill="#fff" fill-opacity="1" d="M0,96L120,122.7C240,149,480,203,720,202.7C960,203,1200,149,1320,122.7L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
	</svg> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<a href="home.html">
					<img src="{{ 'assets/images/home/jobLogo-footer.png' }}" alt="Logo" title="Logo">
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
<!-- footer area end -->

<!-- Js Links -->
<script src="assets/js/bootstrap5.3/js/popper.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/common.js"></script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/candidate-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:14 GMT -->
</html>
