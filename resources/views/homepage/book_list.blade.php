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
													<a data-bs-toggle="modal" href="#file" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add Book</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="table-responsive table-box">
												<table class="table table-center table-hover datatable">
													<thead class="thead-pink">
														<tr>
															<th>Sl</th>
															<th>Book Name</th>
															<th>Author</th>
															<th>Publication</th>
															<th>Genre</th>
															<th>Language</th>
															<th>Country of Origin</th>
															<th>Publication Date</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														@foreach($books as $key=>$bk)
															<tr>
																<td>{{ $key+1 }}</td>
																<td>{{ $bk->book_name }}</td>
																<td>{{ $bk->author_id }}</td>
																<td>{{ $bk->publisher_id }}</td>
																<td>{{ $bk->genre }}</td>
																<td>{{ $bk->language }}</td>
																<td>{{ $bk->country_of_origin }}</td>
																<td>{{ $bk->publication_date }}</td>
																<td>
																	<div class="action">
																		<a data-bs-toggle="modal" href="#edit-file"  class="file-circle me-2"><i class="fas fa-pen"></i></a>
																		<a href="javascript:void(0);" class="file-circle"><i class="fas fa-trash-alt"></i></a>
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
					<h4 class="modal-title">Add Book</h4>
					<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
				</div>
				<div class="modal-body">		
					<form action="" name="publisher_form" id="publisher_form">
						@csrf
						<div class="modal-info">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Book Name</b></label>
										<input name="book_name" id="book_name" type="text" class="form-control">
									</div>
								</div>
							
								<div class="col-md-12">
									<div class="form-group">
										<label><b>Author</b></label>
										<select name="author_name" id="author_name" class="form-control select">
											<option value="">Select an author</option>
											@foreach($authors as $key=>$ath)
											<option value="{{ $ath->author_id }}">{{ $ath->author_name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Publisher</b></label>
										<select name="publisher_name" id="publisher_name" class="form-control select">
											<option value="">Select an publisher</option>
											@foreach($publishers as $key=>$pl)
											<option value="{{ $pl->publisher_id }}">{{ $pl->publisher_name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Genre</b></label>										
										<select name="genre" id="genre" class="form-control select">
											<option value="">Select a genre</option>
											<option value="Novel">Novel</option>
											<option value="Poetry">Poetry</option>
											<option value="Essay">Essay</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Language</b></label>
										<select name="language" id="language" class="form-control select">
											<option value="">Select a language</option>
											<option value="Arabic">Arabic</option>
											<option value="Bengali">Bengali</option>
											<option value="English">English</option>
											<option value="Persian">Persian</option>
											<option value="Urdu">Urdu</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Country of Origin</b></label>
										<select name="country_of_origin" id="country_of_origin" class="form-control select">
											<option value="">Select a country</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="India">India</option>
											<option value="Pakistan">Pakistan</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Publication Date</b></label>
										<input name="publication_date" id="publication_date" type="date" class="form-control">
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