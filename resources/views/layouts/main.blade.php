<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>KofeJob</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
		
		<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
		
		<!-- Aos CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	</head>		
	<body class="home-page bg-one">
		
		<!-- Loader -->
		<div id="global-loader"  >
			<div class="whirly-loader"> </div>
			<div class="loader-img">
				<img src="{{asset('assets/img/load-icon.svg')}}" class="img-fluid" alt="">
			</div>
		</div>
		<!-- Loader -->
		
		<!-- Main Wrapper -->
		<div class="main-wrapper">
					
			<!-- Start Navigation -->
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{ route('homepage') }}" class="navbar-brand logo">
							<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{ route('homepage') }}" class="menu-logo">
								<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active has-submenu">
								<a href="{{ route('homepage') }}">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="active"><a href="{{ route('homepage') }}">Home</a></li>
									<li><a href="index-2.html">Home-2</a></li>
									<li><a href="index-3.html">Home-3</a></li>
									<li><a href="index-4.html">Home-4</a></li>
									<li><a href="index-5.html">Home-5</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">For Employers <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Freelancer</a>
										<ul class="submenu">
											<li><a href="developer.html">Freelancer</a></li>
											<li><a href="developer-details.html">Freelancer Details</a></li>
										</ul>
									</li>
									<li><a href="dashboard.html">Dashboard</a></li>	
									<li><a href="company-profile.html">My Profile</a></li>	
									<li><a href="company-details.html">Company Details</a></li>	
									<li><a href="manage-projects.html">Projects</a></li>
									<li><a href="favourites.html">Favourites</a></li>
									<li><a href="membership-plans.html">Membership</a></li>
									<li><a href="milestones.html">Milestones</a></li>
									<li><a href="chats.html">Chats</a></li>
									<li><a href="review.html">Review</a></li>			
									<li><a href="deposit-funds.html">Payments</a></li>							
									<li><a href="verify-identity.html">Verify Identity</a></li>								
									<li><a href="profile-settings.html">Settings</a></li>								
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">For Freelancer <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Projects</a>
										<ul class="submenu">
											<li><a href="project.html">Projects</a></li>
											<li><a href="project-details.html">Project Details</a></li>
										</ul>
									</li>
									<li><a href="freelancer-dashboard.html">Dashboard</a></li>
									<li><a href="developer-profile.html">My Profile</a></li>	
									<li><a href="developer-details.html">Freelancer Details</a></li>
									<li><a href="freelancer-project-proposals.html">Projects</a></li>
									<li><a href="freelancer-favourites.html">Favourites</a></li>
									<li><a href="freelancer-membership.html">Membership</a></li>
									<li><a href="freelancer-change-password.html">Change Password</a></li>
									<li><a href="freelancer-chats.html">Chats</a></li>
									<li><a href="freelancer-review.html">Review</a></li>			
									<li><a href="freelancer-withdraw-money.html">Payments</a></li>							
									<li><a href="freelancer-verify-identity.html">Verify Identity</a></li>				
									<li><a href="freelancer-profile-settings.html">Settings</a></li>				
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="about.html">About us</a></li>
									<li><a href="blank-page.html">Starter Page</a></li>
									<li><a href="404-page.html">404 Page</a></li>
									<li class="has-submenu">
										<a href="invoices.html">Invoices</a>
										<ul class="submenu">
											<li><a href="freelancer-invoices.html">Invoices</a></li>
											<li><a href="view-invoice.html">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="{{ route('loginpage') }}">Login</a></li>
									<li><a href="{{ route('registrationpage') }}">Register</a></li>
									<li><a href="onboard-screen.html">Onboard Screen</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
									<li><a href="change-password.html">Change Password</a></li>									
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index.html" target="_blank">Admin</a>
							</li>
						</ul>
					</div>		 
					@auth
					<ul class="nav header-navbar-rht">	
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow main-drop account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img src="{{asset('assets/img/img-04.jpg')}}" alt="">
								</span>
								<span>{{auth()->user()->name}}</span>
							</a>
							<div class="dropdown-menu emp">
								<div class="drop-head">Account Details</div>	
								<a class="dropdown-item" href="user-account-details.html"><i class="material-icons">verified_user</i> View profile</a>
								<div class="drop-head">Projects Settings</div>	
								<a class="dropdown-item" href="manage-projects.html"><i class="material-icons">business_center</i> Projects</a>
								<a class="dropdown-item" href="favourites.html"><i class="material-icons">local_play</i> Favourites</a>
								<a class="dropdown-item" href="review.html"><i class="material-icons">pie_chart</i> Reviews</a>
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="profile-settings.html"> <i class="material-icons">settings</i> Profile Settings</a>
								<a class="dropdown-item" href="{{route('logout')}}"><i class="material-icons">power_settings_new</i> Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						<li><a href="post-project.html" class="login-btn">Post a Project </a></li>
					</ul>
					@else
					<ul class="nav header-navbar-rht reg-head">												
						<li><a href="{{ route('registrationpage') }}" class="reg-btn"><img src="{{asset('assets/img/icon/reg-icon.svg')}}" class="me-1" alt="icon"> Register</a></li>
						<li><a href="{{ route('loginpage') }}" class="log-btn"><img src="{{asset('assets/img/icon/lock-icon.svg')}}" class="me-1" alt="icon"> Login</a></li>
						<li><a href="post-project.html" class="login-btn">Post a Project </a></li>
					</ul>
					@endauth

				</nav>
			</header>
			<!-- /Header -->

            @yield('content')

			<!-- Footer -->	
			<footer class="footer">
				<div class="footer-top aos" data-aos="fade-up">
					<div class="container">

						<div class="row">
							<div class="col-xl-3 col-md-6">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Useful Links</h2>
									<ul>
										<li><a href="about.html"><i class="fas fa-angle-right me-1"></i>About Us</a></li>
										<li><a href="blog-list.html"><i class="fas fa-angle-right me-1"></i>Blog</a></li>
										<li><a href="login.html"><i class="fas fa-angle-right me-1"></i>Login</a></li>
										<li><a href="register.html"><i class="fas fa-angle-right me-1"></i>Register</a></li>
										<li><a href="forgot-password.html"><i class="fas fa-angle-right me-1"></i>Forgot Password</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Help & Support</h2>
									<ul>
										<li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Browse Candidates</a></li>
										<li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Employers Dashboard</a></li>
										<li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Job Packages</a></li>
										<li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Jobs Featured</a></li>
										<li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Post A Job</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-2 col-md-6">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Other Links</h2>
									<ul>
										<li><a href="freelancer-dashboard.html"><i class="fas fa-angle-right me-1"></i>Freelancers</a></li>
										<li><a href="freelancer-portfolio.html"><i class="fas fa-angle-right me-1"></i>Freelancer Details</a></li>
										<li><a href="project.html"><i class="fas fa-angle-right me-1"></i>Project</a></li>
										<li><a href="project-details.html"><i class="fas fa-angle-right me-1"></i>Project Details</a></li>
										<li><a href="post-project.html"><i class="fas fa-angle-right me-1"></i>Post Project</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Join our Newsletter</h2>
									<p>We help our customers harness the power of AI to make smarter decisions</p>
									<div class="banner-content aos aos-init aos-animate" data-aos="fade-up">
										<form class="form" name="store" method="post" action="project.html">
											<div class="form-inner">
												<div class="input-group">
													<input type="email" class="form-control" placeholder="Your Email address.....">
													<button class="btn btn-primary sub-btn" type="submit"><i class="fas fa-long-arrow-alt-right long-arrow"></i></button>
												</div>
											</div>
										</form>
									</div>
									<div class="social-icon d-flex">
										<span>Follow us on : </span>
										<ul>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6 ">
									<div class="footer-bottom-logo">
										<a href="{{ route('homepage') }}" class="menu-logo">
											<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
										</a>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 right-text">
									<ul class="nav footer-bottom-nav">
										<li><a href="chats.html">Chat</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="review.html">Reviews</a></li>
										<li><a href="privacy-policy.html">Privacy Policy</a></li>
										<li><a href="term-condition.html">Terms of use</a></li>
									</ul>
									<div class="copyright-text">
										<p class="mb-0">Copyright 2023 © KofeJob. All right reserved. Powered by Dreamguys Technologies</p>
									</div>
								</div>
							</div>
						</div>
						<!-- /Copyright -->						
					</div>
				</div>
				<!-- /Footer Bottom -->				
			</footer>
			<!-- /Footer -->
		
		</div>		
		<!-- /Main Wrapper -->
		<button class="scroll-top scroll-to-target" data-target="html">
			<span class="ti-angle-up"><img src="{{asset('assets/img/icon/top-icon.svg')}}" class="img-fluid" alt=""></span>
		</button>
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Owl Carousel -->
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>	
		
		<!-- counterup JS -->
		<script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
		<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
		
		<!-- Aos -->
		<script src="{{asset('assets/plugins/aos/aos.js')}}"></script>
		
		<!-- Select2 JS -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		
		<!-- Slick JS -->
		<script src="{{asset('assets/js/slick.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>
	</body>
</html>