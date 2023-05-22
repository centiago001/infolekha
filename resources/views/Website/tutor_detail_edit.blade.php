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
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> - </li>                         
                            <li><a href="index.html" >Page</a></li>
                            <li> - </li>                         
                            <li>User</li>
                        </ul>                   
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
                                            <form  method="post"   class="form-profile" en>
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
                                                      <input type="text" class="form-control" value="{{$data->subject}}" placeholder="Subject" name="subject"
                        required="required">
                                                    </div>
                                                  </div>
                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Years of Experience </label>
                                                      <input type="text" class="form-control" value="{{$data->experiance}}" placeholder="Years of Experience" name='experiance'
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
                                                      @php
                                                      $lst=['Part Time', 'Full Time','Remote'];
                                                      @endphp
                                                      <label class="form-label">Select Type</label>
                                                      <select class="form-select select country-select" name="job_type">
                                                        <option>Select </option>
                                                        @foreach($lst as $l)
                                                        <option value='{{$l}}' @if($data->job_type == $l) selected="selected" @endif >{{$l}}</option>
                                                        @endforeach
                                                        <option></option>
                                                      </select>
                                                    </div>
                                                  </div>
                                
                                           
                                                 
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Address </label>
                                                      <input type="text" class="form-control" placeholder="	Address.... "  value="{{$data->address}}"  name="address"
                        required="required" >
                                                    </div>
                                                  </div>
                                
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                      <label class="form-control-label">Pin Code*</label>
                                                      <input type="text" class="form-control" placeholder="	Pin Code"  value="{{$data->pin_code}}"  name="pin_code"
                        required="required">
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
        </div>
    </section>
@stop