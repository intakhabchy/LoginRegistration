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
							@include('homepage.sidebar')
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
															<th>Sl</th>
															<th>Name</th>
															<th>Address</th>
															<th>Phone</th>
															<th>Email</th>
															<th>Contact Person</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														@foreach($publishers as $key=>$pl)
															<tr>
																<td>{{ $key+1 }}</td>
																<td>{{ $pl->publisher_name }}</td>
																<td>{{ $pl->address }}</td>
																<td>{{ $pl->contact_number }}</td>
																<td>{{ $pl->email }}</td>
																<td>{{ $pl->contact_person }}</td>
																<td>
																	<div class="action">
																		<a data-bs-toggle="modal" href="#edit-file"  class="file-circle me-2"><i class="fas fa-pen"></i></a>
		
																		<form action="{{ route('publisherdelete', $pl->publisher_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?')">
																		@csrf
																		@method('DELETE')
																			<button type="submit" class="file-circle">
																				<i class="fas fa-trash-alt"></i>
																			</button>
																		</form>
																	</div>
																</td>
															</tr>
														@endforeach
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<div class="modal fade" id="file">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add Publisher</h4>
					<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
				</div>
				<div class="modal-body">		
					<form action="" name="publisher_form" id="publisher_form">
						@csrf
						<div class="modal-info">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Publisher Name</b></label>
										<input name="publisher_name" id="publisher_name" type="text" class="form-control">
									</div>
								</div>
							
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Address</b></label>
										<input name="publisher_address" id="publisher_address" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Contact Number</b></label>
										<input name="publisher_contact_number" id="publisher_contact_number" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Email</b></label>
										<input name="publisher_email" id="publisher_email" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Website</b></label>
										<input name="publisher_website" id="publisher_website" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Contact Person</b></label>
										<input name="publisher_contact_person" id="publisher_contact_person" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Active</b></label>
										<input name="is_active" id="is_active" type="radio" value="1" class="form-check-input">Yes
										<input name="is_active" id="is_active" type="radio" value="0" class="form-check-input">No
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
		<script>
			$(document).ready(function() {
				$("#publisher_form").submit(function(e) {
					e.preventDefault(); // Prevent the default form submit

					$.ajax({
						type: 'POST',
						url: '{{ route("publishersave") }}',
						data: $(this).serialize(),
						success: function(data) {
							// alert('Data saved successfully');
							alert(data.message);
							// You can do more here if needed
						},
						error: function(error) {
							alert(data.message);
							// alert('An error occurred. Check the console for details.');
							console.log(error);
						}
					});
				});
			});
		</script>
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