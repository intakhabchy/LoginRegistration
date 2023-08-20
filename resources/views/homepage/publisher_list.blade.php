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
							<a href="user-account-details.html"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
							<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
								<p class="mb-2">Welcome,</p>
								<a href="user-account-details.html"><h3 class="mb-0">John Danie S.</h3></a>
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
								<a class="nav-link" href="milestones.html">Milestones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="tasks.html">Tasks</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="files.html">Files</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="project-payment.html">Payments</a>
							</li>
						</ul>
					</nav>
					
					<!-- project list -->
					<div class="my-projects-view">
						<div class="row">
							<div class="col-lg-12">
								<div class="">
									<div class="card">
										<div class="card-header">
											<div class="row justify-content-between align-items-center">
												<div class="col">
													<h5 class="card-title">Tasks</h5>
												</div>
												<div class="col-auto">
													<a data-bs-toggle="modal" href="#file" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add tasks</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="table-responsive table-box">
												<table class="table table-center table-hover datatable">
													<thead class="thead-pink">
														<tr>
															<th>Task Name</th>
															<th>Milestone</th>
															<th>Due Date</th>
															<th>Description</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Research</td>
															<td>Research</td>
															<td> 20th Oct 2021	 </td>
															<td><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
																<a href="#" class="read-text">Readmore</a>
															</td>
															<td class="text-success">Completed</td>
															<td>
																<div class="action">
																	<a data-bs-toggle="modal" href="#edit-file"  class="file-circle me-2"><i class="fas fa-pen"></i></a>
																	<a href="javascript:void(0);" class="file-circle"><i class="fas fa-trash-alt"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Design</td>
															<td>Design</td>
															<td> 21th Nov 2021 </td>
															<td><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
																<a href="#" class="read-text">Readmore</a>
															</td>
															<td class="text-danger">Todo</td>
															<td>
																<div class="action">
																	<a data-bs-toggle="modal" href="#edit-file" class="file-circle me-2"><i class="fas fa-pen"></i></a>
																	<a href="javascript:void(0);" class="file-circle"><i class="fas fa-trash-alt"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>Development</td>
															<td>Development</td>
															<td> 23rd Nov 2021 </td>
															<td><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
																<a href="#" class="read-text">Readmore</a>
															</td>
															<td class="text-success">Completed</td>
															<td>
																<div class="action">
																	<a data-bs-toggle="modal" href="#edit-file" class="file-circle me-2"><i class="fas fa-pen"></i></a>
																	<a href="javascript:void(0);" class="file-circle"><i class="fas fa-trash-alt"></i></a>
																</div>
															</td>
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