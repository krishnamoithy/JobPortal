<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:35:35 GMT -->
<head>
	<title>company-listing</title>
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


<section class="nearJob pb-4">
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

<section class="company_list">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h3>Company <span class="text-red">Listing</span></h3>
				<div class="row">
					<div class="col-sm-8">
						<div class="row companylistForm">
							<div class="col-sm-6">
								<p class="my-3 f_rubik">Showing All 30 Result</p>
							</div>
							<div class="col-sm-6">
								<form class="form-inline" method="post">
									<div class="form-group align-items-center d-md-flex dropdown-container position-relative">
										<label for="shortBy" class="me-2">Short By:</label>
										<select name="shortby" id="shortBy" class="form-control">
											<option value="oldset">Oldset</option>
										</select>
									</div>
								</form>
							</div>
						</div><!-- /. row -->
						<div class="row companyLeft_list">
							<div class="col-sm-6 mb-4">
								<div class="card">
									<div class="listIcon">
										<a href="#">
										<i class="fa-solid fa-share-nodes"></i>
										</a>
										<a href="#">
										<i class="fa-regular fa-heart"></i>
										</a>
									</div>
									<img class="card-img-top mx-auto" src="assets/images/company-listing/company-logo-1.png" alt="Logo" >
									<div class="card-body">
										<h4>ADC Production</h4>
										<p class="peraOn">Webdesigning</p>
										<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
										<ul class="d-flex justify-content-between list-inline mb-0">
											<li class="list-inline-item pt-2 ">
												<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
												New York
											</li>
											<li class="list-inline-item pull-right">
												<a href="company-details.html" class="btn btn-outline-dark rounded-0">
													Apply Now
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="card offset-1">
									<div class="listIcon">
										<a href="#">
										<i class="fa fa-share-alt" aria-hidden="true"
										></i>
										</a>
										<a href="#"><i class="fa-regular fa-heart"></i></a>
									</div>
									<img class="card-img-top mx-auto" src="assets/images/company-listing/company-logo-2.png" alt="Logo" >
									<div class="card-body">
										<h4>Gentech Production</h4>
										<p class="peraOn">Graphic Company</p>
										<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
										<ul class="d-flex justify-content-between list-inline mb-0">
											<li class="list-inline-item pt-2 ">
												<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
												New York
											</li>
											<li class="list-inline-item pull-right">
												<a href="company-details.html" class="btn btn-outline-dark rounded-0">
													Apply Now
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- /. companyLeft_list -->
						<div class="row companyLeft_list">
							<div class="col-sm-6 mb-4">
								<div class="card">
									<div class="listIcon">
										<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
										<a href="#"><i class="fa-regular fa-heart"></i></a>
									</div>
									<img class="card-img-top mx-auto" src="assets/images/company-listing/company-logo-3.png" alt="Logo" >
									<div class="card-body">
										<h4>Lv Build Company</h4>
										<p class="peraOn">Steel Company</p>
										<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
										<ul class="d-flex justify-content-between list-inline mb-0">
											<li class="list-inline-item pt-2 ">
												<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
												New York
											</li>
											<li class="list-inline-item pull-right">
												<a href="company-details.html" class="btn btn-outline-dark rounded-0">
													Apply Now
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="card offset-1">
									<div class="listIcon">
										<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
										<a href="#"><i class="fa-regular fa-heart"></i></a>
									</div>
									<img class="card-img-top mx-auto" src="assets/images/company-listing/company-logo-4.png" alt="Logo" >
									<div class="card-body">
										<h4>Hightech Pvt. Ltd</h4>
										<p class="peraOn">Cloth Company</p>
										<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
										<ul class="d-flex justify-content-between list-inline mb-0">
											<li class="list-inline-item pt-2 ">
												<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
												New York
											</li>
											<li class="list-inline-item pull-right">
												<a href="company-details.html" class="btn btn-outline-dark rounded-0">
													Apply Now
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- /. companyLeft_list -->
						<div class="row companyLeft_list">
							<div class="col-sm-6 mb-4">
								<div class="card">
									<div class="listIcon">
										<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
										<a href="#"><i class="fa-regular fa-heart"></i></a>
									</div>
									<img class="card-img-top mx-auto" src="assets/images/company-listing/company-logo-5.png" alt="Logo" >
									<div class="card-body">
										<h4>K.v Graphic Company</h4>
										<p class="peraOn">Graphic Company</p>
										<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
										<ul class="d-flex justify-content-between list-inline mb-0">
											<li class="list-inline-item pt-2 ">
												<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
												New York
											</li>
											<li class="list-inline-item pull-right">
												<a href="company-details.html" class="btn btn-outline-dark rounded-0">
													Apply Now
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4">
								<div class="card offset-1">
									<div class="listIcon">
										<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
										<a href="#"><i class="fa-regular fa-heart"></i></a>
									</div>
									<img class="card-img-top mx-auto" src="assets/images/company-listing/company-logo-6.png" alt="Logo" >
									<div class="card-body">
										<h4>Jetter Creations</h4>
										<p class="peraOn">Export Company</p>
										<p>Lorem ipsum dolor tsit amet, consectetur adipiscing elit, sed to eiusmod laliqua.</p>
										<ul class="d-flex justify-content-between list-inline mb-0">
											<li class="list-inline-item pt-2 ">
												<i class="fa fa-map-marker me-1" aria-hidden="true"></i>
												New York
											</li>
											<li class="list-inline-item pull-right">
												<a href="company-details.html" class="btn btn-outline-dark rounded-0">
													Apply Now
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- /. companyLeft_list -->

						<div class="row py-4">
							<div class="col-sm-12 pt-3">
								<nav class="pull-left">
								  <ul class="pagination f_rubik">
									<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								  </ul>
								</nav>
								<p class="showing">Showing 6 out of 30</p>
							</div>
						</div>
					</div><!-- /. grid column -->

					<div class="col-sm-4">
						<!--<button type="submit" class="btn btn-outline-dark btn-block form-control mb-1" id="search">
							<i class="fa fa-search mr-2" aria-hidden="true"></i> Search
						</button>-->

						<div class="latestForm srchBar">
							<form method="post">
								<div class="form-group">
									<input type="search" name="search" id="search" class="form-control" value="" required>
									<label class="form-control-placeholder" for="search">
										<i class="fa fa-search iconSet" aria-hidden="true"></i>
										Search
									</label>
								</div>
							</form>
						</div>


						<div class="companyRight_list">
					<div class="accordion" id="accordionJob">
								<div class="accordion-item card">
									<div class="accordion-header" id="headingOne">
										<h2 class="mb-0">
											<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
												Employer Category
												<i class="fa fa-angle-down fa-lg fs-5 float-end mt-2"></i>
											</a>
										</h2>
									</div>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionJob">
										<div class="accordion-body">
											<form method="post">
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat1" checked>
														<label class="form-check-label" for="jobCat1">Accounting Gst</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat2" checked>
														<label class="form-check-label" for="jobCat2">Developer Manager</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat3">
														<label class="form-check-label" for="jobCat3">Educations Chancellor</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat4">
														<label class="form-check-label" for="jobCat4">Media & News</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat5">
														<label class="form-check-label" for="jobCat5">Restaurents Manager</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat6">
														<label class="form-check-label" for="jobCat6">Medical Assistant</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat7">
														<label class="form-check-label" for="jobCat7">Technology Backend</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobCat8">
														<label class="form-check-label" for="jobCat8">Technology Frontier</label>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div><!-- /. accordion -->
							<div class="accordion mb-0" id="accordionJob2">
								<div class="accordion-item card">
									<div class="accordion-header" id="headingtwo">
										<h2 class="mb-0">
											<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsetwo">
												Employer Location
												<i class="fa fa-angle-down fa-lg fs-5 float-end mt-2"></i>
											</a>
										</h2>
									</div>
									<div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingtwo" data-bs-parent="#accordionJob">
										<div class="accordion-body">
											<form method="post">
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc1" checked>
														<label class="form-check-label" for="jobLoc1">New York</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc2" checked>
														<label class="form-check-label" for="jobLoc2">Wasington City</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc3">
														<label class="form-check-label" for="jobLoc3">Las Vegas</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc4">
														<label class="form-check-label" for="jobLoc4">Los Angles</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc5">
														<label class="form-check-label" for="jobLoc5">United Kingdom</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc6">
														<label class="form-check-label" for="jobLoc6">Wales</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc7">
														<label class="form-check-label" for="jobLoc7">Sydney</label>
													</div>
												</div>
												<div class="form-check mb-3">
													<div class="checkbox">
														<input type="checkbox" name="jobcategories" class="form-check-input" id="jobLoc8">
														<label class="form-check-label" for="jobLoc8">Francisco</label>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div><!-- /. accordion -->
						</div>
						<div class="row py-3 rightcandi lft">
							<div class="col-sm-12">
								<div class="jobImage">
									<div class="image-card">
										<img class="w-100" src="assets/images/company-listing/add-banner.png" alt="Banner">
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
						<!-- /. companyRight_list -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /. company_list -->

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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/new/company-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 08:36:09 GMT -->
</html>
