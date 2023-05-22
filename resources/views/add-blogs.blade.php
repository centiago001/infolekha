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
								
									<h5 class="mb-0 text-primary">Add Blogs</h5>
								</div>
								<hr>
							
								<form class="row g-2" action="{{route('create_blog')}}" method="post" enctype="multipart/form-data">
									@csrf
									
						<div class="col-md-12"></div>
						
							<div class="col-md-3">
								<label for="inputFirstName" class="form-label">Title</label>
								<input type="text" class="form-control" placeholder="Title" name="title" >
							</div>
							<div class="col-md-3">
								<label for="inputFirstName" class="form-label">Author Name</label>
								<input type="text" class="form-control" placeholder="Author Name" name="author_name" >
							</div>
							<div class="col-md-3">
								<label for="inputFirstName" class="form-label">Publish Date</label>
								<input type="date" class="form-control" placeholder="Publish Date" name="publish_date" >
							</div>
							<div class="col-md-3">
							<label for="inputFirstName" class="form-label">Upload Blog Image</label>
							<input type="file" class="form-control" id="inputFirstName" placeholder="" name="blog_image">
						</div>
						<div class="col-md-12">
							<label for="inputFirstName" class="form-label"></label>
							<textarea  rows="5" cols="10"  class="form-control" id="editor" placeholder="Blogs "
								name="blogs"></textarea>
						</div>

									{{-- <div class="col-md-4">
										<label for="inputFirstName" class="form-label">Blogs*</label>
										<textarea class="form-control"  placeholder="Blogs..." rows="3" name="blogs"></textarea>
									</div> --}}
						
									<div class="col-md-3" style="margin-top:5%;" >
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
				<div class="col-md-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sr. No.</th>
										<th>Title</th>
										<th>Author Name</th>
										<th>Publish Date</th>
										<th>Upload Blog Image</th>

										{{-- <th>Blog Image</th> --}}
										<th>Blog</th>  
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($blog as $bl)
										
						
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$bl->title}}</td>	
										<td>{{$bl->author_name}}</td>
										<td>{{$bl->publish_date}}</td>
										<td><a href="{{asset('/').$bl->blog_image}}">
											<img height="50px" width="50px"
											src="{{asset('/').$bl->blog_image}}" alt="">
											
											
											<td>{!!$bl->blogs!!}</td>
	
											{{-- asset me public nahi lagya isliye public nahi lena hai --}}
										</a>
									</td>	
																	
										<td>
											<button type="button" class="btn"><div class="form-check form-switch">  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">  </div>	</button>
											 <a href="{{route('edit_blog',$bl->id)}}">
											<button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
											<a href="{{route('destroy_blog',$bl->id)}}">
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
