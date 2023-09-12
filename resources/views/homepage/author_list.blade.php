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
													<a data-bs-toggle="modal" href="#file" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add Author</a>
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
															<th>Country</th>
															<th>Website</th>
															<th>Date of Birth</th>
															<th>Date of Death</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														@foreach($authors as $key=>$ath)
															<tr>
																<td>{{ $key+1 }}</td>
																<td>{{ $ath->author_name }}</td>
																<td>{{ $ath->country }}</td>
																<td>{{ $ath->website }}</td>
																<td>{{ $ath->date_of_birth }}</td>
																<td>{{ $ath->date_of_death }}</td>
																<td>
																	<div class="action">
																	<a data-id="{{ $ath->author_id }}" data-bs-toggle="modal" href="#edit-file" class="file-circle me-2" onclick="getAuthorInfo(this)"><i class="fas fa-pen"></i></a>

																		<form action="{{ route('authordelete', $ath->author_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?')">
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
					<h4 class="modal-title">Add Author</h4>
					<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
				</div>
				<div class="modal-body">		
					<form action="" name="author_form" id="author_form">
						@csrf
						<div class="modal-info">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Author Name</b></label>
										<input name="author_name" id="author_name" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Country</b></label>
										<input name="author_country" id="author_country" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Website</b></label>
										<input name="author_website" id="author_website" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Date of Birth</b></label>
										<input name="author_dob" id="author_dob" type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Date of Death</b></label>
										<input name="author_dod" id="author_dod" type="date" class="form-control">
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
				$("#author_form").submit(function(e) {
					e.preventDefault(); // Prevent the default form submit
					
					$.ajax({
						type: 'POST',
						url: '{{ route("authorsave") }}',
						data: $(this).serialize(),
						success: function(data) {
							// alert('Data saved successfully');
							alert(data.message);
							// You can do more here if needed
						},
						error: function(jqXHR, textStatus, errorThrown) {
							if (jqXHR.status === 422) {
								// Validation errors occurred
								var errors = jqXHR.responseJSON.errors;

								// Loop through and display them
								$.each(errors, function(key, value) {
									console.log(key + ": " + value);
									// Here, you can also add the errors to your form, so the user knows what they need to fix
								});
							} else {
								// Some other error occurred. Handle it or display a generic error message
							}
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
				<form action="" name="edit_author_form" id="edit_author_form">
						@csrf
						<div class="modal-info">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Author Name</b></label>
										<input name="edit_author_id" id="edit_author_id" type="hidden" class="form-control">
										<input name="edit_author_name" id="edit_author_name" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Country</b></label>
										<input name="edit_author_country" id="edit_author_country" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Website</b></label>
										<input name="edit_author_website" id="edit_author_website" type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Date of Birth</b></label>
										<input name="edit_author_dob" id="edit_author_dob" type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Date of Death</b></label>
										<input name="edit_author_dod" id="edit_author_dod" type="date" class="form-control">
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
	<script>
		function getAuthorInfo(element)
		{
			var idValue = $(element).data('id');

			$.ajax({
				url: '/author_info?id=' + idValue,
				method: 'GET',
				success: function(response) {
					$('#edit_author_id').val(response.author.author_id);
					$('#edit_author_name').val(response.author.author_name);
					$('#edit_author_country').val(response.author.country);
					$('#edit_author_website').val(response.author.website);

					const author_dob = new Date(response.author.date_of_birth);
					const author_dob_format = author_dob.toISOString().split('T')[0];  // This will get "2023-08-30"
					document.getElementById('edit_author_dob').value = author_dob_format;

					const author_dod = new Date(response.author.date_of_death);
					const author_dod_format = author_dod.toISOString().split('T')[0];  // This will get "2023-08-30"
					document.getElementById('edit_author_dod').value = author_dod_format;
				},
				error: function(error) {
					console.error('Error:', error);
				}
			});
		}
	</script>
@endsection