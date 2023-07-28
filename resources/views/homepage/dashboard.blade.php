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
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	</head>		
	<body class="dashboard-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
					
			<!-- Start Navigation -->
			<!-- Header -->
			<header class="header header-bg">
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
							<li class="has-submenu">
								<a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li ><a href="index.html">Home</a></li>
									<li><a href="index-2.html">Home-2</a></li>
									<li><a href="index-3.html">Home-3</a></li>
									<li><a href="index-4.html">Home-4</a></li>
									<li><a href="index-5.html">Home-5</a></li>
								</ul>
							</li>
							<li class="has-submenu active">
								<a href="">For Employers<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Freelancer</a>
										<ul class="submenu">
											<li><a href="developer.html">Freelancer</a></li>
											<li><a href="developer-details.html">Freelancer Details</a></li>
										</ul>
									</li>
									<li class="active"><a href="dashboard.html">Dashboard</a></li>	
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
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="bread-crumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<div class="breadcrumb-list">
								<nav aria-label="breadcrumb" class="page-breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html"><img src="{{asset('assets/img/home-icon.svg')}}" alt="Post Author"> Home</a></li>
										<li class="breadcrumb-item" aria-current="page">Employee</li>
										<li class="breadcrumb-item" aria-current="page">Dashboard</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->			
			<div class="content content-page">
				<div class="container-fluid">
					<div class="row">
					
						<!-- sidebar -->
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="user-account-details.html"><img alt="profile image" src="{{asset('assets/img/img-04.jpg')}}" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<a href="user-account-details.html"><h3 class="mb-0">{{auth()->user()->name}}</h3></a>
										<p class="mb-0">@johndaniee</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="dashboard.html" class="nav-link active">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
										</li>
										<li class="nav-item">
											<a href="manage-projects.html" class="nav-link">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="favourites.html" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="review.html" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="chats.html" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="membership-plans.html" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="milestones.html" class="nav-link">
												<i class="material-icons">pie_chart</i> Milestones
											</a>
										</li>
										<li class="nav-item">
											<a href="verify-identity.html" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="deposit-funds.html" class="nav-link">
												<i class="material-icons">wifi_tethering</i> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="profile-settings.html" class="nav-link">
												<i class="material-icons">settings</i> Settings
											</a>
										</li>
										<li class="nav-item">
											<a href="index.html" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a>
										</li>
									</ul>
								</div>
							</div>					
						</div>
						<!-- /sidebar -->
						
						<div class="col-xl-9 col-md-8">
							<div class="dashboard-sec">
								<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Projects Posted</div>
												<div class="dash-widget-count">30</div>
											</div>
											<div class="dash-widget-more">
												<a href="manage-projects.html" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Ongoing Projects</div>
												<div class="dash-widget-count">5</div>
											</div>
											<div class="dash-widget-more">
												<a href="ongoing-projects.html" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="dash-widget">
											<div class="dash-info">
												<div class="dash-widget-info">Completed Projects</div>
												<div class="dash-widget-count">25</div>
											</div>
											<div class="dash-widget-more">
												<a href="completed-projects.html" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Chart Content -->
								<div class="row">
									<div class="col-xl-8 d-flex">
										<div class="card flex-fill">
											<div class="card-header">
												<div class="d-flex justify-content-between align-items-center">
													<h5 class="card-title">Profile Views</h5>
													<div class="dropdown">
														<button class="btn btn-white btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Monthly
														</button>
														<div class="dropdown-menu dropdown-menu-start">
															<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
															<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
															<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">									
												<div id="chartprofile"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 d-flex">
										<div class="card flex-fill">
											<div class="card-header">
												<div class="d-flex justify-content-between align-items-center">
													<h5 class="card-title">Static Analytics</h5>
													<div class="dropdown">
														<button class="btn btn-white btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Monthly
														</button>
														<div class="dropdown-menu dropdown-menu-start">
															<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
															<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
															<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">									
												<div id="chartradial"></div>
												<ul class="static-list">
													<li><span><i class="fas fa-circle text-violet me-1"></i> Applied Jobs</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-pink me-1"></i> Active Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-yellow me-1"></i> Applied Proposals</span> <span class="sta-count">30</span></li>
													<li><span><i class="fas fa-circle text-blue me-1"></i> Bookmarked Projects</span> <span class="sta-count">30</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /Chart Content -->
								
								<!-- Past Earnings -->
								<div class="row">
									<div class="col-md-12">
										<div class="card card-table">
											<div class="card-header">
												<div class="row">
													<div class="col">
														<h4 class="card-title">Recently Posted Jobs</h4>
													</div>
													<div class="col-auto">
														<a href="manage-projects.html" class="btn-right btn btn-sm fund-btn">
															View All 
														</a>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="table-responsive table-job">	
													<table class="table table-hover table-center mb-0">
														<thead class="thead-pink">
															<tr>
																<th>Details</th>
																<th>Job Type</th>
																<th>Budget</th>
																<th>Created on</th>
																<th>Proposals</th>
																<th class="text-end">Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<span class="detail-text">I want some customization and installation on wordpress</span>
																	<span class="d-block text-expiry">Expiring on : February 3, 2019</span>
																</td>
																<td>Full-Time</td>
																<td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
																<td>12 July, 2021</td>
																<td>47</td>
																<td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
															</tr>
															<tr>
																<td>
																	<span class="detail-text">I want some customization and installation on wordpress</span>
																	<span class="d-block text-expiry">Expiring on : February 3, 2019</span>
																</td>
																<td>Full-Time</td>
																<td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
																<td>12 July, 2021</td>
																<td>47</td>
																<td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
															</tr>
															<tr>
																<td>
																	<span class="detail-text">I want some customization and installation on wordpress</span>
																	<span class="d-block text-expiry">Expiring on : February 3, 2019</span>
																</td>
																<td>Full-Time</td>
																<td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
																<td>12 July, 2021</td>
																<td>47</td>
																<td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
															</tr>
															<tr>
																<td>
																	<span class="detail-text">I want some customization and installation on wordpress</span>
																	<span class="d-block text-expiry">Expiring on : February 3, 2019</span>
																</td>
																<td>Full-Time</td>
																<td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
																<td>12 July, 2021</td>
																<td>47</td>
																<td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Past Earnings -->
								
								<div class="row">
									<!-- Plan  Details-->
									<div class="col-xl-6 d-flex">					
										<div class="card flex-fill">
											<div class="card-header">
												<div class="row justify-content-between align-items-center">
													<div class="col">
														<h5 class="card-title">Membership Plan Details</h5>
													</div>
													<div class="col-auto">
														<a href="javascript:void(0);" class="btn-right btn btn-sm fund-btn">
															View 
														</a>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="plan-details">
															<h4>The Ultima</h4>
															<div class="yr-amt">Anually Price</div>
															<h4>$1200</h4>
															<div class="yr-duration">Duration: One Year</div>
															<div class="expiry">Expiry: 24 JAN 2022</div>
															<a href="membership-plans.html" class="btn btn-primary btn-plan">Change Plan</a>
														</div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="plan-feature">
															<ul>
																<li>12 Project Credits</li>
																<li>10 Allowed Services</li>
																<li>20 Days visibility</li>
																<li>5 Featured Services</li>
																<li>20 Days visibility</li>
																<li>30 Days Package Expiry</li>
																<li>Profile Featured</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Plan  Details -->
									
									<!-- Notifications -->
									<div class="col-xl-6 d-flex">					
										<div class="card flex-fill">
											<div class="card-header">
												<div class="row justify-content-between align-items-center">
													<div class="col">
														<h5 class="card-title">Notifications</h5>
													</div>
													<div class="col-auto">
														<a href="freelancer-ongoing-projects.html" class="btn-right btn btn-sm fund-btn">
															View All 
														</a>
													</div>
												</div>
											</div>
											<div class="pro-body p-0">
												<div class="news-feature">
													<img class="avatar-sm rounded-circle" src="{{asset('assets/img/img-02.jpg')}}" alt="User Image">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
												</div>
												<div class="news-feature">
													<img class="avatar-sm rounded-circle" src="{{asset('assets/img/img-03.jpg')}}" alt="User Image">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
												</div>
												<div class="news-feature">
													<img class="avatar-sm rounded-circle" src="{{asset('assets/img/img-04.jpg')}}" alt="User Image">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
												</div>
												<div class="news-feature">
													<img class="avatar-sm rounded-circle" src="{{asset('assets/img/img-05.jpg')}}" alt="User Image">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
												</div>
												<div class="news-feature">
													<img class="avatar-sm rounded-circle" src="{{asset('assets/img/img-01.png')}}" alt="User Image">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
												</div>
											</div>
										</div>
									</div>
									<!-- /Notifications -->
								</div>
								
							</div>								
						</div>								
					</div>					
				</div>
			</div>				
			<!-- /Page Content -->
			
			<!-- Footer -->	
			<footer class="footer">
				<div class="footer-top" >
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
									<div class="banner-content">
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
	  
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Chart JS -->
		<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
		<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}"></script>
		
	</body>
</html>