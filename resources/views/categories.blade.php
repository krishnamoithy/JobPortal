<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>categories</title>
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
<!-- /. topbreadcrumb -->

<section class="explore">
	<div class="container-fluid">
		<h3 class="text-center">Explore <span class="text-red"> By Categories</span></h3>
		<div class="row pb-5">
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa fa-bar-chart" aria-hidden="true"></i>
						<h4>Web & Software</h4>
						<p>122 Jobs</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa-regular fa-file-lines"></i>
						<h4>Data Science & Analist</h4>
						<p>62 Jobs</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
						<h4>Business Development</h4>
						<p>122 Jobs</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<h4>Digital Marketing</h4>
						<p>25 Jobs</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row pb-4">
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
						<h4>Restaurant</h4>
						<p>63 Jobs</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa fa-linode" aria-hidden="true"></i>
						<h4>Graphic Designing</h4>
						<p>62 Jobs</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa fa-car" aria-hidden="true"></i>
						<h4>Car Driving</h4>
						<p>122 Jobs</p>
					</div>
				</a>
			</div>
			<div class="col-sm-3 mb-4">
				<a href="job-listing.html">
					<div class="exoInner">
						<i class="fa fa-cogs" aria-hidden="true"></i>
						<h4>Mechanic Engineering</h4>
						<p>45 Jobs</p>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="javascript:void(0);" class="btn btn-danger">View All Categroies</a>
			</div>
		</div>
	</div>
</section>
<!-- /. explore -->
		<section class="proFile">
			<div class="container my-4">
				<h3 class="text-center pb-5">Best Job For <span class="text-red">Your Profile</span></h3>
				<!-- Carousel Wrapper -->
				<div id="slideProfile" class="carousel slide">
					<div class="controls-top">
					  <a class="btn-floating prev me-1" data-bs-target="#slideProfile" data-bs-slide="prev" href="#slideProfile">
						<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
					  </a>
					  <a class="btn-floating next"  data-bs-target="#slideProfile" data-bs-slide="next" href="#slideProfile">
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					  </a>
					</div>
				  <div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-md-4">
								<a href="job-details.html">
									<div class="card mb-2">
										<div class="jobImage">
											<div class="image-card">
												<img class="card-img-top" src="assets/images/categories/sl-1.png" alt="Profile">
											</div>
										</div>
										<div class="card-body rgba-blue">
											<h4 class="text-white">Web Desiger</h4>
										</div>
									</div>
								</a>
							</div>

							<div class="col-md-4 clearfix d-none d-md-block">
								<a href="job-details.html">
									<div class="card mb-2">
										<div class="jobImage">
											<div class="image-card">
												<img class="card-img-top" src="assets/images/categories/sl-2.png" alt="Profile">
											</div>
										</div>
										<div class="card-body rgba-blue">
											<h4 class="text-white">UI/UX Designer</h4>
										</div>
									</div>
								</a>
							</div>

							<div class="col-md-4 clearfix d-none d-md-block">
								<a href="job-details.html">
									<div class="card mb-2">
										<div class="jobImage">
											<div class="image-card">
												<img class="card-img-top" src="assets/images/categories/sl-3.png" alt="Profile">
											</div>
										</div>
										<div class="card-body rgba-blue">
											<h4 class="text-white">Graphic Designer</h4>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-md-4">
								<a href="job-details.html">
									<div class="card mb-2">
										<div class="jobImage">
											<div class="image-card">
												<img class="card-img-top" src="assets/images/categories/download.jpg" alt="Profile">
											</div>
										</div>
										<div class="card-body rgba-blue">
											<h4 class="text-white">Web Desiger</h4>
										</div>
									</div>
								</a>
							</div>

							<div class="col-md-4 clearfix d-none d-md-block">
								<a href="job-details.html">
									<div class="card mb-2">
										<div class="jobImage">
											<div class="image-card">
												<img class="card-img-top" src="assets/images/categories/sl-2.png" alt="Profile">
											</div>
										</div>
										<div class="card-body rgba-blue">
											<h4 class="text-white">UI/UX Designer</h4>
										</div>
									</div>
								</a>
							</div>

							<div class="col-md-4 clearfix d-none d-md-block">
								<a href="job-details.html">
									<div class="card mb-2">
										<div class="jobImage">
											<div class="image-card">
												<img class="card-img-top" src="assets/images/categories/sl-3.png" alt="Profile">
											</div>
										</div>
										<div class="card-body rgba-blue">
											<h4 class="text-white">Graphic Designer</h4>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				  </div>
				</div>
		<!-- /.Carousel Wrapper -->
	</div>
</section>

<section class="latestBlog pt-0 pb-5">
	<div class="container-fluid">
		<h3 class="text-center pb-5">Our Latest <span class="text-red">Blog</span></h3>
		<div class="row">
			<div class="col-sm-4">
				<div class="card mb-4">
					<img class="card-img-top" src="assets/images/categories/blog-1.png" alt="Job">
					<span class="dateTop">20<sup>th</sup> feb 2020</span>
					<div class="card-body">
						<h3 class="card-title">New Generation</h3>
						<p class="smiBold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmo</p>
						<a class="readlink" href="blog-detail.html">Read More</a>
						<a href="blog-details.html" class="btn btn-outline-white rounded-pill"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-4">
					<img class="card-img-top" src="assets/images/categories/blog-2.png" alt="Job">
					<span class="dateTop">30<sup>th</sup> Jan 2020</span>
					<div class="card-body">
						<h3 class="card-title">Most Important</h3>
						<p class="smiBold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmo</p>
						<a class="readlink" href="blog-details.html">Read More</a>
						<a href="blog-details.html" class="btn btn-outline-white rounded-pill"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-4">
					<img class="card-img-top" src="assets/images/categories/blog-3.png" alt="Job">
					<span class="dateTop">5<sup>th</sup> Oct 2020</span>
					<div class="card-body">
						<h3 class="card-title">New days Insipiration</h3>
						<p class="smiBold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmo</p>
						<a class="readlink" href="blog-details.html">Read More</a>
						<a href="blog-details.html" class="btn btn-outline-white rounded-pill"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- latestBlog end here -->

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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:02 GMT -->
</html>
