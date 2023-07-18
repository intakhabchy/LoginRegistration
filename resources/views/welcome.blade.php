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
						<a href="index.html" class="navbar-brand logo">
							<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active has-submenu">
								<a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="active"><a href="index.html">Home</a></li>
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
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
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
					<ul class="nav header-navbar-rht reg-head">												
						<li><a href="register.html" class="reg-btn"><img src="{{asset('assets/img/icon/reg-icon.svg')}}" class="me-1" alt="icon"> Register</a></li>
						<li><a href="login.html" class="log-btn"><img src="{{asset('assets/img/icon/lock-icon.svg')}}" class="me-1" alt="icon"> Login</a></li>
						<li><a href="post-project.html" class="login-btn">Post a Project </a></li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->		

			<!-- Home Banner -->
			<section class="section home-banner row-middle">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-8 col-lg-7">
							<div class="banner-content aos" data-aos="fade-up">
								<div class="rating d-flex">
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<i class="fas fa-star checked"></i>
									<h5>Trused by over 2M+ users</h5> 
								</div>
								<h1>Get the perfect <span class="orange-text"><br>Developers & Projects</span></h1>
								<p>With the world's #1 Developers marketplace</p>
								<form class="form"  name="store" id="store" method="post" action="project.html">
									<div class="form-inner">
										<div class="input-group">
											<span class="drop-detail">
												<select class="form-control select" name="storeID">
													<option value="project.html">Projects</option>
													<option value="developer.html">Freelancers</option>
												</select>
											</span>
											<input type="email" class="form-control" placeholder="Search here">
											<button class="btn btn-primary sub-btn" type="submit">Search Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-lg-5">
							<div class="banner-img aos" data-aos="fade-up">
								<img src="{{asset('assets/img/banner-img.svg')}}" class="img-fluid" alt="banner">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
	
			<!-- Our Feature -->
			<section class="section feature">
				<div class="container">
					<div class="row">					
								
						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="feature-item freelance-count aos" data-aos="fade-up">
								<div class="feature-icon">
									<img src="{{asset('assets/img/icon/icon-01.png')}}" class="img-fluid" alt="">
								</div>
								<div class="feature-content course-count">
									<h3 class="counter-up">9,207</h3>
									<p>Freelance developers</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->
						
						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="feature-item aos" data-aos="fade-up">
								<div class="feature-icon">
									<img src="{{asset('assets/img/icon/icon-02.png')}}" class="img-fluid" alt="">
								</div>
								<div class="feature-content course-count">
									<h3 ><span class="counter-up">6000 </span><span>+</span></h3>
									<p>Projects Added</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->
						
						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="feature-item comp-project aos" data-aos="fade-up">
								<div class="feature-icon">
									<img src="{{asset('assets/img/icon/icon-03.png')}}" class="img-fluid" alt="">
								</div>
								<div class="feature-content course-count">
									<h3 class="counter-up">919,207</h3>
									<p>Completed projects</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->	

						<!-- Feature Item -->
						<div class="col-xl-3 col-md-6">
							<div class="feature-item comp-project aos" data-aos="fade-up">
								<div class="feature-icon">
									<img src="{{asset('assets/img/icon/icon-03.png')}}" class="img-fluid" alt="">
								</div>
								<div class="feature-content course-count">
									<h3 class="counter-up">998</h3>
									<p>Companies Registered</p>
								</div>
							</div>
						</div>
						<!-- /Feature Item -->
												
					</div>
				</div>
			</section>	
			<!-- /Our Feature -->			
			
			<!--- Developed Project  -->
			<section class="section work">
				<div class="container-fluid">
					<div class="row">					
								
						<!-- Feature Item -->
						<div class="col-md-6 work-box bg1">
							<div class="work-content aos" data-aos="fade-up">
								<h2>I need a Developed <span>Project</span></h2>
								<p>Get the perfect Developed project for your budget from our creative community.</p>
								<a href="project.html"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
							</div>
						</div>
						<!-- /Feature Item -->
						
						<div class="col-md-6 work-box want-works bg2">
							<div class="work-content aos" data-aos="fade-up">
								<h2>Find Your Next Great  <span>Job Opportunity!</span></h2>
								<p>Do you want to earn money, find unlimited clients and build your freelance career?</p>
								<a href="developer.html"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--- /Developed Project  -->
			
			<!-- Projects -->
			<section class="section projects">
				<div class="container">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto">
						<div class="section-header text-center aos" data-aos="fade-up">	
							<p>High performing solutions to your requests</p>
							<h2 class="header-title">Get Inspired By Development Projects</h2>
						</div>
					</div>
				</div>
				<div class="row">
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img">
								<a href="project.html"><img src="{{asset('assets/img/project/project-01.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">Android apps</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img" >
								<a href="project.html"><img src="{{asset('assets/img/project/project-02.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">Laravel Projects</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project-Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img">
								<a href="project.html"><img src="{{asset('assets/img/project/project-03.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">React Projects</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img">
								<a href="project.html"><img src="{{asset('assets/img/project/project-04.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">Angular Projects</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img">
								<a href="project.html"><img src="{{asset('assets/img/project/project-05.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">.Net Projects</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img">
								<a href="project.html"><img src="{{asset('assets/img/project/project-06.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">Java Pojects</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img">
								<a href="project.html"><img src="{{asset('assets/img/project/project-07.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">Python Projects</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
					<!--- Project-Item  -->
					<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
						<div class="project-item aos" data-aos="fade-up">
							<div class="project-img">
								<a href="project.html"><img src="{{asset('assets/img/project/project-08.jpg')}}" alt="" class="img-fluid"></a>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="project-content">
									<h4>45</h4>
									<h5><a href="project.html">PHP Development</a></h5>
								</div>
								<div class="pro-icon">
									<div class="project-icon"></div>
								</div>
								<div class="project-content">
									<h4>20</h4>
									<h5><a href="project.html">Developers</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!--- /Project Item  -->
					
				</div>
				
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="see-all aos" data-aos="fade-up"> 
							<a href="project.html" class="btn all-btn">View More Projects</a>
						</div>
					</div>
				</div>
				</div>
			</section>
			<!-- /Projects -->
		
			<!-- Top Instructor -->
			<section class="section developer">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12 mx-auto">
							<div class="section-header aos" data-aos="fade-up">
								<p>Work with talented people at the most affordable price</p>
								<h2 class="header-title">Most Hired Developers</h2>
							</div>
						</div>
					</div>
					<div id="developers-slider" class="owl-carousel owl-theme developers-slider aos" data-aos="fade-up">
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-1.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Dran Gonzalez</a></h3>
									<div class="freelance-specific">React Developer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0 (30)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-2.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Timothy Smith</a></h3>
									<div class="freelance-specific">PHP Developer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">3.5 (25)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-3.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Janet Paden</a></h3>
									<div class="freelance-specific">Graphic Designer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.1 (30)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-4.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">James Douglas</a></h3>
									<div class="freelance-specific">iOS Developer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.3 (31)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-2.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Richard Wilson</a></h3>
									<div class="freelance-specific">UI/UX Designer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.7 (32)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-3.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Richard Wilson</a></h3>
									<div class="freelance-specific">UI/UX Designer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.7 (32)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-4.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Richard Wilson</a></h3>
									<div class="freelance-specific">UI/UX Designer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.7 (32)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-5.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Richard Wilson</a></h3>
									<div class="freelance-specific">UI/UX Designer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.7 (32)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite favourited"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-3.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Richard Wilson</a></h3>
									<div class="freelance-specific">UI/UX Designer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.8 (55)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
						<div class="freelance-widget">
							<div class="freelance-content">
								<a data-toggle="modal" href="#rating" class="favourite"><i class="fas fa-star"></i></a>
								<div class="freelance-img">
									<a href="developer-details.html">
										<img src="{{asset('assets/img/user/avatar-5.jpg')}}" alt="User Image">
										<span class="verified"><i class="fas fa-check-circle"></i></span>
									</a>
								</div>
								<div class="freelance-info">
									<h3><a href="developer-details.html">Richard Wilson</a></h3>
									<div class="freelance-specific">UI/UX Designer</div>
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0 (4)</span>
									</div>
									<div class="freelance-tags">
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI Design</span></a>
										<a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node Js</span></a>
									</div>
									<div class="freelance-blk-location">
										<div class="freelancers-price">$25 Hourly</div>
										<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
									</div>
								</div>
							</div>
							<div class="cart-hover">
								<a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Developer -->
		
			<!-- Review -->
			<section class="section testimonial-section review">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-header aos" data-aos="fade-up">
								<p>High Performing Developers To Your</p>
								<h2 class="header-title">Review of the Users</h2>
							</div>
						</div>
					</div>
					<div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">
								
						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="review.html"><img class="img-fluid" src="{{asset('assets/img/review/review-01.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="review.html">Durso Raeen</a></h3>
									<h5>Project Lead</h5>								
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.7</span>
									</div>
								</div>
								<div class="test-quote-img">
									<img class="img-fluid" src="{{asset('assets/img/test-quote.svg')}}" alt="quote">
								</div>
							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
							</div>
						</div>
						<!-- / Review Widget -->
						
						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="review.html"><img class="img-fluid" src="{{asset('assets/img/review/review-02.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="review.html">Camelia Rennesa</a></h3>
									<h5>Project Lead</h5>								
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">4.8</span>
									</div>
								</div>
								<div class="test-quote-img">
									<img class="img-fluid" src="{{asset('assets/img/test-quote.svg')}}" alt="quote">
								</div>
							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
							</div>
						</div>
						<!-- /Review Widget -->
						
						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="review.html"><img class="img-fluid" src="{{asset('assets/img/review/review-03.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="review.html">Brayan</a></h3>
									<h5>Team Lead</h5>								
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">5.0</span>
									</div>
								</div>
								<div class="test-quote-img">
									<img class="img-fluid" src="{{asset('assets/img/test-quote.svg')}}" alt="quote">
								</div>
							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
							</div>
						</div>
						<!-- /Review Widget -->
						
						<!-- Review Widget -->
						<div class="review-blog">
							<div class="review-top d-flex align-items-center">
								<div class="review-img">
									<a href="review.html"><img class="img-fluid" src="{{asset('assets/img/review/review-02.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="review-info">
									<h3><a href="review.html">Davis Payerf</a></h3>
									<h5>Project Lead</h5>								
									<div class="rating">
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star filled"></i>
										<i class="fas fa-star"></i>
										<span class="average-rating">3.2</span>
									</div>
								</div>
								<div class="test-quote-img">
									<img class="img-fluid" src="{{asset('assets/img/test-quote.svg')}}" alt="quote">
								</div>
							</div>
							<div class="review-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
							</div>
						</div>
						<!-- /Review Widget -->
					</div>
				</div>
			</section>
			<!-- / Review -->
			
			<!-- App Version -->
			<section class="section app-version">
				<div class="container">				
					<div class="row">
						<div class="col-md-6">
							<div class="app-version-img text-center aos" data-aos="fade-up">
								<img class="img-fluid" src="{{asset('assets/img/app-version.png')}}" alt="App">
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center">
							<div class="app-version-blk aos" data-aos="fade-up">
								<h2>Get More In Our Application and Enjoy The Mobile App Version</h2>
								<p>Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in. Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus. Lorem ipsum dolor sit amet consectetur. Nunc </p>
								<h5>Download our Mobile app in Both Platform</h5>
								<div class="app-img-inside">
									<img class="img-fluid" src="{{asset('assets/img/app-01.png')}}" alt="App">
									<img class="img-fluid" src="{{asset('assets/img/app-02.png')}}" alt="App">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /App Version -->
			
			<!-- Company Hire -->
			<section class="section top-company">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="section-header text-center aos" data-aos="fade-up">
								<h6>Top Hiring Company</h6>
							</div>
						</div>
					</div>
					<div id="company-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-01.svg')}}" alt="">
						</div>
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-02.svg')}}" alt="">
						</div>
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-03.svg')}}" alt="">
						</div>
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-04.svg')}}" alt="">
						</div>
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-05.svg')}}" alt="">
						</div>
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-06.svg')}}" alt="">
						</div>
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-03.svg')}}" alt="">
						</div>
						<div class="company-logos">
							<img  src="{{asset('assets/img/company-logo-02.svg')}}" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- / Company Hire -->
		
			<!-- News -->
			<section class="section news">
				<div class="container">				
					<div class="row">
						<div class="col-12">
							<div class="section-header text-center aos" data-aos="fade-up">
								<p>High Performing Developers To Your</p>
								<h2 class="header-title">Feature Blog</h2>
							</div>
						</div>
					</div>
					<div class="row blog-grid-row">
						<div class="col-xl-4 col-md-6 d-flex">
						
							<!-- Blog Post -->
							<div class="blog grid-blog aos" data-aos="fade-up">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="{{asset('assets/img/blog/blog-01.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="developer-details.html"><img src="{{asset('assets/img/img-02.jpg')}}" alt="Post Author"> <span> David Lee</span></a>
											</div>
										</li>
										<li><i class="fas fa-calendar-alt"></i> 4 Oct 2021</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">Your next job starts right here</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in. Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus.</p>
									<div class="blog-read">
										<a href="blog-details.html">Read More <i class="fas fa-arrow-right ms-1"></i></a>
									</div>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-xl-4 col-md-6 d-flex">
						
							<!-- Blog Post -->
							<div class="blog grid-blog aos" data-aos="fade-up">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="{{asset('assets/img/blog/blog-02.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="developer-details.html"><img src="{{asset('assets/img/img-03.jpg')}}" alt="Post Author"> <span> Deborah Angel</span></a>
											</div>
										</li>
										<li><i class="fas fa-calendar-alt"></i> 10 Oct 2021</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">People who completed NAND?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in. Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus.</p>
									<div class="blog-read">
										<a href="blog-details.html">Read More <i class="fas fa-arrow-right ms-1"></i></a>
									</div>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-xl-4 col-md-6 d-flex">
						
							<!-- Blog Post -->
							<div class="blog grid-blog aos" data-aos="fade-up">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="{{asset('assets/img/blog/blog-03.jpg')}}" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="developer-details.html"><img src="{{asset('assets/img/img-04.jpg')}}" alt="Post Author"> <span>Darren Elder</span></a>
											</div>
										</li>
										<li><i class="fas fa-calendar-alt"></i> 3 Nov 2021</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">Kofejob - How to get job through online?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet consectetur. Nunc tristique neque tempor nisl feugiat lectus in. Placerat pharetra eleifend integer integer at. Nunc nunc eu arcu amet faucibus.</p>
									<div class="blog-read">
										<a href="blog-details.html">Read More <i class="fas fa-arrow-right ms-1"></i></a>
									</div>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>					
					</div>		
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="see-all aos" data-aos="fade-up"> 
								<a href="blog-details.html" class="btn all-btn">More Articles</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- / News -->
			
			<!-- News -->
			<section class="section job-register">
				<div class="container">				
					<div class="row">
						<div class="col-12">
							<div class="register-job-blk">
								<div class="job-content-blk aos" data-aos="fade-up">
									<h1>Find Your Next Great Job Opportunity!</h1>
									<p>Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec luctus laoreet.</p>
								</div>
								<div class="see-all mt-0 aos" data-aos="fade-up"> 
									<a href="register.html" class="btn all-btn">Register Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
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
										<a href="index.html" class="menu-logo">
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