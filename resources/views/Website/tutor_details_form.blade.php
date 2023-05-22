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
                        <h1 class="title">User</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                                        
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <section class="flat-row page-profile bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">
                     
                    
                    <div class="content-tab listing-user profile">
                        <div class="content-inner ">
                            <div class="basic-info">
                                <h5>Tutor / Faculty Sign Up</h5>
                                <div class="row">
                                   
                                        <div class="col-md-4">
                                        
                                            <label>
                                                <input type="file" style="display:none;">
                                                <img src="images/cv.jpg" class="dropzone" >
                                            </label>
                                        </div>
                                  
                                    <div class="col-md-8">
                                        
                                        <div >
											<!--action="{{ route('tutor_detail_create',$data->id)}}"-->
                                            <form  method="post" action="{{url('tutor_detail_create',$data->id)}}"  class="form-profile" en>
                                              @csrf
                                              <div class="row">
                              
                                                <div class="col-lg-6" style="margin-top: 2%;">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Name of Tutor </label>
                                                      <input type="text" class="form-control" placeholder="Name of Tutor" value="{{$data->r_name}}" name="name"
                        required="required">
                                                    </div>
                                                  </div>
                                                  <!-- <div class="col-lg-6" >
                                                    <div class="form-group">
                                                      <label class="form-control-label">Logo of School/College/Institution </label>
                                                      <input type="file" class="form-control" placeholder="">
                                                    </div>

                                                        </div> -->
                                                  <div class="col-lg-6" style="margin-top: 2%;">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Subject</label>
                                                      <input type="text" class="form-control" placeholder="Subject" name="subject"
                        required="required">
                                                    </div>
                                                  </div>
                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Years of Experience </label>
                                                      <input type="text" class="form-control" placeholder="Years of Experience" name='experiance'
                        required="required">
                                                    </div>
                                                  </div>
                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Mobile No</label>
                                                      <input type="text" class="form-control" placeholder="Mobile No" value="{{$data->mob}}" name="mob"
                        required="required">
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Email ID</label>
                                                      <input type="text" class="form-control" placeholder="Email ID"  value="{{$data->email}}" name="email"
                        required="required">
                                                    </div>
                                                  </div>
                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-label">Select Type</label>
                                                      <select class="form-select select country-select" name="job_type">
                                                        <option>Select </option>
                                                        <option>Part Time</option>
                                                        <option>Full Time</option>
                                                        <option>Remote</option>
                                                        <option></option>
                                                      </select>
                                                    </div>
                                                  </div>
                                
                                           
                                                 
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Address </label>
                                                      <input type="text" class="form-control"  value="{{$data->address}}" placeholder="	Address.... " name="address"
                        required="required" >
                                                    </div>
                                                  </div>
                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Pin Code*</label>
                                                      <input type="text" class="form-control" placeholder="	Pin Code " name="pin_code"
                        required="required">
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-12">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Declaration</label>
                                                      <textarea id="declaration-contact"  placeholder="Declaration"  name="declaration" required="required"></textarea>
                                                    </div>
                                                  </div>
                                
                                                
                                             
                                                 <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="row" style="margin-left: 1%;">
                                                           <input class="form-control-lable" type="checkbox" id="checkbox" style="margin-right: 1%;">
                                                                                                                   <label class="form-control-label" for="checkbox" >I have read and accepeted </label>
                                                                                                                   <label>I Have Read And Accepted<spam style="color:#073D5F"  onclick="openPopup1()">Terms & Condition</spam></label>	


                                                         </div>
                                                        <div id="popup1" class="popup1" style="overflow-y: scroll !important;">
                                                            <a class="close-btn1" onclick="closePopup1()"><i class="fas fa-times"></i></a>
                                                             <br>
                                                                <!-- Popup1 content goes here -->
                                                             <p>
                                                                <p><b>As a authorised representative of above mentioned educational institution I hereby declare and accept following terms and conditions</b></p>
                                                              <p><b>  1.</b>	By signing up for a listing on INFOlekha.org, we confirm that we are a legitimate educational institution, and that all information provided to INFOlekha.org is accurate and up-to-date. We understand that INFOlekha.org has the right to verify the information provided and may remove our listing if any information is found to be false or misleading.</p><br>
                                                                
                                                                <p><b>2.</b>	We acknowledge that by listing on INFOlekha.org, we agree to provide timely and accurate updates to any changes in our institution's information, including contact details, programs offered, admission requirements, and any other relevant information.</p><br>
                                                                
                                                               <p><b> 3.</b></p>	We understand that INFOlekha.org is not responsible for any decisions made by students or parents based on our institution's information listed on the website. We also agree that INFOlekha.org is not responsible for any disputes that may arise between us and any students, parents, or other parties.<br>
                                                                
                                                               <p><b>4.</b> 	We acknowledge that INFOlekha.org may use our institution's information, including logo and images, for promotional purposes on the website and in other marketing materials.</p><br>
                                                                
                                                                <p><b>5.</b>	We agree to indemnify and hold harmless INFOlekha.org, its affiliates, and its directors, officers, employees, and agents from and against any claims, damages, liabilities, costs, and expenses arising from our institution's listing on the website, including any inaccuracies or omissions in our institution's information, and any disputes or other issues that may arise between us and any students, parents, or other parties.</p><br>
                                                                
                                                               <p><b> 6.</b>	We acknowledge that INFOlekha.org may use third-party vendors or service providers to assist in the provision of the website and its services. We understand that these vendors or service providers may have access to our institution's data for the purpose of providing their services to INFOlekha.org. We agree that INFOlekha.org is not responsible for the actions or omissions of any third-party vendors or service providers.</p><br>
                                                                
                                                               <p><b> 7.</b>	We also acknowledge that we are responsible for ensuring the security of our institution's login credentials for the website. We agree to notify INFOlekha.org immediately if we suspect any unauthorized use of our login credentials.</p><br>
                                                                
                                                               <p><b> 8.</b>	We understand that INFOlekha.org may terminate our institution's listing on the website at any time, with or without cause. We also understand that we may terminate our institution's listing on the website at any time, but that any fees paid to INFOlekha.org are non-refundable.</p><br>
                                                                
                                                              <p><b>  9.</b>	This declaration constitutes the entire agreement between our institution and INFOlekha.org and supersedes all prior or contemporaneous agreements or understandings, whether written or oral. Any modifications to this declaration must be made in writing and signed by both parties.<br>
                                                                
                                                               <p><b> 10.</b>	We have the authority to enter into this declaration on behalf of our institution and have read and understand its terms and conditions.</p><br>
                                                                
                                                               <p><b> 11.</b>	This declaration shall be governed by and construed in accordance with the laws of India, without giving effect to any principles of conflicts of law.</p><br>
                                                                
                                                               <p><b> 12.</b>	Furthermore, we have read and understood the terms and conditions of INFOlekha.org and agree to abide by them. We also acknowledge that INFOlekha.org may update the terms and conditions from time to time, and it is our responsibility to review them regularly.</p><br>
                                                                
                                                               <p><b>13</b>	By signing up for a listing on INFOlekha.org, we acknowledge that we have read and understood this declaration and agree to be bound by its terms and conditions.<br>
                                                             
                                                                </p>

                                                               
                                                       </div>
                                                    </div>
                                                  </div>

                                                             <div class="update-profile" style="margin-left: 37%; margin-top: 5%;">
                                                                

                                                            
                                                                <button type="submit"
                                                                    class="btn btn-primary" >Submit</button>
                                                            </div>
                                                        </div>
        <div id="popup" class="popup">
        <a class="close-btn" onclick="closePopup()"></a>
        <!-- Popup content goes here -->
        
    </div>

    <!--modal-->
    <div class="modal fade flat-popupform" id="popup_register">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center clearfix">
                    
                        <h3 class="title-formlogin" >Subscrption Plans</h3>
                        <div style="border-bottom: 1px solid rgb(6, 16, 67); margin-bottom: 4%;"></div>
                        <!-- <h4 class="title-formlogin">Pay Now</h3> -->
                          
                                
                                    
                                    <div class="row">
                                        <div class="col-md-12">	
                                            
                                            <div class="row">
                                                <div class="col-md-6"  style="padding-top:10px;  
                                                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);border: #000 1p;">
                                                    <div class="iconbox icon-text text-left" >
                                                        <div class="box-content">
                                                    <h3 for="vehicle1" style="color: #073D5F; margin-left: 15%;"> <b>Monthly</b></h3>
                                                    <h6 style="color:#073D5F; margin-top: 2%; margin-left:2%; ">₹ 500 / Per Month</h6>
                                                    <div style="margin-left: 22%; margin-top:12%;" >
                                                        <a >   <button type="button" class="btn btn-primary">Subcribe</button></a> 
                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-1"></div> -->
                                                <div class="col-md-6"  style="padding-top:10px;  
                                                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);border: #000 1p;">
                                                    <div class="iconbox icon-text text-left">
                                                        <div class="box-content">
                                                    
                                                            <h3 for="vehicle2" style="color: #073D5F; margin-left: 22%; "> <b>Yearly</b></h3>
                                                            <h6 style="color: #073D5F; margin-top: 2%; margin-left: 1%;">₹ 5000 / Per Year</h6>
                                                            <div style="margin-left: 22%; margin-top:12%;" >
                                                                <a >   <button type="button" class="btn btn-primary">Subcribe</button></a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-12"  style="padding-top:10px;  
                                        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);border: #000 1p;">	
                                            
                                            <div class="row">
                                                <div class="col-md-4" >
                                                    <div >
                                                        <div >
                                                            <div >
                                                                <p class="form-control-label"style="color: #073D5F; font-size:10px" ><b>Apply Cupon Code</b></p>
                                                               </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                                <div class="col-md-8" >
                                                    <div >
                                                        <div >
                                                    
                                                            <input type="text" class="form-control" placeholder="Cupon Code">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                      
                                    </div>
                                   
                                        <div class="update-profile" style="margin-top: 2%;">
                                            <a data-toggle="modal" href="#popup_login">   <button type="button" class="btn btn-primary">Next</button></a> 
                                        </div>
                            
                          
                      
                
                </div>
            </div>
        </div>
</div> 
    <!--modal end-->

    <!---modal-2-->
    <div class="modal fade flat-popupform" id="popup_login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center clearfix">
                    
                        <h3 class="title-formlogin" style="border-bottom: 1px solid rgb(69, 69, 69);">Pay Now</h3>
                        <div class="row">
                            <div class="row">
                          
                            <div class="col-md-12">
                                
                                <div >
                                    
                                      <div class="row">
                      
                                        <div class="col-lg-6" >
                                           <p>Monthly Packages</p>
                                        </div>
                                   
                                      
                                        <div class="col-lg-6" >
                                           <p>500</p>
                                        </div>
                                  
                                        <div class="col-lg-6" >
                                            <p>Disscount</p>
                                         </div>
                                    
                                       
                                         <div class="col-lg-6" >
                                            <p>(400)</p>
                                         </div>
                                   <hr style="color: #073D5F;">
                                         <div class="col-lg-6" >
                                            <p>Net Pay</p>
                                         </div>
                                   
                                         <div class="col-lg-6" >
                                             <p>    100</p>
                                          </div>
                                     
                                     
                               
                                     
                                        <div class="update-profile" style="margin-left:40%;">
                                               <button type="submit" class="btn btn-primary">Pay Now</button>
                                        </div>
                                      </div>
                                
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
           
        </div>
    </section>
@stop
@section('js')
<script>
        function openPopup1() {
            
                document.getElementById('popup1').style.display = 'block';
           
        }
        function closePopup1() {
            document.getElementById('popup1').style.display = 'none';
        }
    </script>
@stop