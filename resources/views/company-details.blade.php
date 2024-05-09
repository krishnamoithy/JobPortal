<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>company-details</title>
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
						<img class="w-100" src="assets/images/company-details/banner.png" alt="Banner" >
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /. nearJob -->

<nav class="topbreadcrumb">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="home.html">Home</a></li>
					<li class="breadcrumb-item"><a href="company-details.html">Company Details</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- /. topbreadcrumb -->

<section class="candidate">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 leftcandi">
				<div class="row">
					<div class="col-sm-12">
						<div class="media">
							<img class="float-md-start me-4" src="assets/images/company-details/company-logo.png"  alt="Profile">
							<div class="media-body">
								<h3 class="mb-3">FB Style Pvt. Ltd</h3>
								<p class="mb-2">Web Development Company</p>
								<ul class="list-unstyled muted">
									<li><i class="fa fa-globe" aria-hidden="true"></i> www.grmania.com</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i> javascript:void(0);<span class="f_rubik">245</span>, Kilnton park , FG Road, New York, USA, <span class="f_rubik"> 256321</span>.</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- /. row -->
				<div class="row py-4 rightcandi">
					<div class="col-sm-12">
						<ul class="list-inline w-75 pt-2">
							<li class="list-inline-item"><h6>Find Us: -</h6></li>
							<li class="list-inline-item"><a href="javascript:void(0);"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void(0);"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void(0);">
							<i class="fa-brands fa-linkedin-in fa-lg"></i>
							</a></li>
							<li class="list-inline-item"><a href="javascript:void(0);"><i class="fa fa-google fa-lg" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div><!-- /. row -->
				<div class="row">
					<div class="col-sm-12">
						<h5>About Company:-</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud enim ad minim veniam, quis nostrud exercitation ullamco laboris  Many desktop publishing packages and web  typesetting, remaining essentially unchanged.</p>
					</div>
				</div><!-- /. row -->
				<div class="row py-4">
					<div class="col-sm-12">
						<p><i class="fa fa-check text-secondary" aria-hidden="true"></i>
							Lorem Ipsum is simple dummy text of the printing and typesetting industry.
						</p>
						<p><i class="fa fa-check text-secondary" aria-hidden="true"></i>
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
						</p>
						<p><i class="fa fa-check text-secondary" aria-hidden="true"></i>
							It has survived not only five centuries, but also the leap into electronic typesetting.
						</p>
						<p><i class="fa fa-check text-secondary" aria-hidden="true"></i>
							It has survived not only five centuries, but also the leap into electronic typesetting.
						</p>
						<p><i class="fa fa-check text-secondary" aria-hidden="true"></i>
							When an unknown printer took a galley of type and scrambled it to make a type specimen.
						</p>
					</div>
				</div><!-- /. row -->
				<div class="row py-3">
					<div class="col-sm-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d193647.00554245853!2d-74.20754255314208!3d40.67981937845657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20%23245%2C%20Kilnton%20park%20%2C%20FG%20Road%2C%20New%20York%2C%20USA%2C%20256321.!5e0!3m2!1sen!2sin!4v1613207041312!5m2!1sen!2sin" width="100" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div><!-- /. row -->
				<div class="row py-5">
					<div class="col-sm-12">
						<div class="d-grid">
						<a href="job-listing.html" class="btn btn-danger btn-block">Apply Job Here</a>
						</div>
					</div>
				</div>
			</div><!-- grid column 8 -->
			<div class="col-sm-4 rightcandi">
				<div class="row pb-4">
					<div class="col-sm-12 text-center">
						<h6>Contact Candidate</h6>
						<form class="pt-3" method="post">
							<div class="mb-3">
								<input type="text" name="username" id="username" class="form-control" placeholder="Your Name" value="" required>
							</div>
							<div class="mb-3">
								<input type="email" name="email" id="eamil" class="form-control" placeholder="Your E-mail" value="" required>
							</div>
							<div class="mb-3">
								<input type="number" name="number" id="number" class="form-control" placeholder="Phone" value="" required>
							</div>
							<div class="mb-3">
								<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" value="" required>
							</div>
							<div class="mb-3">
								<textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
							</div>
							<div class="mb-3">
								<div class="d-grid">
								<input type="submit" name="submit" class="btn btn-block btn-dark" id="send" value="Send" >
								</div>
							</div>
						</form>
					</div>
				</div><!-- /. row -->
				<div class="row py-5">
					<div class="col-sm-12">
						<div class="jobImage">
							<div class="image-card">
								<img class="w-100" src="assets/images/candidate-deails/right-banner.png" alt="Banner">
							</div>
							<div class="banner-text">
								<h2 class="text-secondary"> RIGHT <br>
								<span class="text-red">PEOPLE</span> <br> RIGHT <br>
								<span class="text-red">SLOUTIONS</span>
								</h2>
							</div>
						</div>
					</div>
				</div><!--/. row -->
				<div class="row pt-5">
					<div class="col-sm-12">
						<h6 class="text-white bg-dark py-3 px-4 font-weight-light">Job Categories</h6>
						<form class="pt-3" method="post">
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" name="account-gst" class="form-check-input" id="jobCat1" checked>
									<label class="form-check-label" for="jobCat1">Accounting Gst</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" name="developer-m" class="form-check-input" id="jobCat2" checked>
									<label class="form-check-label" for="jobCat2">Developer Manager</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" name="education" class="form-check-input" id="jobCat3">
									<label class="form-check-label" for="jobCat3">Educations Chancellor</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" name="media" class="form-check-input" id="jobCat4">
									<label class="form-check-label" for="jobCat4">Media & News</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" name="restaurant" class="form-check-input" id="jobCat5">
									<label class="form-check-label" for="jobCat5">Restaurents Manager</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" name="medical" class="form-check-input" id="jobCat6">
									<label class="form-check-label" for="jobCat6">Medical Assistant</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" name="techology" class="form-check-input" id="jobCat7">
									<label class="form-check-label" for="jobCat7">Technology Frontier</label>
								</div>
							</div>
						</form>
					</div>
				</div><!-- /. row -->
				<div class="row pt-5">
					<div class="col-sm-12">
						<h6 class="text-white bg-dark font-weight-light py-3 px-4">Job By Location</h6>
						<form class="pt-3" method="post">
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" class="form-check-input" id="jobLoc1" checked>
									<label class="form-check-label" for="jobLoc1">New York</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" class="form-check-input" id="jobLoc2" checked>
									<label class="form-check-label" for="jobLoc2">Wasington City</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" class="form-check-input" id="jobLoc3">
									<label class="form-check-label" for="jobLoc3">Las Vegas</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" class="form-check-input" id="jobLoc4">
									<label class="form-check-label" for="jobLoc4">Houston City</label>
								</div>
							</div>
							<div class="form-check mb-3">
								<div class="checkbox">
									<input type="checkbox" class="form-check-input" id="jobLoc5">
									<label class="form-check-label" for="jobLoc5">Los Angles</label>
								</div>
							</div>
						</form>
					</div>
				</div><!-- /. row -->
			</div>
		</div>
	</div>
</section>
<!-- /. candidate -->

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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/company-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:10 GMT -->
</html>
