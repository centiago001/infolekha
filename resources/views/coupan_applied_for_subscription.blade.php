@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-12 mx-auto" >
					
				<div class="card">
					<div class="card-body">
						<div class="card-title d-flex align-items-center">

							<h6>Make Subscriptions</h6>
						</div>
						<hr>
						<form class="row g-2">

							
							<div class="col-md-3">
								<label>Coupon Code</label>
								<input class="form-control mb-3" type="text"
									aria-label="default input example">
							</div>
								<div class="col-md-3">
								<label>Type of Coupon</label>
								<select class="form-select mb-3" aria-label="Default select example">
									<option selected>Select</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="2">3</option>
							
								</select>
							</div>
								<div class="col-md-3">
								<label>Valid From</label>
								<input class="form-control mb-3" type="date"
									aria-label="default input example">
							</div>
							<div class="col-md-3">
								<label>Valid To</label>
								<input class="form-control mb-3" type="date"
									aria-label="default input example">
							</div>
							<div class="col-md-3" style="margin-top:4vh;">
								<div class="col">
									<button type="button" class="btn btn-primary px-5"> <i class="lni lni-circle-plus"></i>Add Coupan</button>
								</div>
							</div>


								<hr>
				<div class="overlay toggle-icon"></div>
				<div class="col-md-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>	
										<th>Sr.No.</th>
										<th>Coupon Code</th> 
										<th>Type Of coupon</th> 
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>67676</td>
										<td>4</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="lni lni-checkmark"></i>Valid</td>
						


										


							           <td>  <button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button>   </td>								
							
									</tr>
									<tr>
										<td>2</td>
										<td>88998</td>
										<td>3</td>

									<td><div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class="lni lni-cross-circle"></i> Invalid
												
										
										<td>  <button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button>   </td>								
							
									</tr>
									<tr>
										<td>3</td>
										<td>88884</td>
										<td>1</td>
										<td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="lni lni-checkmark"></i>Valid</td>
						


										


							           <td>  <button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> <button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button>   </td>								
							
									</tr>
									<tr>
										<td>4</td>
										<td>99990</td>
										<td>3</td>

									<td><div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class="lni lni-cross-circle"></i> Invalid
												
										
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
							
							
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		@stop