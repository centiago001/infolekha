@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-8 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Add Job Type</h5>
								</div>
								<hr>
								<form class="row g-2" method="post" action="{{route('master.update_job')}}">
									@csrf
                                    <input type="hidden" name="id" value="{{$cledit->id}}">
									
						<div class="col-md-2"></div>
									<div class="col-md-4">
										<label for="inputFirstName" class="form-label">Job Type*</label>
										<input type="text" class="form-control" id="inputFirstName" placeholder="Job Type" name="job" value="{{$cledit->job}}">
									</div>
						
									<div class="col-md-3" style="margin-top:5%;" >
								       <button type="submit" class="btn btn-primary px-3"><i class="lni lni-circle-plus"></i>Update  </button>
									</div>
								</form>
		
							</div>
		
						</div>
					</div>
				</div>
				

				
				<!--end page wrapper -->
				<!--start overlay-->
				<div class="overlay toggle-icon"></div>
				<hr/>
				<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sr. No.</th>
										<th>Job Type</th>  
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($cla as $cls)
										
							
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$cls->job}}</td>										
										<td>
											<a href="{{route('master.edit_job',$cls->id)}}">
											<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
											<a href="{{route('master.destroy_job',$cls->id)}}">
											<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> </a>
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
		<!--end page wrapper -->
		@stop