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
													<a data-bs-toggle="modal" href="#file" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add Publisher</a>
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

	<!-- The Modal -->
	<div class="modal fade" id="file">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add Publisher</h4>
					<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
				</div>
				<div class="modal-body">		
					<form action="tasks.html">
						<div class="modal-info">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Publisher Name</b></label>
										<input type="text" class="form-control">
									</div>
								</div>
							
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Address</b></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Contact Number</b></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Email</b></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Website</b></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Contact Person</b></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Active</b></label>
										<input type="radio" class="form-check-input">Yes
										<input type="radio" class="form-check-input">No
									</div>
								</div>
							</div>
						</div>
						<div class="submit-section text-end">
							<button type="submit" class="btn btn-primary submit-btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /The Modal -->

	<!-- The Modal -->
	<div class="modal fade" id="edit-file">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Files</h4>
					<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
				</div>
				<div class="modal-body">		
					<form action="tasks.html">
						<div class="modal-info">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Add Task</label>
										<input type="text" class="form-control" value="Research">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Select Milestone</label>
										<input type="text" class="form-control"  value="Research">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Due Date</label>
										<input type="text" class="form-control"  value="20th October 2021">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</textarea>
									</div>
								</div>
								<div class="col-md-6">
									<select class="form-control select">
										<option>To do </option>
										<option selected>Completed</option>
									</select>
								</div>
							</div>
						</div>
						<div class="submit-section text-end">
							<button type="submit" class="btn btn-primary submit-btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /The Modal -->
   
@endsection