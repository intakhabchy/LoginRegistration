@extends('layouts.layoutDashboard')

@section('content')
	<!-- Breadcrumb -->
	<div class="bread-crumb-bar">
		<div class="container">
			<div class="row align-items-center inner-banner">
				<div class="col-md-12 col-12 text-center">
					<div class="breadcrumb-list">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
								<li class="breadcrumb-item" aria-current="page">Employee</li>
								<li class="breadcrumb-item" aria-current="page">Milestones</li>
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
										<i class="material-icons">business_center</i> Book
									</a>
								</li>
								<li class="nav-item">
									<a href="favourites.html" class="nav-link">
										<i class="material-icons">person_pin</i> Autor
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('publisherlist') }}" class="nav-link">
										<i class="material-icons">local_play</i> Publisher
									</a>
								</li>
							</ul>
						</div>
					</div>					
				</div>
				<!-- /sidebar -->
				
				<div class="col-xl-9 col-md-8">
					<nav class="user-tabs mb-4">
						<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
							<li class="nav-item">
								<a class="nav-link" href="view-project-detail.html">Overview & Discussions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="milestones.html">Milestones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="tasks.html">Tasks</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="files.html">Files</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="project-payment.html">Payments</a>
							</li>
						</ul>
					</nav>
					
					<div class="my-projects-view">
						<div class="row">
							<div class="col-lg-12">
								<div class="">
									<div class="card ">
										<div class="card-header">
											<div class="row justify-content-between align-items-center">
												<div class="col">
													<h5 class="card-title">Milestone</h5>
												</div>
												<div class="col-auto">
													<a data-bs-toggle="modal" href="#file" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add Milestone</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-center table-hover mb-0 datatable">
													<thead class="thead-pink">
														<tr>
															<th>Name</th>
															<th>Budget</th>
															<th>Progress</th>
															<th>Start Date</th>
															<th>End Date</th>
															<th>Paid</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Research</td>
															<td>$60</td>
															<td>
																<p class="mb-0 orange-text text-center">25%</p>
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>20th October 2021</td>
															<td>31th October 2021</td>
															<td><span class="badge badge-pill bg-success-dark">Paid</span></td>
															<td><a href="javascript:void(0);"><span class="badge badge-pill bg-grey-light">Pay now</span></a></td>
														</tr>
														<tr>
															<td>Design</td>
															<td>$60</td>
															<td>
																<p class="mb-0 orange-text text-center">50%</p>
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>02th October 2021</td>
															<td>31th October 2021</td>
															<td><span class="badge badge-pill bg-success-dark">Paid</span></td>
															<td><a href="javascript:void(0);"><span class="badge badge-pill bg-pink-dark">Pay now</span></a></td>
														</tr>
														<tr>
															<td>Research</td>
															<td>$60</td>
															<td>
																<p class="mb-0 orange-text text-center">75%</p>
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>05th October 2021</td>
															<td>12th October 2021</td>
															<td><span class="badge badge-pill bg-grey-dark">UnPaid</span></td>
															<td><a href="javascript:void(0);"><span class="badge badge-pill bg-pink-dark">Pay now</span></a></td>
														</tr>
														<tr>
															<td>Development</td>
															<td>$50</td>
															<td>
																<p class="mb-0 orange-text text-center">60%</p>
																<div class="progress progress-md mb-0">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>15th October 2021</td>
															<td>18th October 2021</td>
															<td><span class="badge badge-pill bg-grey-dark">UnPaid</span></td>
															<td><a href="javascript:void(0);"><span class="badge badge-pill bg-pink-dark">Pay now</span></a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>								
					</div>					
				</div>						
			</div>
		</div>
	</div>				
	<!-- /Page Content -->
@endsection