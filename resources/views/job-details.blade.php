<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>job-details</title>
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
					<li class="breadcrumb-item"><a href="job-details.html">Job Details</a></li>
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
						<h3>UI/Ux Designer:-</h3>
						<div class="offset-1">
							<div class="media py-2">
								<div class="company-logo">
									<img class="float-start me-4 mb-3" src="assets/images/job-details/company-logo.png"  alt="Profile">
								</div>
								<div class="media-body">
									<h4 class="text-red pb-0">Graphic Designer</h4>
									<ul class="list-unstyled muted">
										<li><i class="fa fa-tag" aria-hidden="true"></i> Graphicmania.Pvt.Ltd</li>
										<li><i class="fa fa-map-marker" aria-hidden="true"></i> javascript:void(0);245, Kilnton park , FG Road, New York, USA, 256321.</li>
									</ul>
								</div>
							</div>
							<p>It is so long established fact that a reader will be distracted by the readable content of a page
								when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
								of letter, as opposed to using 'Content here, content here'. making it look like readable English.It is a long established
								fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using English.
							</p>
							<p>It is a long established fact that a reader will be disabled by the readable content of a page when looking at its layout, letters
								as opposed to using 'Content here, content here.
							</p>
						</div>
					</div>
				</div><!-- /. row -->

				<div class="row">
					<div class="col-sm-12">
						<h4>Job Description:-</h4>
						<div class="offset-1">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud enim ad minim veniam, quis nostrud exercitation ullamco laboris  Many desktop publishing packages and web  typesetting, remaining essentially unchanged.</p>
							<p>It is a long established fact that a readerrs, as opposed to using 'Content here, content here', making it look like readable English. adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud enim ad minim veniam, quis nostrud exercitation will be disabled by the readable content of a page when looking at its layout, letters
								as opposed to using 'Content here, content here.
							</p>
						</div>
					</div>
				</div><!-- /. row -->
				<div class="row">
					<div class="col-sm-12">
						<h4>Qualaitfication:-</h4>
						<div class="offset-1">
							<ul>
								<li>It a long established fact that a reader will be distracted by the readable</li>
								<li>Lorem Ipsum has been the industry's standard dummy text ever since.</li>
								<li>When an unknown printer took a galley of type and scrambled.</li>
								<li>It to make a type specimen book.</li>
								<li>More recently with desktop publishing software like Aldus</li>
							</ul>
						</div>
					</div>
				</div><!-- /. row -->
				<div class="row">
					<div class="col-sm-12">
						<h4>Requirment:-</h4>
						<div class="offset-1">
							<ul>
								<li>Corel Draw</li>
								<li>Adobe Photoshop</li>
								<li>Adobe Indesign</li>
								<li>Adobe Illustrator</li>
							</ul>
						</div>
					</div>
				</div><!-- /. row -->
			</div><!-- grid column 8 -->
			<div class="col-sm-3 rightcandi offset-md-1">
				<div class="row">
					<div class="col-sm-12">
						<h6><i class="fa fa-map-marker me-2" aria-hidden="true"></i> Job Location</h6>
						<div class="border-bottom w-75"></div>
						<p><i class="fa fa-building me-2" aria-hidden="true"></i> Graphicmania.Pvt.Ltd</p>
						<p><i class="fa fa-envelope me-2" aria-hidden="true"></i> Gramania@gmail.com</p>
						<p><i class="fa fa-globe me-3" aria-hidden="true"></i>www.grmania.com</p>
						<p><i class="fa fa-phone me-3" aria-hidden="true"></i><span class="f_rubik">+612535589323</span></p>
						<p>
						<i class="fa-solid fa-money-bill me-3"></i>$<span class="f_rubik">200-$500</span> Month</p>
					</div>
				</div><!-- /. row -->
				<div class="row pt-5">
					<div class="col-sm-12">
						<h6><i class="fa fa-share-alt me-2"></i> Share Job</h6>
						<div class="border-bottom w-75"></div>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-facebook fs-6" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-instagram fs-6" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);">
								<i class="fa-brands fa-linkedin-in fs-6"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="javascript:void(0);"><i class="fa fa-twitter fs-6" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div><!-- /. row -->
				<div class="row pt-5">
					<div class="col-sm-12">
						<h6>
						<i class="fa-regular fa-clock me-2 fa-lg fs-5"></i>
						Openiang Hours</h6>
						<div class="border-bottom w-75"></div>
						<table class="table w-100">
							<tbody>
								<tr class="border-white">
									<td>Monday</td>
									<td class="text-end">9AM to 6:30PM</td>
								</tr>
								<tr class="border-white">
									<td>Tuesday</td>
									<td class="text-end">9AM to 6:30PM</td>
								</tr>
								<tr class="border-white">
									<td>Wednesday</td>
									<td class="text-end">9AM to 6:30PM</td>
								</tr>
								<tr class="border-white">
									<td>Thursday</td>
									<td class="text-end">9AM to 6:30PM</td>
								</tr>
								<tr class="border-white">
									<td>Friday</td>
									<td class="text-end">9AM to 6:30PM</td>
								</tr>
								<tr class="border-white">
									<td>Saturday</td>
									<td class="text-end">10AM to 5:30PM</td>
								</tr>
								<tr class="border-white">
									<td>Sunday</td>
									<td class="text-end">Close</td>
								</tr>
							</tbody>
						</table>
						<div class="d-grid">
							<a href="job-listing.html" class="btn btn-danger btn-block my-5">
								Apply For Job
							</a>
						</div>
					</div>
				</div><!-- /. row -->
			</div>
		</div>
	</div>
</section>
<!-- /. candidate -->

<!-- footer area start -->
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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:13 GMT -->
</html>
