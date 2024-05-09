<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>About-us</title>
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
<section class="overview">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5 me-3 m-auto">
				<div class="overImg">
					<div class="img-card"><img class="w-100" src="assets/images/about-us/Second-banner.png" alt="Banner"></div>
				</div>
			</div>
			<div class="col-sm-6 pt-md-5 mx-auto pt-sm-0">
				<h1>Company <span class="text-red">Overview</span></h1>
				<p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Maecenas nisl est, Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc sed do tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="readmores">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum Donec vitae dui eget tellus gravida venenatis. vitae dui eget tellus gravida venenatis.Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc sed
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.overview -->

<section class="interJob">
	<div class="container-fluid">
		<h1 class="pb-5">Why Choose <span class="text-red">Us ?</span></h1>
		<div class="row">
			<div class="col-sm-3 mb-4">
				<div class="interinner">
					<div class="daimond-bg"><i class="fa fa-pie-chart" aria-hidden="true"></i></div>
					<h2 class="text-red">Trusted Quality</h2>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incididunt.....</h4>
					<a href="javascript:void(0);">Read More</a>
				</div>
			</div>
			<div class="col-sm-3 mb-4">
				<div class="interinner">
					<div class="daimond-bg"><i class="fa fa-building" aria-hidden="true"></i></div>
					<h2 class="text-red">Top Companies</h2>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incididunt.....</h4>
					<a href="javascript:void(0);">Read More</a>
				</div>
			</div>
			<div class="col-sm-3 mb-4">
				<div class="interinner">
					<div class="daimond-bg">
						<i class="fa-sharp fa-solid fa-money-bill-1"></i>
					</div>
					<h2 class="text-red">No Extra Charges</h2>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incididunt.....</h4>
					<a href="javascript:void(0);">Read More</a>
				</div>
			</div>
			<div class="col-sm-3 mb-4">
				<div class="interinner">
					<div class="daimond-bg"><i class="fa fa-user" aria-hidden="true"></i></div>
					<h2 class="text-red">Internation Job</h2>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incididunt.....</h4>
					<a href="javascript:void(0);">Read More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.interJob -->

<section class="valPart">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="valinner">
					<i class="fa fa-user" aria-hidden="true"></i>
					<h1 class="text-red">19K +</h1>
					<h4>Job Available</h4>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="valinner">
				<i class="fa-sharp fa-solid fa-pen-to-square"></i>
					<h1 class="text-red">15K +</h1>
					<h4>CV Submited</h4>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="valinner">
					<i class="fa fa-building" aria-hidden="true"></i>
					<h1 class="text-red">11K +</h1>
					<h4>Companies</h4>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="valinner">
					<i class="fa fa-user" aria-hidden="true"></i>
					<h1 class="text-red">35 +</h1>
					<h4>Appointed To Job</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="bgnumber"></div>
</section>
<!-- /. valPart -->

<section class="meetTeam">
	<div class="container-fluid">
		<h1>Meet Our <span class="text-red">Team</span></h1>
		<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h4>
		<div class="row">
			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/member1.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Belinda</a></h3>
				<h4>Web Developer</h4>
			</div>

			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/memeber2.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Cristian</a></h3>
				<h4>Creative Director</h4>
			</div>

			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/member3.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Robert</a></h3>
				<h4>Office Manager</h4>
			</div>

			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/member4.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Tony Teo</a></h3>
				<h4>Support Manager</h4>
			</div>
		</div>

		<div class="row ptMeet">
			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/member5.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Belinda</a></h3>
				<h4>Web Developer</h4>
			</div>

			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/member6.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Cristian</a></h3>
				<h4>Creative Director</h4>
			</div>

			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/member7.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Robert</a></h3>
				<h4>Office Manager</h4>
			</div>

			<div class="col-sm-3 mb-4">
				<div class="teams">
					<a href="javascript:void(0);"><img src="assets/images/about-us/member8.png" alt="Team" class="teamimage w-100"></a>
					<div class="overlay">
						<ul class="icons list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<h3><a href="javascript:void(0);">Tony Teo</a></h3>
				<h4>Support Manager</h4>
			</div>
		</div>
	</div>
</section>
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
<script src="assets/assets/js/common.js"></script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:06 GMT -->
</html>
