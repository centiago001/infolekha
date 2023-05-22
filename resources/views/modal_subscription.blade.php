@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" >
					
				

				
				<!--end page wrapper -->
				<!--start overlay-->
				<h5>Make Subscriptions </h5>
				
				<hr>
				<div class="overlay toggle-icon"></div>
				<div class="col-md-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<thead>
									<tr>	
										<th>Sr.No.</th>
										<th>Subscriptions</th>  
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Subscription</td>

									<td><div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class="lni lni-cross-circle"></i> Rejected
												
										
										<td>  <button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button>   </td>								
							
									</tr>
							
							
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