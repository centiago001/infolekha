@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                @include('alerts')
				<div class="row">
					<div class="col-md-8 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Add Brochure</h5>
								</div>
								<hr>
								
								<form class="row g-2" action="{{route('master.create_brochure')}}" method="post" enctype="multipart/form-data">
									@csrf
									
						<div class="col-md-12"></div>
						
							<div class="col-md-6">
							<label for="inputFirstName" class="form-label">Upload Brochure Image</label>
							<input type="file" class="form-control" placeholder="Upload Brochure Image" name="brochure_img">
						</div>
						

						
									<div class="col-md-6" style="margin-top:5%;" >
								       <button type="submit" class="btn btn-primary px-3"><i class="lni lni-circle-plus"></i> Add  </button>
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
										
										<th>Brochure Image</th>
										
										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($brochure as $brochuress)
										
						
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>
                                            {{-- <a href="{{asset('/').$brochuress->broucher_img}}">
											<img height="50px" width="50px"
											src="{{asset('/').$brochuress->broucher_img}}" alt=""> --}}
                                            <a href="{{asset('/').$brochuress->brochure_img}}">
                                                <img height="50px" width="50px"
                                                src="{{asset('/').$brochuress->brochure_img}}" alt="">
										</a>
									</td>	
																	
										<td>
											{{-- <button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button> --}}
											 <a href="{{route('master.edit_brochure',$brochuress->id)}}">
											<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
											<a href="{{route('master.destroy_brochure',$brochuress->id)}}">
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

		
@section('js')
<script>
$(document).ready(function() {
$('.select_box').select2();
ClassicEditor
.create( document.querySelector( '#editor' ) )
.catch( error => {
	console.error( error );
} );
});
</script>
@stop
