<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>Home</title>
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
<!-- banner start here -->
<div class="banner">
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
<!-- header -->

<section class="homePage">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<h1>Find Your Favourite</h1>
				<h2 class="text-red">Job Immediete</h2>
				<p>Are you tired of searching endlessly for the perfect job? Look no further! We understand how frustrating it can be to wait for the right opportunity to come along. <br>
                    That's why we've curated a wide range of exciting job openings available immediately<br>
                    Whether you're a seasoned professional or just starting your career, we have something for everyone.
				</p>

				<form class="form-inline" method="post">
					<div class="input-group mb-4 w-100">
						<i class="fa fa-search" aria-hidden="true"></i>
						<input type="search" name="search" id="search" class="form-control" placeholder="Search by Skill,job and Company" value="" required>
						<input type="submit" name="searchbtn" class="btn btn-dark rounded-pill" id="searchBtn" value="Search">
					</div><!-- input-group -->
				</form>
			</div>
		</div><!-- row -->
		<div class="row">
			<div class="col-sm-8">
				<div class="socialImage">
					<img class="ml-0" src="{{ 'assets/images/home/Google-logo.png' }}" alt="Google" title="Google">
					<img src="{{ 'assets/images/home/Microsoft-Logo-PNG.png' }}" alt="Microsoft" title="Microsoft">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- homePage -->
</div>
<!-- banner end here -->

<section class="jobPart">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="jobImage">
					<div class="image-card">
						<img class="w-100" src="{{ 'assets/images/home/Microsoft-Logo-PNG.png'}}" alt="Job">
					</div>
				</div>
			</div>
			<div class="col-sm-8 pt-md-4 pt-sm-0">
				<h1>Find Million Of Jobs And</h1>
				<h2 class="text-red">Achieve Success</h2>
				<p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna
				aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas <br> commodo viverra maecenas accumsan lacus vel facilisis.</p>
			</div>
		</div>
	</div>
</section>
<!-- jobPart end here -->

<section class="ourJob">
	<div class="container-fluid">
		<h1>Our Job <span class="text-red">Process</span></h1>
		<div class="row">
			<div class="col-sm-4">
				<div class="ourjobInner mb-4">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h3 class="text-red"> Create Account</h3>
					<p>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit, sed do eiusmo<br> tempor incididunt</p>
					<a href="javascript:void(0);" class="btn btn-danger read rounded-pill"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="ourjobInner mb-4">
					<i class="fa fa-search" aria-hidden="true"></i>
					<h3 class="text-red"> Search Job</h3>
					<p>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit, sed do eiusmo<br> tempor incididunt</p>
					<a href="javascript:void(0);" class="btn btn-danger read rounded-pill"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="ourjobInner mb-4">
					<i class="fa-regular fa-file-lines"></i>
					<h3 class="text-red"> Upload Resume</h3>
					<p>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit, sed do eiusmo<br> tempor incididunt</p>
					<a href="javascript:void(0);" class="btn btn-danger read rounded-pill"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ourJob end here -->

<section class="jobforYou">
	<div class="container-fluid">
		<!-- carousel wrapper -->
		<div id="jobSlider" class="carousel slide">
			<!-- controls -->
			<div class="controls-top">
				<h1><a class="btn-floating pre" data-bs-target="#jobSlider" data-bs-slide="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
				Job For <span class="text-red">You</span>
				<a class="btn-floating next" data-bs-target="#jobSlider"  data-bs-slide="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</h1>
			</div>
			<!-- controls -->

			<!-- slides -->
			<div class="carousel-inner">
				<!-- first slide -->
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>Graphic Desginer</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assets/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>Graphic Desginer</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-3 clearfix d-none d-md-block">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>Data Entry</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assets/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>Data Entry</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-3 clearfix d-none d-md-block">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>High tech Pvt. Ltd.</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assets/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>High tech Pvt. Ltd.</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-3 clearfix d-none d-md-block">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>Account Manager</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assets/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>Account Manager</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- first slide -->

				<!-- second slide -->
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>Graphic Desginer</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assets/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>Graphic Desginer</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-3 clearfix d-none d-md-block">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>Data Entry</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assets/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>Data Entry</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-3 clearfix d-none d-md-block">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>High tech Pvt. Ltd.</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assets/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>High tech Pvt. Ltd.</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-3 clearfix d-none d-md-block">
							<div class="jobBox">
								<img class="w-100" src="{{ 'assets/images/home/job-for-you.png' }}" alt="Job">
								<div class="jobBox-content">
									<h3>Account Manager</h3>
									<button type="button" class="btn btn-outline-warning">Apply Now</button>
								</div>
								<div class="jobBox-hover">
									<div class="card">
										<img class="card-img-top" src="{{ 'assete/images/home/job-hover.png' }}" alt="Job">
										<div class="jobBox-hover-content">
											<i class="fa fa-cube" aria-hidden="true"></i>
											<h3>Account Manager</h3>
										</div>
										<div class="card-body">
											<h4>Graphic Desginer</h4>
											<ul class="list-unstyled mb-0">
												<li>Building No.-563, klinton Pair, <br> St, 1.New York, USA.</li>
												<li>Mob:- 9876543210</li>
												<li>Status:- Active</li>
											</ul>
										</div>
										<a href="job-details.html">Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- jobforYou -->

<section class="weCompany">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 pt-md-5 pt-sm-0">
				<h1>We are Trusted by Popular</h1>
				<h2 class="text-red">800+ Company</h2>
				<p class="more">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod labore tempor incididunt ut <br>
					labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
					viverra <br> maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur
					adipiscing elit, sed do <br> eiusmod tempor  suspendisse ultrices incididunt ut labore et dolor magna aliqua. accumsan tempor Quis ipsum <br> Quis ipsum labore
					suspendisse ultrices gravida . sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
			<div class="col-sm-4 text-center">
				<div class="d-flex w-100 pb-4">
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand9.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand10.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand11.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand12.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
				</div>
				<div class="d-flex w-100 pb-4">
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand1.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand2.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand3.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand4.png' }}" class="img-fluid" alt="Logo"></a>
					</div>

				</div>

				<div class="d-flex w-100 pb-4">
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand5.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand6.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand7.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand8.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
				</div>

				<div class="d-flex w-100 pb-4">
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand9.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ asset('assets/images/home/brand10.png') }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand11.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
					<div class="w-25">
						<a href="#"><img src="{{ 'assets/images/home/brand12.png' }}" class="img-fluid" alt="Logo"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- weCompany end here -->

<section class="seekerPart d-none d-md-block">
	<div class="container text-center">
		<h1>What says Job Seeker <span class="text-red">About Us</span></h1>
		<h3 class="mx-auto col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Quis ipsum</h3>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="bgseeker">
					<img class="w-100" src="{{ 'assets/images/home/Testimonial-Background.png' }}" alt="Background">
					<div class="pro_one">
					<a href="#" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. "><img src="assets/images/home/testimonial-images.png" alt="profile"></a>
					</div>
					<div class="pro_two">
						<a href="#" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. "><img src="assets/images/home/testimonial-image2.png" alt="profile" ></a>
					</div>
					<div class="pro_three">
						<a href="#" data-bs-toggle="popover" data-bs-placementt="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. "><img src="assets/images/home/Testimonial-Images6.png" alt="profile" ></a>
					</div>
					<div class="pro_four">
						<a href="#"  data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. "><img src="assets/images/home/testimonial-image3.png" alt="profile" ></a>
					</div>
					<div class="pro_five">
						<a href="#" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. "><img src="assets/images/home/Testimonial4.png" alt="profile"></a>
					</div>
					<div class="pro_six">
						<a href="#" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. "><img src="   assets/images/home/Testimonial-Image5.png" alt="profile" ></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- seekerPart end here -->

<section class="latestBlog">
	<div class="container-fluid">
		<h1 class="text-center">Our Latest <span class="text-red">Blog</span></h1>
		<div class="row">
			<div class="col-sm-4">
				<div class="card mb-4">
					<img class="card-img-top" src="{{ 'assets/images/home/blog-1.png' }}" alt="Job">
					<span class="dateTop">20<sup>th</sup> feb 2020</span>
					<div class="card-body">
						<h3 class="card-title">New Generation</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmo</p>
						<a class="readlink" href="blog-detail.html">Read More</a>
						<a href="blog-detail.html" class="btn btn-outline-white rounded-pill"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-4">
					<img class="card-img-top" src="{{ 'assets/images/home/blog-3.png' }}" alt="Job">
					<span class="dateTop">30<sup>th</sup> Jan 2020</span>
					<div class="card-body">
						<h3 class="card-title">Most Important</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmo</p>
						<a class="readlink" href="blog-detail.html">Read More</a>
						<a href="blog-detail.html" class="btn btn-outline-white rounded-pill"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-4">
					<img class="card-img-top" src="{{ 'assets/images/home/blog-2.png' }}" alt="Job">
					<span class="dateTop">5<sup>th</sup> Oct 2020</span>
					<div class="card-body">
						<h3 class="card-title">New days Insipiration</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmodLorem ipsum dolor sir amet, consectetur adipiscing elit, sed do eiusmo</p>
						<a class="readlink" href="blog-detail.html">Read More</a>
						<a href="blog-detail.html" class="btn btn-outline-white rounded-pill"> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
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

<!-- footer start here -->
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
<!-- footer end here -->
<!-- Js Links -->
<script src="assets/js/bootstrap5.3/js/popper.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
<!-- More function here -->
<script>
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 501;  // How many characters are shown by default
    var ellipsestext = "....";
    var moretext = "More";
    var lesstext = "More less";

    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }
    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().slideToggle();
        $(this).prev().slideToggle();
        return false;
    });
});
</script>

<!-- Popover function here -->
<script>
$(document).ready(function(){
	$('[data-bs-toggle="popover"]').popover({
		trigger: 'hover',
		html: true,
    })
});
</script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:55 GMT -->
</html>
