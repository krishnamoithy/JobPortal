<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>job-listing</title>
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

<section class="nearJoblist nearJob">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 nearcol">
				<h1>Your dream Job</h1>
				<h2 class="text-red">Is Near to You</h2>
				<img class="girl" src="assets/images/job-listing/girl-img.png" alt="Banner">
			</div>
		</div>
	</div>
</section>
<!-- /. nearJob -->

<section class="jobListing">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h3>Job <span class="text-red">Listing</span></h3>
				<div class="row">
					<div class="col-sm-3">
						<div class="d-grid">
						<button type="button" name="upload" id="upload" class="btn btn-danger btn-block">
							<i class="fa-regular fa-file-lines me-3"></i>Upload Your Resume
						</button>
						</div>
						<div class="joblist_Left">
							<div class="card">
								<div class="card-body">
									<h4>Job By Tittle</h4>
									<form method="post">
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="webdesigner" class="form-check-input" id="jobTittle1" checked="">
												<label class="form-check-label" for="jobTittle1">Web Designer</label>
												<span class="f_rubik float-end">12</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="grahic" class="form-check-input" id="jobTittle2">
												<label class="form-check-label">Graphic Designer</label>
												<span class="f_rubik float-end">17</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="carmachanic" class="form-check-input" id="jobTittle3">
												<label class="form-check-label" for="jobTittle3">Car Mechanic</label>
												<span class="f_rubik float-end">15</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="grahic" class="form-check-input" id="jobTittle4">
												<label class="form-check-label" for="jobTittle4">Graphic Designer</label>
												<span class="f_rubik float-end">17</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="account" class="form-check-input" id="jobTittle5">
												<label class="form-check-label" for="jobTittle5">Account Manager</label>
												<span class="f_rubik float-end">20</span>
											</div>
										</div>
										<a href="javascript:void(0);">View More</a>
									</form>
								</div>
							</div><!-- /. card -->

							<div class="card">
								<div class="card-body">
									<h4>Job By City</h4>
									<form method="post">
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="newyork" class="form-check-input" id="jobcity1" checked="">
												<label class="form-check-label" for="jobcity1">New York</label>
												<span class="f_rubik float-end">19</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="losangeles" class="form-check-input" id="jobcity2" checked="">
												<label class="form-check-label" for="jobcity2">Los Angeles</label>
												<span class="f_rubik float-end">22</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="shiscago" class="form-check-input" id="jobcity3">
												<label class="form-check-label" for="jobcity3">Shicago</label>
												<span class="f_rubik float-end">14</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="losangeles" class="form-check-input" id="jobcity4">
												<label class="form-check-label" for="jobcity4">Las Vegas</label>
												<span class="f_rubik float-end">23</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="losangeles" class="form-check-input" id="jobcity5">
												<label class="form-check-label" for="jobcity5">United Kingdom</label>
												<span class="f_rubik float-end">18</span>
											</div>
										</div>
										<a href="javascript:void(0);">View More</a>
									</form>
								</div>
							</div><!-- /. card -->

							<div class="card">
								<div class="card-body">
									<h4>Job By Experience</h4>
									<form method="post">
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="fulltime" class="form-check-input" id="jobEx1" checked="">
												<label class="form-check-label" for="jobEx2">Full Time</label>
												<span class="f_rubik float-end">19</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="contact" class="form-check-input" id="jobEx2">
												<label class="form-check-label" for="jobEx2">Conatct</label>
												<span class="f_rubik float-end">04</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="parttime" class="form-check-input" id="jobEx3">
												<label class="form-check-label" for="jobEx3">Part Time</label>
												<span class="f_rubik float-end">03</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="internship" class="form-check-input" id="jobEx4">
												<label class="form-check-label" for="jobEx4">Internship</label>
												<span class="f_rubik float-end">01</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="internship" class="form-check-input" id="jobEx5">
												<label class="form-check-label" for="jobEx5">Freelence</label>
												<span class="f_rubik float-end">06</span>
											</div>
										</div>
										<a href="javascript:void(0);">View More</a>
									</form>
								</div>
							</div><!-- /. card -->

							<div class="card">
								<div class="card-body">
									<h4>Job By Industry</h4>
									<form method="post">
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="info" class="form-check-input" id="jobIndustry1" checked="">
												<label class="form-check-label" for="jobIndustry1">Information Teach.</label>
												<span class="f_rubik float-end">19</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="adv" class="form-check-input" id="jobIndustry2">
												<label class="form-check-label" for="jobIndustry2">Advertising/PR</label>
												<span class="f_rubik float-end">04</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="health" class="form-check-input" id="jobIndustry3">
												<label class="form-check-label" for="jobIndustry3">Health & Fitness</label>
												<span class="f_rubik float-end">03</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="media" class="form-check-input" id="jobIndustry4">
												<label class="form-check-label" for="jobIndustry4">Media $ communication</label>
												<span class="f_rubik float-end">01</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="service" class="form-check-input" id="jobIndustry5">
												<label class="form-check-label" for="jobIndustry5">Services</label>
												<span class="f_rubik float-end">06</span>
											</div>
										</div>
										<a href="javascript:void(0);">View More</a>
									</form>
								</div>
							</div><!-- /. card -->

							<div class="card">
								<div class="card-body">
									<h4>Top Companies</h4>
									<form method="post">
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="goggle" class="form-check-input" id="topCom1" checked="">
												<label class="form-check-label" for="topCom1">Goggle</label>
												<span class="f_rubik float-end">19</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="microdoft" class="form-check-input" id="topCom2">
												<label class="form-check-label" for="topCom2">MicroSoft</label>
												<span class="f_rubik float-end">04</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="peopsico" class="form-check-input" id="topCom3">
												<label class="form-check-label" for="topCom3">Peopsico</label>
												<span class="f_rubik float-end">03</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="dell" class="form-check-input" id="topCom4">
												<label class="form-check-label" for="topCom4">Dell</label>
												<span class="f_rubik float-end">01</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="hcl" class="form-check-input" id="topCom5">
												<label class="form-check-label" for="topCom5">HCL</label>
												<span class="f_rubik float-end">06</span>
											</div>
										</div>
										<a href="javascript:void(0);">View More</a>
									</form>
								</div>
							</div><!-- /. card -->

							<div class="card">
								<div class="card-body">
									<h4>Top Companies</h4>
									<form method="post">
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="numone" class="form-check-input" id="topComnum1" checked="">
												<label class="form-check-label f_rubik" for="topComnum1">0 to $100</label>
												<span class="f_rubik float-end">19</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="numtwo" class="form-check-input" id="topComnum2">
												<label class="form-check-label f_rubik" for="topComnum2">$ 101 to $ 150</label>
												<span class="f_rubik float-end">04</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="numthree" class="form-check-input" id="topComnum3">
												<label class="form-check-label f_rubik" for="topComnum3">$ 151 to $ 200</label>
												<span class="f_rubik float-end">03</span>

											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="numfour" class="form-check-input" id="topComnum4">
												<label class="form-check-label f_rubik" for="topComnum4">$ 201 to $ 250</label>
												<span class="f_rubik float-end">01</span>
											</div>
										</div>
										<div class="mb-3">
											<div class="checkbox m-0">
												<input type="checkbox" name="numfive" class="form-check-input" id="topComnum5">
												<label class="form-check-label f_rubik" for="topComnum5">$ 251 to $ 300</label>
												<span class="f_rubik float-end">06</span>
											</div>
										</div>
										<a href="javascript:void(0);">View More</a>
									</form>
								</div>
							</div><!-- /. card -->
						</div><!-- /. joblist_Left -->
					</div><!-- /. grid column -->
					<div class="col-sm-9">
						<form class="form-row d-md-flex" method="post">
							<div class="form-group  mb-3 col-sm-4 dropdown-container position-relative px-1">
								<select name="field" id="field" class="form-control">
									<option value="field">Field</option>
									<option value="webdesigner">Web Desginer</option>
									<option value="webdeveloper">Web Develpoer</option>
									<option value="graphicdesginer">Graphic Desginer</option>
									<option value="accountmanager">Account Manager</option>
									<option value="carmechanic">Car Mechanic</option>
								</select>
							</div>
							<div class="form-group mb-3 col-sm-2 dropdown-container position-relative px-1">
									<select name="year" id="year" class="form-control">
										<option value="year">Year</option>
										<option value="1year">1 Year</option>
										<option value="2year">2 Year</option>
										<option value="4year">4 Year</option>
										<option value="7year">7 Year</option>
										<option value="10year">10 Year</option>
									</select>
							</div>
							<div class="form-group mb-3 col-sm-4 dropdown-container position-relative px-1">
								<select name="location" id="location" class="form-control">
									<option value="location">Loaction</option>
									<option value="newyork">New York</option>
									<option value="losangeles">Los Angeles</option>
									<option value="shicago">Shicago</option>
									<option value="uniteskingdom">United Kingdom</option>
								</select>
							</div>
							<div class="col-sm-2 px-1">
								<div class="d-grid">
								<input type="submit" name="serchbtn" id="searchBtn" class="btn btn-dark btn-block" value="Search">
								</div>
							</div>
						</form>

						<div class="joblist_Right">
							<div class="row pb-5">
								<div class="col-sm-6">
									<div class="card">
										<div class="listIcon">
											<a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											<a href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
										</div>
										<img class="card-img-top mx-auto" src="assets/images/job-listing/company-logo-1.png" alt="Logo">
										<div class="card-body">
											<h4>Job:- Web developer</h4>
											<p class="peraOn">ABC Production</p>
											<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
											<ul class="d-flex justify-content-between list-inline mb-0">
												<li class="list-inline-item pt-2 ">
													<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
													New York
												</li>
												<li class="list-inline-item pull-right">
													<a href="job-details.html" class="btn btn-outline-dark rounded-0">
														Apply Now
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card offset-md-1">
										<div class="listIcon">
											<a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											<a href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
										</div>
										<img class="card-img-top mx-auto" src="assets/images/job-listing/company-logo-2.png" alt="Logo">
										<div class="card-body">
											<h4>Job:- Web developer</h4>
											<p class="peraOn">ABC Production</p>
											<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
											<ul class="d-flex justify-content-between list-inline mb-0">
												<li class="list-inline-item pt-2 ">
													<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
													New York
												</li>
												<li class="list-inline-item pull-right">
													<a href="job-details.html" class="btn btn-outline-dark rounded-0">
														Apply Now
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- /. row -->
							<div class="row pt-4 pb-5">
								<div class="col-sm-6">
									<div class="card">
										<div class="listIcon">
											<a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											<a href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
										</div>
										<img class="card-img-top mx-auto" src="assets/images/job-listing/company-logo-3.png" alt="Logo">
										<div class="card-body">
											<h4>Job:- Web developer</h4>
											<p class="peraOn">ABC Production</p>
											<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
											<ul class="d-flex justify-content-between list-inline mb-0">
												<li class="list-inline-item pt-2 ">
													<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
													New York
												</li>
												<li class="list-inline-item pull-right">
													<a href="job-details.html" class="btn btn-outline-dark rounded-0">
														Apply Now
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card offset-md-1">
										<div class="listIcon">
											<a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											<a href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
										</div>
										<img class="card-img-top mx-auto" src="assets/images/job-listing/company-logo-4.png" alt="Logo">
										<div class="card-body">
											<h4>Job:- Web developer</h4>
											<p class="peraOn">ABC Production</p>
											<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
											<ul class="d-flex justify-content-between list-inline mb-0">
												<li class="list-inline-item pt-2 ">
													<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
													New York
												</li>
												<li class="list-inline-item pull-right">
													<a href="job-details.html" class="btn btn-outline-dark rounded-0">
														Apply Now
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- /. row -->
							<div class="row pt-4 pb-5">
								<div class="col-sm-6">
									<div class="card">
										<div class="listIcon">
											<a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											<a href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
										</div>
										<img class="card-img-top mx-auto" src="assets/images/job-listing/company-logo-5.png" alt="Logo">
										<div class="card-body">
											<h4>Job:- Web developer</h4>
											<p class="peraOn">ABC Production</p>
											<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
											<ul class="d-flex justify-content-between list-inline mb-0">
												<li class="list-inline-item pt-2 ">
													<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
													New York
												</li>
												<li class="list-inline-item pull-right">
													<a href="job-details.html" class="btn btn-outline-dark rounded-0">
														Apply Now
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card offset-md-1">
										<div class="listIcon">
											<a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
											<a href="javascript:void(0);"><i class="fa-regular fa-heart"></i></a>
										</div>
										<img class="card-img-top mx-auto" src="assets/images/job-listing/company-logo-6.png" alt="Logo">
										<div class="card-body">
											<h4>Job:- Web developer</h4>
											<p class="peraOn">ABC Production</p>
											<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
											<ul class="d-flex justify-content-between list-inline mb-0">
												<li class="list-inline-item pt-2 ">
													<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
													New York
												</li>
												<li class="list-inline-item pull-right">
													<a href="job-details.html" class="btn btn-outline-dark rounded-0">
														Apply Now
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- /. row -->
							<div class="row py-4">
								<div class="col-sm-12">
									<nav class="pull-left">
										<ul class="pagination f_rubik">
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
							</div><!-- /. row -->
							<div class="row py-5 interView">
								<div class="col-sm-4">
									<div class="jobImage">
										<div class="image-card">
											<img class="w-100" src="assets/images/job-listing/interview-banner.png" alt="Job">
										</div>
									</div>
								</div>
								<div class="col-sm-8">
									<h1>Tips For <span class="text-red">Interview</span></h1>
									<p>Lorem ipsum adipiscing elit, sed do eiusmod tempor incididunt ut labaore et dolore magna aliqua. Quis ipusm suspendisse. ultrices gravida, Risus commdo. sit  dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labaore et dolore magna aliqua. Quis ipusm suspendisse.
									<a class="readmorelink" href="javascript:void(0);"> Read More</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /. jobListing -->

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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/job-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:12 GMT -->
</html>
