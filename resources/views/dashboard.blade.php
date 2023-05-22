@extends('layout')
@section('content')
		<!--start page wrapper -->

		<div class="page-wrapper">
			<div class="page-content">



				<!--end row-->
				<h6 class="mb-0 text-uppercase"></h6>

				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Schools</p>
										<h4 class="my-1">{{$school_data_count}}</h4>
										<p class="mb-0 font-13 text-success">
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i
											class="fadeIn animated bx bx-buildings"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Colleges</p>
										<h4 class="my-1">{{$college_data_count}}</h4>

									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i
											class="fadeIn animated bx bx-buildings"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Institutions</p>
										<h4 class="my-1">{{$institute_data_count}}</h4>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i
											class="fadeIn animated bx bx-buildings"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Parents/Students</p>
										<h4 class="my-1">{{$student_data_count}}</h4>
									</div>
									<div class="widgets-icons bg-light-info text-info ms-auto"><i
											class='bx bxs-group'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Approved Announcements</p>
										<h4 class="my-1">0</h4>
										<p class="mb-0 font-13 text-success">
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i
											class="lni lni-checkmark"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Rejected Announcements</p>
										<h4 class="my-1">0</h4>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i
											class="lni lni-cross-circle"></i>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Approved Ads</p>
										<h4 class="my-1">0</h4>
										<p class="mb-0 font-13 text-success">
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i
											class="lni lni-checkmark"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Rejected Ads</p>
										<h4 class="my-1">0</h4>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i
											class="lni lni-cross-circle"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-md-12">
					<h6 class="mb-0 text-uppercase"></h6>
					<hr />
					<div class="card">
						<div class="card-body">
							<ul class="nav nav-tabs nav-primary" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
										aria-selected="true">
										<div class="d-flex align-items-center">
											<div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
											</div>
											<div class="tab-title">School/College/Institution</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab"
										aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
											</div>
											<div class="tab-title">Student/Parent</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab"
										aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
											</div>
											<div class="tab-title">Tutor/Faculty</div>
										</div>
									</a>
								</li>
							</ul>
							<div class="tab-content py-3">
								<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
									<!-- <div class="col-md-12 mx-auto" >
											<div class="card">
												<div class="card-body">
													<div class="card-title d-flex align-items-center">
													
														<h5 class="mb-0 text-primary">Bounce EMI</h5>
													</div>
													<hr>
													<form class="row g-2">
													
														<div class="col-md-3">
															<label>Due Date</label>
															<input type="date" class="form-control">
														</div>
	
														
														<div class="col-md-3">
															<label>Due Date</label>
															<input type="date" class="form-control">
														</div>
	
													
														<div class="col-md-3">
															<label>Select Customer</label>
															<select class="form-select mb-3"
																aria-label="Default select example">
																<option selected>Select Customer</option>
																<option></option>
	
															</select>
	
														</div>
	
														<div class="col-md-3" style="padding:8px; margin-top:1.8%;" >
															<button type="submit" class="btn btn-primary px-3"><i class="lni lni-eye"></i>Show</button>
														</div>
													</form>
							
												</div>
							
											</div>
										</div> -->
									<div class="col-md-12">
										<div class="card">
											<div class="card-body">
												<div class="table-responsive">
													<table id="example" class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>Sr.No.</th>
																<th>Name of School/College/Institution </th>
																<th>Contact No</th>
                                                                <th>Email</th>
																<th>Entity Name</th>
																<th>Activation/Deactivation</th>
																<th style="background-color: #ffff;">Action</th>
															</tr>
														</thead>
														<tbody>
															@foreach( $school_institute_data as $dt)
															<tr>
																<td>{{$loop->index+1}}</td>
																<td>
																	<div class="tooltip-wrap2">{{$dt->r_name}}
																		<div class="tooltip-content2">

																			<label><b>Sr.No</b>:{{$dt->id}}</label><br>
																			<label><b>Name of School/College/Institution:</b>{{$dt->r_name}}</label><br>
																			<label><b>Name of Entity:</b>{{$dt->r_name}}</label><br>
																			<label><b>Contact Person:</b>{{$dt->r_contact_person}}</label><br>
																			<label><b>Mobile No.:</b>{{$dt->r_mob}}</label><br>
																			<label><b>Email Id:</b>{{$dt->email}}</label><br>																					
																			<label><b>Address:</b>{{$dt->address}}</label><br>
																			
												
																		</div>
																	</div>
																</td>
																<td>
																	<div class="tooltip-wrap3">{{$dt->mob}}
																		<!-- <div class="tooltip-content3">

																			<label><b>Sr.No</b>:{{$dt->id}}</label><br>
																			<label><b>Name of School/College/Institution:</b>{{$dt->entity_name}}</label><br>																			
																			<label><b>Address:</b>{{$dt->address}}</label><br>
																			<label><b>About School/College/Institution:</b>{{$dt->about}}</label><br>
																					
																			<label><b>Pin Code:</b>{{$dt->pin_code}}</label><br>
																			<label><b>Operating Since:</b>{{$dt->oprating_since}}</label><br>
																			<label><b>Registration No:</b>{{$dt->registration_no}}</label><br>
																			<label><b>Contact No:{{$dt->mob}}</b></label><br>
																			<label><b>Email Id:</b>{{$dt->email}}</label><br>
																					
																			<label><b>Website:</b>{{$dt->website}}</label><br>
																			<label><b>Facebook</b>{{$dt->fb}}</label><br>
																			<label><b>Instagram:</b>{{$dt->insta}}</label><br>
																			<label><b>Google Business:</b>{{$dt->google}}</label><br>
																			<label><b>Youtube:</b>{{$dt->yt}}</label><br>
																			<label><b>Entity Name:</b> {{$dt->entity_select}}</label><br>
																				
																			
																			<label><b>Cources:</b>{{$dt->course}}</label><br>

																			<label><b>Office Timing:</b>{{$dt->opening_time}}/{{$dt->closing_time}}</label><br>
																			<label><b>Facilities:</b>{{$dt->facilities}}</label><br>
																			<label><b>Photos of School:</b>{{$dt->image}}</label><br>
																			<label><b>Videos of School:</b>{{$dt->video}}</label>
																			
																		</div> -->
																	</div>
																</td>


																<td>
															<!-- @if($dt->subscription_status == 1)
																	<div
																		class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
																		<i class="lni lni-checkmark"></i>Successful </div>
																	@else
																	<div
																		class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
																		<i class="lni lni-close"></i> Not Applicable</div>
																	@endif -->
																	{{$dt->email}}
															</td>
															
                                                            <td>{{$dt->r_entity}}</td>
															<td>
															<!-- @if($dt->subscription_status == 1)	
															        @if($dt->active == 1)
															        <div id="state_activation{{$dt->id}}">
																	<div 
																		class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
																		<i class="lni lni-checkmark"></i> Accepted</div> </div>
																	@else
																	<div id="state_activation">
																	<div 
																		class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3">
																		<i class="lni lni-ban"></i> Deactivate</div></div>
																	@endif
															@else
															<div id="state_activation">
																<div 
																	class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
																	<i class="lni lni-ban"></i> Deactivate</div></div>
																	@endif -->

																	<button
																		type="button" class="btn">
																		<div class="form-check form-switch"><input 
																			class="form-check-input " type="checkbox" value="{{$dt->id}}"  
																			id="id{{$dt->id}}"
																			@if($dt->active == 1) checked='true' @endif >  </div>
																	</button>
															</td>



																<td style="background-color: #ffff;"><button type="button"
																		class="btn1 btn-outline-success"><i
																			class='bx bx-edit-alt me-0'></i></button>
																	<button type="button"
																		class="btn1 btn-outline-danger"><i
																			class='bx bx-trash me-0'></i></button> </td>

															</tr>
															@endforeach


														</tbody>
													</table>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="tab-pane fade" id="primaryprofile" role="tabpanel">

									<div class="col-md-12">
										<div class="card">
											<div class="card-body">
												<div class="table-responsive">
													<table id="example1" class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>Sr.No.</th>
																<th>Name Student/Parent </th>
																<th>Contact No.</th>
																<th>Email</th>
																<th style="background-color: #ffff;">Action</th>
															</tr>
														</thead>
														<tbody>
															@foreach( $student_data as $dt)
															<tr>
																<td>{{$loop->index+1}}</td>
																<td>
																	<div class="tooltip-wrap2">{{$dt->r_name}}
																		<div class="tooltip-content2">

																			<label><b>Sr.No</b>:{{$dt->id}}</label><br>
																			<label><b>Name of Student/Parent:</b>{{$dt->r_name}}</label><br>
																					
																			<label><b>Name of Current School/College:</b>{{$dt->r_current_school_institute}}</label><br>
																					
																			<label><b>Contact Person:</b>{{$dt->r_name}}</label><br>
																				
																			<label><b>Mobile No.:</b>{{$dt->mob}}</label><br>
																					
																			<label><b>Email Id:</b>{{$dt->email}}</label><br>
																					
																			
																			
																			
																		</div>
																	</div>


												</div>
												</td>
												<td>
													<div class="tooltip-wrap3">{{$dt->mob}}
														
													</div>
												</td>


												<td>
													{{$dt->email}}
												            <!-- @if($dt->active == 1)
																	<div
																		class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
																		<i class="lni lni-checkmark"></i> Accepted</div>
																	@else
																	<div
																		class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
																		<i class="lni lni-checkmark"></i> Deactivate</div>
																	@endif -->
												</td>



												<td style="background-color: #ffff;"><button type="button" class="btn1 btn-outline-success"><i
															class='bx bx-edit-alt me-0'></i></button> <button
														type="button" class="btn1 btn-outline-danger"><i
															class='bx bx-trash me-0'></i></button> </td>

												</tr>
												@endforeach


												</tbody>
												</table>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="tab-pane fade" id="primarycontact" role="tabpanel">

								<div class="col-md-12">
									<div class="card">
										<div class="card-body">
											<div class="table-responsive">
												<table id="example3" class="table table-striped table-bordered">
													<thead>
														<tr>
															<th>Sr.No.</th>
															<th>Name of Tutor</th>
															<th>Mobile</th>
															<th>Email</th>
															<th>Activation/Deactivation</th>
															<th style="background-color: #ffff;">Action</th>
														</tr>
													</thead>
													<tbody>
														@foreach($tutor_data as $dt)
														<tr>
															<td>{{$loop->index+1}}</td>
															<td>
																<div class="tooltip-wrap2">{{$dt->name}}
																	<div class="tooltip-content2">

																		<label><b>Sr.No</b>:{{$dt->id}}</label><br>
																		<label><b>Name of Tutor/Faculty</b>{{$dt->r_name}}</label><br>
																		<label><b>Mobile No.: </b>{{$dt->mob}}</label><br>
																		<label><b>Email Id:</b>{{$dt->email}}</label><br>
																		<label><b>State:</b></label><br>
																		<label><b>City:</b></label><br>
																		
																		
																	</div>
																</div>
															</td>
															<td>
																<div class="tooltip-wrap3">{{$dt->mob}}
																	<!-- <div class="tooltip-content3">

																		<label><b>Sr.No</b>:{{$dt->id}}</label><br>
																		<label><b>Name of Tutor:</b>{{$dt->name}}</label><br>
																		<label><b>Subject:</b>{{$dt->subject}}</label><br>
																		<label><b>Years of Experience:</b>{{$dt->experiance}}</label><br>
																		<label><b>Email Id:</b>{{$dt->email}}</label>
																		<label><b>Address:</b>{{$dt->address}}</label><br>
																		<label><b>Job Type:</b>{{$dt->job_type}}</label>
																		
																		<label><b>Pin Code:</b>{{$dt->pin_code}}</label><br>

																	</div> -->
																</div>
															</td>
															<td>
															<!-- @if($dt->subscription_status == 1)
																	<div
																		class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
																		<i class="lni lni-checkmark"></i>Successful </div>
																	@else
																	<div
																		class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
																		<i class="lni lni-close"></i> Not Applicable</div>
																	@endif -->
																	{{$dt->email}}
															</td>
															

															<td>
															<!-- @if($dt->subscription_status == 1)	
															        @if($dt->active == 1)
															
																	<div
																		class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
																		<i class="lni lni-checkmark"></i> Accepted</div>
																	@else
																	<div
																		class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3">
																		<i class="lni lni-ban"></i> Deactivate</div>
																	@endif
															@else
																<div
																	class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">
																	<i class="lni lni-ban"></i> Deactivate</div>
																	@endif -->

																	<button type="button" value="{{$dt->id}}" 
																	class="btn">
																	<div class="form-check form-switch"> 
																		<input 
																			class="form-check-input " type="checkbox" value="{{$dt->id}}"  
																			id="id{{$dt->id}}"
																			@if($dt->active == 1) checked='true' @endif > </div> 
																</button>
															</td>



															<td style="background-color: #ffff;"><button type="button"
																	class="btn1 btn-outline-success"><i
																		class='bx bx-edit-alt me-0'></i></button>
																<button type="button" class="btn1 btn-outline-danger"><i
																		class='bx bx-trash me-0'></i></button> </td>

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


		

		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"  id="m3" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body"> <span id="text">Are you sure for activate this account of id.

													</span><span id="id_val"></span></div>
                                                    <div class="modal-footer">
                                                         <button type="button" id="m1" class="btn btn-secondary " data-bs-dismiss="modal">
															Close</button>
                                                         <button type="button" id="m2" class="btn btn-primary "  data-bs-dismiss="modal">Ok

														 </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


















@stop
	

		<!--end page wrapper -->
		@section('js')
		<script>
			
		
				$(document).on('click',".form-check-input", function() {
			

			let variable_id=$(this).attr("id");
		  
		   const a=$(String('#'+variable_id));
		   $("#id_val").text(a.val());
		  if(a.is(':Checked')){
			  $('#exampleModal').modal({
				  keyboard:false,
				  backdrop:"static"
			  });
			  $("#text").html("Are You Sure For <span id='action'>Activate</span> This Account Of Id.");
			  $('#exampleModal').modal('show');
			  
			  
			  
			  
		  }
		  else{

			  $('#exampleModal').modal({
				  keyboard:false,
				  backdrop:"static"
			  });
			  $("#text").html("Are You Sure For <span id='action'>Deactivate</span> This Account Of Id.");
			  $('#exampleModal').modal('show');
			  
			  
// 			  $(document).on('click',"#m1", function() {
// 				  const x=$("#id_val").text()
// 				  $('#id'+x).prop('checked', true);
				  
// 			  });

// 			  $(document).on('click',"#m2", function() {
// 				 const x=$("#id_val").text();
// 				 $.ajax({
// 						  url: 'activation',
// 						  type: "POST",
// 						  headers: {
// 	  'X-CSRF-TOKEN': "{{ csrf_token() }}"
//   },
// 						  data: {
// 							  action:"deactivate",
// 							  id: x
// 						  },
// 						  dataType: "json",
// 						  success: function (data) {
// 							  console.log(data);
// 						  },
// 						  error: function (error) {
// 							  console.log(`Error ${error}`);
// 						  }
// 					  });
// 				  $('#id'+x).prop('checked', false);
// 			  });

// 			  $(document).on('click',"#m3", function() {
// 				 const x=$("#id_val").text();
// 				  $('#id'+x).prop('checked', true);
// 			  });
			  
			  
		  }

		
		  
	  });

	 
	 
	  $(document).on('click',"#m1", function() {
				  var x=$("#id_val").text();
				 var  ch=$('#action').text();
				
				 if(ch == 'Activate'){
				  $('#id'+x).prop('checked', false);
				 }
				 else{
					$('#id'+x).prop('checked', true);
				 }
				  
			  });

			  $(document).on("click","#m2", function() {
				 var x=$("#id_val").text();
				
				 $.ajax({
						  url: 'activation',
						  type: "POST",
						  headers: {
	  'X-CSRF-TOKEN': "{{ csrf_token() }}"
  },
						  data: {
							  action:$('#action').text(),
							  id: x
						  },
						  dataType: "json",
						  success: function (data) {
							 
							if (data.action == 'Activate'){
																	
								 $('#id'+x).prop('checked', true);
							}
							else{
								
								$('#id'+x).prop('checked', false);
							}
						  },
						  
						  error: function (data) {
							  console.log(data);
						  }
					  });
				  
			  });

			  $(document).on('click',"#m3", function() {
				 var x=$("#id_val").text();
				 var  ch=$('#action').text();
				 if(ch== 'Activate'){
				  $('#id'+x).prop('checked', false);
				 }
				 else{
					$('#id'+x).prop('checked', true);
				 }
			  });
  
		
		
		</script>
		<script>
		$(document).ready(function () {


			var table = $('#example').DataTable({

				scrollCollapse: true,
				paging: true,
				fixedColumns: {
					leftColumns: 0,
					right: 1
				}
			});
		});




	</script>
	
	
	<script>

		
		$(document).ready(function(){
			$(document).on('change','.tog1',function($this){
			 console.log($this.value);

			});

		});
	</script>

	

@stop
