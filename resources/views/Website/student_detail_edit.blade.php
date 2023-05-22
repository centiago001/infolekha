@extends('website_layout')
@section('website_content')


 <!-- Page title -->
 <div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">User</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> - </li>                         
                            <li><a href="index.html">Page</a></li>
                            <li> - </li>                         
                            <li>User</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <section class="flat-row page-profile ">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="flat-user profile">

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
                                <h5>Student / Parent Sign Up</h5>
                                
                                <div class="row">
                                    
                                        
                                        <div >
                                          
                                            <form  action="{{ route('student_detail_update')}}"    method="POST" class="form-profile" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row" >
                                      
                                   <div class="col-md-3" style=" margin:auto;">
                                        
                                            <label>
                                                <input type="file" name="image" style="display:none;">
                                                <img src="database_files/student/photo/" width=100%, height=100%, class="dropzone" >
                                            </label>
                                        </div>
                                    <div class="col-md-8">
                                      
                                              <div class="row">
                                                
                                              @error('data')
                                                      <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                              
                                                <div class="col-lg-5" style="margin-top: 2%;">
                                                  <div class="form-group">
                                                    <label class="form-control-label">Name </label>
                                                    <input type="text" class="form-control" placeholder="Name" value="{{$data->entity_name}}" name='name' required>
                                                    @error('name')
                                                      <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                  </div>
                                                </div>
                                           
                                                <div class="col-lg-5" style="margin-top: 2%;">
                                                  <div class="form-group">
                                                    <label class="form-control-label">Contact No</label>
                                                    <input type="text" class="form-control" placeholder="Contact No" value="
                                                    " name='mob' required>
                                                    @error('mob')
                                                      <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                  </div>
                                                </div>
                              
                                                <div class="col-lg-5">
                                                  <div class="form-group">
                                                    <label class="form-control-label">Email ID</label>
                                                    <input type="text" class="form-control" placeholder="Email ID" value=""name='email'  required>
                                                    @error('email')
                                                      <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-lg-5">
                                                  <div class="form-group">
                                                    <label class="form-label">Select Class</label>
                                                    <select class="form-select select country-select" name="class">
                                                      <option>Select </option>
                                                      <option>Play Group</option>
                                                      <option>Nursery</option>
                                                      <option>Pre-Primary</option>
                                                      <option> 1st to 12th</option>
                                                      <option>College</option>
                                                      <option>Arts</option>
                                                      <option>Commerce</option>
                                                      <option>Science</option>
                                                    </select>
                                                    @error('class')
                                                      <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                  </div>
                                                </div>
                              
                                               
                                              
                                                
                                            
                              
                                                <div class="col-lg-5">
                                                  <div class="form-group">
                                                    <label class="form-control-label">Address</label>
                                                    <input type="text" class="form-control" placeholder="Address"  value="" name='address' required>
                                                  </div>
                                                </div>
                              
                              
                                                
                                                <div class="col-lg-5">
                                                  <div class="form-group">
                                                    <label class="form-control-label">Pin Code*</label>
                                                    <input type="text" class="form-control" placeholder="Enter your Pin code"  value="{{$data->pin_code}}" name='pin_code' required>
                                                  </div>
                                                </div>
                                                <div class="col-lg-5">
                                                  <div class="form-group">
                                                    <label class="form-control-label">user_student_id*</label>
                                                    <input type="text" class="form-control" placeholder="Enter your Pin code" name="user_student_id"  value="{{$data->user_id}}" name='user_id' required>
                                                  </div>
                                                </div>
												  
												  <div class="col-lg-12" >
                                                    <div class="form-group">
                                                        <div class="row" style="margin-left: 1%;">
                                                           <input class="form-control-lable" type="checkbox" id="checkbox" style="margin-right: 1%;">
                                                           <label class="form-control-label" for="checkbox" onclick="openPopup1()"><spam style="color:#073D5F"><u>I have Read an Accepeted Terms & Condition</u></spam></label>
                                                         </div>
                                                        <div id="popup1" class="popup1" style=" overflow-x: scroll visible;">
                                                            <a class="close-btn1" onclick="closePopup1()"><i class="fas fa-times"></i></a>
                                                             <br>
                                                                <!-- Popup1 content goes here -->
                                                             <p>
                                                              <p><b>  1.</b>    As a student/parent, I hereby declare that all the information provided to INFOlekha is true and correct to the best of my knowledge. I understand that any false or misleading information provided can result in the removal of my account from INFOlekha.</p><br>
                                                                <p><b>2.</b>    Furthermore, I acknowledge that any ratings or reviews provided by me regarding the educational institution listed on INFOlekha will be based on my personal experience with the institution. I agree to provide genuine and honest feedback that reflects my true experience with the educational institution.</p><br>
                                                               <p><b> 3.</b></p>    I understand that INFOlekha will use the ratings and reviews provided by me to help other students/parents make informed decisions about the educational institution. I acknowledge that INFOlekha is not responsible for any decisions made by me or other students/parents based on the information provided on the website.<br>
                                                               <p><b>4.</b>
                                                                I also understand that INFOlekha may use my information and ratings/reviews for promotional purposes on the website and other marketing materials.
                                                                </p><br>
                                                                <p><b>5.</b>    Lastly, I acknowledge that I have read and understood the terms and conditions of INFOlekha and agree to abide by them. I understand that INFOlekha may modify or update the terms and conditions at any time and that it is my responsibility to review them regularly.</p><br>
                                                       </div>
                                                    </div>
                                                  </div>






                                             
                                                <div class="update-profile" style="text-align:center;">
                                                  <button type="submit" class="btn btn-primary">update information</button>
                                                </div>
                                              </div>
										   </div>
										</div>
												   
										
                                            </form>
                                          </div>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                       
                    </div> 
                    
            </div>
        </div>
    </section>
@stop