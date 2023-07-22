<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<title>KofeJob</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	</head>		
	<body class="account-page">

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
							<li class="has-submenu">
								<a href="{{ route('homepage') }}">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li ><a href="{{ route('homepage') }}">Home</a></li>
									<li><a href="index-2.html">Home-2</a></li>
									<li><a href="index-3.html">Home-3</a></li>
									<li><a href="index-4.html">Home-4</a></li>
									<li><a href="index-5.html">Home-5</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="">For Employers<i class="fas fa-chevron-down"></i></a>
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
								<a href="">For Freelancer<i class="fas fa-chevron-down"></i></a>
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
							<li class="has-submenu active">
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
					<ul class="nav header-navbar-rht">					
						<li><a href="{{ route('registrationpage') }}" class="reg-btn"><i class="fas fa-user"></i> Register</a></li>
						<li><a href="{{ route('loginpage') }}" class="log-btn"><i class="fas fa-lock"></i> Login</a></li>
						<li><a href="post-project.html" class="login-btn">Post a Project </a></li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Page Content -->
            @yield('content')
			<!-- /Page Content -->
   
			<!-- Footer -->	
			<footer class="footer">
				<div class="footer-top">
					<div class="container">

						<div class="row">
							<div class="col-md-3">
								<h2 class="footer-title">Office Address</h2>
								<div class="footer-address">
									<div class="off-address">
										<p class="mb-2">New York, USA (HQ)</p>
										<address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
										<p>Call: <a href="#"><u>469-537-2410</u> (Toll-free)</a> </p>
									</div>
									<div class="off-address">
										<p class="mb-2">Sydney, Australia </p>
										<address class="mb-0">24 Farrar Parade COOROW WA 6515</address>
										<p>Call: <a href="#"><u>(08) 9064 9807</u> (Toll-free)</a> </p>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Useful Links</h2>
									<ul>
										<li><a href="about.html">About Us</a></li>
										<li><a href="blog-list.html">Blog</a></li>
                                        <li><a href="{{ route('loginpage') }}">Login</a></li>
    									<li><a href="{{ route('registrationpage') }}">Register</a></li>
										<li><a href="forgot-password.html">Forgot Password</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Help & Support</h2>
									<ul>
										<li><a href="chats.html">Chat</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="review.html">Reviews</a></li>
										<li><a href="privacy-policy.html">Privacy Policy</a></li>
										<li><a href="term-condition.html">Terms of use</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Other Links</h2>
									<ul>
										<li><a href="freelancer-dashboard.html">Freelancers</a></li>
										<li><a href="freelancer-portfolio.html">Freelancer Details</a></li>
										<li><a href="project.html">Project</a></li>
										<li><a href="project-details.html">Project Details</a></li>
										<li><a href="post-project.html">Post Project</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">Mobile Application</h2>
									<p>Download our App and get the latest Breaking News Alerts and latest headlines and daily articles near you.</p>
									<div class="row g-2">
										<div class="col">
											<a href="#"><img class="img-fluid" src="{{asset('assets/img/app-store.svg')}}" alt="app-store"></a>
										</div>
										<div class="col">
											<a href="#"><img class="img-fluid" src="{{asset('assets/img/google-play.svg')}}" alt="google-play"></a>
										</div>
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
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2021 All Rights Reserved</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 right-text">
									<div class="social-icon">
										<ul>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
											<li><a href="#" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
										</ul>
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
	  
		<!-- jQuery -->
		<script src="{{ asset('assets/js/jquery-3.6.1.min.js')}}"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Slick JS -->
		<script src="{{ asset('assets/js/slick.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('assets/js/script.js')}}"></script>
		
	</body>
</html>