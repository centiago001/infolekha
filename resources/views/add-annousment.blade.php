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
								
									<h5 class="mb-0 text-primary">Add Announcement</h5>
								</div>
								<hr>
								
								<form class="row g-2" method="post" action="{{route('create_announcement')}}" enctype="multipart/form-data">
									@csrf
									
						{{-- <div class="col-md-1"></div> --}}
						
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Title</label>
										<input type="text" class="form-control" id="announcement" placeholder="Announcement" name="announcement">
									</div>
									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">Date</label>
										<input type="Date" class="form-control" id="announcement" placeholder="Date" name="date">
									</div>


									<div class="col-md-3">
										<label for="inputFirstName" class="form-label">City</label>

										<select class="multiple-select" data-placeholder="Choose anything"  name="city">
										<option value="">Select</option>
                                                @foreach ($city as $city)
                                         <option value="{{ $city->id }}">
                                            {{$city->city}} </option>
                                         @endforeach
                                        </select>         
										</select>
									</div>
									
									{{-- <div class="col-md-3">
										<label for="inputFirstName" class="form-label">City</label>
										
									</div> --}}
									{{-- <div class="col-md-4">
										<label for="inputFirstName" class="form-label">Announcement Text</label>
										<textarea class="form-control"  placeholder="Announcement Text..." rows="3" name="announcement_text"></textarea>
									</div> --}}
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label"></label>
										<textarea  rows="10" cols="10"  class="form-control" id="editor" placeholder="Announcement Text... "
											name="announcement_text"></textarea>
									</div>
			
									{{-- <div class="col-md-4">
										<label for="inputFirstName" class="form-label"> Announcement Image*</label>
										<input type="file" class="form-control" name="announcement_image" multiple>
									</div> --}}
						
									<div class="col-md-2" style="margin-top:5%;" >
								       <button type="submit" class="btn btn-primary px-3"><i class="lni lni-circle-plus" ></i> Add  </button>
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
										<th>Sr.No.</th>
										<th>Title</th>
										<th>City</th> 
										<th>Date</th> 
										<th>Announcement Text</th>
										{{-- <th>Status</th> --}}
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($anu as $anno)
										
				
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$anno->announcement}}</td>
										<td>{{$anno->city}}</td>
										<td>{{$anno->date}}</td>
							
											
										<td>{!!$anno->announcement_image!!}</td> 
										
										{{-- announcement_image=announcement_text --}}


											{{-- <a href="{{asset('/').$anno->announcement_image}}"> 
											<img height="50px" width="50px" src="{{asset('/').$anno->announcement_image}}" alt="" /></a></td>	 --}}
											{{-- <td><div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class="lni lni-cross-circle"></i> Rejected
													
											</td> --}}

										<td>  <button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button>
											<a href="{{route('edit_announcement',$anno->id)}}">
											<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
											<a href="{{route('destroy_announcement',$anno->id)}}">
											<button type="button" class="btn1 btn-outline-danger"><i class='bx bx-trash me-0'></i></button> </a>  </td>
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
