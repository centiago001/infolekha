@extends('website_layout')
@section('website_content')


@if ($errors->any())
    <div class="alert alert-danger">
        There were some errors with your request.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       <!-- Page title -->
       <div class="page-title parallax parallax1">
            <div class="section-overlay">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
							<h3 class="title" style="color:white;">Welcome</h3><br>
                            <h1 class="title">{{$data->r_name}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumbs">
                            <ul>
                               <!-- <li><a href="index.html">Home</a></li>
                                <li> - </li>
                                <li><a href="index.html">Page</a></li>
                                <li> - </li>-->
                               
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <section class="flat-row page-profile bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="flat-user profile">
                            <!-- <a href="page-user.html" class="edit" title="">Back to profile <i class="fa fa-backward"></i></a> -->
                            <ul>
                               <li><button type="button" class="btn" >
                                    <label>
                                       
                                
                                       <a href="#" title=""> <i class="fa fa-backward" style="color:#FFF"></i></a>
                                            Submit Your Profile
                                    </label>
                                    
                                </button></li><br>
                                <li><button type="button" class="btn" @if($data->active == 0) disabled cursor: not-allowed; onclick="mayur()" @endif>
                                    <label>
                                       
                                
                                       <a href="#" title=""> <i class="fa fa-backward" style="color:#FFF"></i></a>
                                            Upload Past Results
                                    </label>
                                    
                                </button></li><br>
                                <li><button type="button" class="btn"  @if($data->active == 0) disabled cursor: not-allowed; onclick="mayur()" @endif>
                                    <label>
                                       
                                
                                       <a href="#" title=""> <i class="fa fa-backward" style="color:#FFF"></i></a>
                                           Post a Job vacancy
                                    </label>
                                    
                                </button></li>

                                

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="flat-tabs style2" data-effect="fadeIn">
                            <ul class="menu-tab clearfix">
                                <!-- <li class="active"><a href="#"><i class="ion-navicon-round"></i>(3) Listings</a></li> -->
                                <!-- <li class=""><a href="#"><i class="ion-chatbubbles"></i> Reviews</a></li> -->
                            </ul>

                            <div class="content-tab listing-user profile">
                                <div class="content-inner ">
                                    <div class="basic-info">
                                        <h5>{{$data->r_entity}}</h5>
										<!--action="{{url('initiatePaymentAPI')}}" {('school_institute_detail_create',$data->id)}-->
                                         <form method="post" action="{{url('school_institute_detail_create',$data->id)}}"  class="form-profile" enctype="multipart/form-data" >
                                             @csrf
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="upload-img">
                                                <label>
                                                <input id="image1" type="file" name="logo" style="display:none;">
                                                <img  id="category-img-tag" src="{{asset('public')."/".$data->logo}}" class="dropzone" >
                                            </label>
                                                

                                                </div>
                                            </div>
                                            <div class="col-md-8">

                                                <div>
                                                   
                                                    <div class="row">                                                   
                                                            <div class="col-lg-6">
                                                            
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Name of {{$data->r_entity}}</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Name" value="{{$data->r_name}}" name="school_institute"  required="required" >
                                                                        @error('school_institute')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Address*</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Address" name="address" required="required" value="{{$data->address}}" >
                                                                        @error('address')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">About
                                                                        School/College/institution (Max. 20 
                                                                        Alphabets)</label><br>
                                                                    <span id=charcount></span>
																	<textarea maxlength="20" minlength="5" name="about" id="textbox" onkeyup="charcountupdate(this.value)" > </textarea>
                                                                       @error('about')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror


                                                                </div>
                                                            </div>



                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Pin Code*</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Enter your Pin code" name="pin_code" value="{{$data->pin_code}}" required="required">
                                                                        @error('pin_code')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Operating Since
                                                                    </label>
                                                                    <select id="ddlYears" name="oprating_since" value="{{$data->oprating_since}}"></select>
                                                                </div>
                                                            </div>



                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Registration
                                                                        No</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Registration No" name="registration_no"  value="{{$data->registration_no}}" >
                                                                        @error('registration_no')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Contact No</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Contact No" name="mob" value="{{$data->r_mob}}" required="required" >
                                                                        @error('mob')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Email ID*</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Email ID" value="{{$data->email}}" name="email" required="required">
                                                                        @error('email')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Website</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Website-URL"  value="{{$data->website}}" name="website" >
                                                                        @error('website')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Facebook </label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Facebook-URL "  value="{{$data->website}}"  name="fb">
                                                                        @error('fb')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Instagram</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Instagram-URL "  value="{{$data->insta}}" name="insta" >
                                                                        @error('insta')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Google
                                                                        Business</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Google Business URL"  value="{{$data->google}}" name="google" >
                                                                        @error('google')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Youtube</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Youtube-URL "  value="{{$data->yt}}" name="yt" >
                                                                        @error('yt')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                         
														
                                                         @if($data->r_entity =='School')
                                                           <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select School*</label>
                                                                    <select class="form-select select country-select"
                                                                        name="school" required="required"> 
                                                                        <option>Select </option>
																		
                                                                        <option>State Board</option>
                                                                        <option>CBSC</option>
                                                                        <option>ICSE</option>
                                                                        <option>Other (Please Specify)</option>
                                                                        <option></option>
                                                                    </select>
                                                                </div>
                                                            </div>
															@endif
													
														@if('College'== $data->r_entity)

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select College*</label>
                                                                    <select class="form-select select country-select"
                                                                        name="college" >
                                                                        <option>Select </option>
																		
                                                                       <option>Arts</option>
                                                                        <option>Commerce</option>
                                                                        <option>Science</option>
                                                                        <option>Other (Please Specify)</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                             @endif


                                                          @if('Institute'== $data->r_entity)
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Institute*</label>
                                                                    <select class="form-select select country-select"
                                                                        name="institute"  required="required">
                                                                        <option>Select </option>
																		@if('School'== $data->r_entity)
                                                                        <option >State Board</option>
                                                                        <option>CBSC</option>
                                                                        <option>ICSE</option>
																		@endif
																		@if('College'== $data->r_entity)
                                                                        <option>Arts</option>
                                                                        <option>Commerce</option>
                                                                        <option>Science</option>
																		@endif
																		@if('Institute'== $data->r_entity)
                                                                        <option>Professional (please specify your
                                                                            professional field)</option>
                                                                        <option>Competitive courses</option>
																		@endif
                                                                        <option>Other (Please Specify)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                          @endif



                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"> course*</label>
                                                                   <!-- <select class="form-select select country-select"
                                                                        name="course"  required="required">-->
																	<select id="course" name="course[]"  class="form-select select country-select" name="facilities" multiple >
                                                                        <option>Select Cources </option>
																		@if('School'== $data->r_entity)
                                                                        @php
                                                                       $lst=[' 1Nursery ',
                                                                        ' Pre-Primary ',
                                                                        ' Primary ',
                                                                        'Junior KG
                                                                        ' Senior KG ',
                                                                        '1st Standard ',
                                                                        ' 2nd Standard ',
                                                                        ' 3rd Standard',
                                                                        ' 4th Standard ',
                                                                        ' 5th Standard ',
                                                                        ' 6th Standard ',
                                                                        ' 7th Standard ',
                                                                        ' 8th Standard ',
                                                                        ' 9th Standard ',
                                                                        ' 10th Standard',
                                                                        ' 11th ',
                                                                        ' 12th',];
                                                                        @endphp
                                                                        @foreach($lst as $l)
                                                                          <option value='{{$l}}' @if($data->entity_select == $l) selected="selected" @endif >{{$l}}</option>
                                                                        @endforeach
                                                                         
																		@endif

																	@if('College'== $data->r_entity)
                                                                     @php
                                                                        $lst=['B.com ',
                                                                        'M.com ',
                                                                        'LLB ',
                                                                        'LLM ',
                                                                        'BBA ',
                                                                        'MBA ',
                                                                        'CA Foundation ',
                                                                        'CA IPCC ',
                                                                        'CA Final ',
                                                                        'CS Foundation ',
                                                                        'CS Executive ',
                                                                        'CS Professional ',
                                                                        'ICWA Foundation ',
                                                                        'ICWA Inter ',
                                                                        'ICWA Final ',
                                                                        'Bachelor in Technology (B.Tech)
                                                                        ',
                                                                        'Bachelor in Engineering (BE) ',
                                                                        'JEE-Main ',
                                                                        'GATE ',
                                                                        'UPCET ',
                                                                        'BITSAT ',
                                                                        'Bachelor of Science (B. Sc.) ',
                                                                        'Bachelor of Architecture ( B.Arch.)
                                                                        ',
                                                                        'Architecture Designer ',
                                                                        'Interior Designer ',
                                                                        'Software Engineer ',
                                                                        'Research Analyst ',
                                                                        'MBBS (Bachelor of Medicine and Bachelor
                                                                            of Surgery) ',
                                                                        'NEET Entrance exam ',
                                                                        'BDS (Bachelor of Dental Surgery)
                                                                        ',
                                                                        'Botany/Zoology/Chemistry ',
                                                                        'Biochemistry ',
                                                                        'BHMS (Bachelor of Homeopathy Medicine
                                                                            and Surgery) ',
                                                                        'B. Pharmacy ',
                                                                        'BPT (Bachelor of Physiotherapy)
                                                                        ',
                                                                        'BAMS (Bachelor of Ayurvedic Medicine
                                                                            Surgery)',
                                                                        'BUMS (Bachelor of Unani Medicine and
                                                                            Surgery) ',
                                                                        'Bioinformatics ',
                                                                        'Genetics ',
                                                                        'Forensic Sciences ',
                                                                        'Biotechnology ',
                                                                        'Environmental Science ',
                                                                        'Nursing ',
                                                                        'Bachelor in Business Studies ',
                                                                        'Bachelor of Legislative Law ',
                                                                        'CLAT ',
                                                                        'Bachelor of Management Studies
                                                                        ',
                                                                        'Certified Financial Planner (CFP)
                                                                        ',
                                                                        'Financial Analyst and Advisor ',
                                                                        'Investment Banking Analyst ',
                                                                        'Bachelor of Arts (BA) - 3 years
                                                                        ',
                                                                        'Master of Arts (MA) ',
                                                                        'Bachelor of Computer Application (BCA)
                                                                            - 3 years ',
                                                                        'Bachelor of Hotel Management (BHM)
                                                                        ',
                                                                        'Bachelor of Journalism & Mass
                                                                            Communication (BJMC) - 3 years',
                                                                        'Bachelor of Elementary Education
                                                                            (B.El.Ed) - 4 years ',
                                                                        'Bachelor of Fine Arts (BFA) - 3 years
                                                                        ',
                                                                        'Fashion Designing - 3 to 4 years
                                                                        ',
                                                                        'Diploma in IT ',];
                                                                        @endphp

                                                                        @foreach($lst as $l)
                                                                          <option value='{{$l}}' @if($data->entity_select == $l) selected="selected" @endif >{{$l}}</option>
                                                                        @endforeach
                                                                         

																		@endif

																		@if('Institute'== $data->r_entity)
                                                                        @php
                                                                        $lst=['Yoga ',
                                                                         'Photography ',
                                                                         'Acting and Anchoring ',
                                                                         'Junior Basic Training (JBT) ',
                                                                         'Travel and Tourism ',
                                                                         'Event Management ',
                                                                         'Paramedical Courses ',
                                                                         'Nursing courses ',
                                                                         'Web Designing ',
                                                                         'Digital Marketing',
                                                                         'Graphic Design
                                                                         'Tally ',
                                                                         'Interior Design ',
                                                                         'Beautician ',
                                                                         'Hardware and Networking ',
                                                                         'Photography ',
                                                                         'Air Hostess ',
                                                                         'MSCIT ',
                                                                         'MS-Excel ',
                                                                         'MS-Word ',
                                                                         'MS-Powerpoint ',
                                                                         'Computer Clases ',
                                                                         'DTP Classes ', ]
                                                                        @endphp

                                                                        @foreach($lst as $l)
                                                                          <option value='{{$l}}' @if($data->entity_select == $l) selected="selected" @endif >{{$l}}</option>
                                                                        @endforeach
                                                                         
																		@endif
																		<option> Other </option> 

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6" >
                                                                <div class="form-group">
                                                                    <label class="form-control-label"> Office
                                                                        Timings (From)</label>
                                                                    
                                                                    <input type="text" id="timepicker-12-hr" name="timepicker-12-hr" class="timepicker-12-hr">@error('opening_time')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6" >
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Office
                                                                        Timings (To)</label>
                                                                        <input type="text" id="timepicker-12-hr" name="timepicker-12-hr" class="timepicker-12-hr">
                                                                       @error('closing_time')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"> Facilities*</label>
                                                                    <!--<select class="form-select select country-select"
                                                                    name="facilities"  required="required">-->
																<select id="facilities" name="facilities[]"  class="form-select select country-select" name="facilities" multiple >
                                                                        <option>Select Facilities </option>
																		
                                                                      <option>Classrooms</option> 
                                                                       <option>Digital classroom</option> 
                                                                        <option>Playground & Sports facilities</option> 
                                                                        <option>A/c classroom</option> 
                                                                        <option>Canteen / Cafeterias</option> 
                                                                        <option>Security System (CCTV, Security Guards, Other)</option> 
                                                                        <option>Biometric Attendance Monitoring System</option> 
                                                                        <option>Library</option> 
                                                                        <option>Computer Lab</option> 
                                                                        <option>Laboratories </option> 
                                                                        <option>Garden</option> 
                                                                        <option>Conference rooms</option> 
                                                                        <option>Auditoriums</option> 
                                                                        <option>Transportation</option> 
                                                                        <option>Indoor sports arena</option> 
                                                                        <option>Amphitheatre</option> 
                                                                        <option>Multipurpose Hall.</option> 
                                                                        <option>Counselling Centre</option> 
                                                                        <option>Activity Rooms</option> 
                                                                        <option>Art rooms</option> 
                                                                        <option>Mathematics Laboratory</option> 
                                                                        <option>Health center</option> 
                                                                        <option>Art studios</option> 
                                                                        <option>Music rooms</option> 
                                                                        <option>Administrative offices</option> 
                                                                        <option>Restrooms</option> 
                                                                        <option>Parking lots</option> 
                                                                        <option>Outdoor learning spaces</option> 
                                                                        <option>Career and technical education facilities</option> 
                                                                        <option>Multi-purpose rooms</option> 
                                                                        <option> Daycare facilities</option> 
                                                                        <option>Storage areas</option> 
                                                                        <option>Staff lounges</option> 
                                                                        <option>Conference rooms</option> 
                                                                        <option>Prayer and meditation rooms</option> 
                                                                       <option> Reading corners</option> 
                                                                       <option> Emergency response resources</option> 
                                                                       <option>Innovation centers</option> 
                                                                       <option>Distance learning facilities</option> 
                                                                       <option>Athletic facilities</option> 
                                                                       <option>Parent resource centers</option> 
                                                                       <option>Lecture halls</option> 
                                                                       <option>	Dormitories and housing facilities</option> 
                                                                       <option>Student-run enterprises</option> 
                                                                        
                                                            

                                                                    </select>
                                                                </div>
                                                            </div>



                                                            

                                                            

                                            
                                                            <!-- <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Fees Structure</label>
                                                      <input type="text" class="form-control" placeholder="Fees Structure" >
                                                    </div>
                                                  </div> -->
                                                  <!--<div class="col-lg-12">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Declaration</label>
                                                      <textarea id="declaration-contact" name="declaration" placeholder="Declaration" required="required"></textarea>
                                                      @error('declaration')
                                                      <div class="alert alert-danger">{{ $message }}</div>
                                                      @enderror
                                                    </div>
                                                  </div>-->
														
														
                                                          

                                                            
    <!--mo
   
    <!---modal-2--></div></div></div></div>
    
                                                    </form>
                                                
                                            
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
          
    </section>

   
				
					
					



@stop
@section("js")
<script>
function charcountupdate(str) {
	var lng = str.length;
	if (lng>20){
		document.getElementById("textbox").disabled = true;
		alert("About School/College/institution Minimum 20 Alphabets excide)");
		
	}
	document.getElementById("textbox").disabled = false;
	document.getElementById("charcount").innerHTML = lng + ' out of 20 characters';
	
}
</script>
<script>
        function openPopup1() {
            
                document.getElementById('popup1').style.display = 'block';
           
        }
        function closePopup1() {
            document.getElementById('popup1').style.display = 'none';
        }
    </script>



<script type="text/javascript">
        window.onload = function () {
            //Reference the DropDownList.
            var ddlYears = document.getElementById("ddlYears");
            //Determine the Current Year.
            var currentYear = (new Date()).getFullYear();
            //Loop and add the Year values to DropDownList.
            for (var i =currentYear; i >= 1950; i--) {
                var option = document.createElement("OPTION");
                option.innerHTML = i;
                option.value = i;
                ddlYears.appendChild(option);
            }
        };
    </script>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script> 	
$(document).ready(function(){
	$('#course').select2({closeOnSelect:false}); 
 $('#course').on('change', function() {  const selectedOptions = $(this).val(); 
 const otherOption = selectedOptions.includes('other'); 
 if (otherOption) {  $('#other-fruit').show();  } else {  $('#other-fruit').hide();  }  });


$('#facilities').select2({closeOnSelect:false}); 
 $('#facilities').on('change', function() {  const selectedOptions = $(this).val(); 
 const otherOption = selectedOptions.includes('other'); 
 if (otherOption) {  $('#other-fruit').show();  } else {  $('#other-fruit').hide();  }  });

	


});

	

</script> 
<script>
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#category-img-tag').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#image1").change(function(){
        readURL(this);
    });
</script>



<!-- jQuery -->

<!-- Timepicker Js -->
<script src="{{asset('js/wickedpicker.min.js')}}"></script>

<script>
  var twelveHour = $('.timepicker-12-hr').wickedpicker();
            $('.time').text('//JS Console: ' + twelveHour.wickedpicker('time'));
            $('.timepicker-24-hr').wickedpicker({twentyFour: true});
            $('.timepicker-12-hr-clearable').wickedpicker({clearable: true});
</script>

@stop