@extends('layouts.main')

@section('index_css')
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

	<!-- Aos CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">
@endsection

@section('content')

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
			
@endsection

@section('index_js')
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
@endsection