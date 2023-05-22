@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
				
				</div>
				

				
				<!--end page wrapper -->
				<!--start overlay-->
				<div class="overlay toggle-icon"></div>
				<h5>Contact</h5>
				<hr/>
				<div class="col-md-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sr. No.</th>
										<th>Name</th>  
										<th>Email</th>
										<th>Contact</th>
										<th>Message</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($cont as $contact)
										
							
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$contact->name}}</td>	
										<td>{{$contact->email}}</td>			
										<td>{{$contact->phone}}</td>
										<td>{{$contact->message}}</td>						
										<td>
											<a href="{{route('destroy_contact',$contact->id)}}">
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