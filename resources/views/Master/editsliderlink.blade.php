@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                @include('alerts')
				<div class="row">
					<div class="col-md-12 mx-auto" >
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center">
								
									<h5 class="mb-0 text-primary">Add Slider</h5>
								</div>
								<hr>
								
								<form class="row g-2" action="{{route('master.update_slider')}}" method="post" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" name="id" value="{{$editblog->id}}">
									
						<div class="col-md-12"></div>
						
							<div class="col-md-3">
							<label for="inputFirstName" class="form-label">Upload Slider Image</label>
							<input type="file" class="form-control" id="inputFirstName" placeholder="Upload Slider Image" name="slider">
                            <img height="50px" width="50px" src="{{asset('/').$editblog->slider}}" alt="">
						</div>
						<div class="col-md-3">
							<label for="inputFirstName" class="form-label">link</label>
							<input type="text" class="form-control" id="inputFirstName" placeholder="link" name="link" value="{{$editblog->link}}">
						</div>

									{{-- <div class="col-md-4">
										<label for="inputFirstName" class="form-label">Blogs*</label>
										<textarea class="form-control"  placeholder="Blogs..." rows="3" name="blogs"></textarea>
									</div> --}}
						
									<div class="col-md-3" style="margin-top:5%;" >
								       <button type="submit" class="btn btn-primary px-3"><i class="lni lni-circle-plus"></i> Update  </button>
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
				<div class="col-md-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sr. No.</th>
										
										<th>Slider Image</th>
										<th>Link</th>
										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($blogss as $sliderss)
										
						
									<tr>
										<td>{{$loop->index+1}}</td>
										<td><a href="{{asset('/').$sliderss->slider}}">
											<img height="50px" width="50px"
											src="{{asset('/').$sliderss->slider}}" alt="">
											<td>{{$sliderss->link}}</td>
											
	
										</a>
									</td>	
																	
										<td>
											{{-- <button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button> --}}
											 <a href="{{route('master.edit_silder',$sliderss->id)}}">
											<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
											<a href="{{route('master.destroy_slider',$sliderss->id)}}">
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
