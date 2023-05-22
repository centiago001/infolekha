
@extends('website_layout')
@section('website_content')
<div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Blogs</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <!-- <ul>
                            <li><a href="index.html"></a></li>
                          
                        </ul>                    -->
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->



    <section class="main-content page-listing-grid">
        <div class="container">
    <div class="row">
        <div class="col-lg-12" >
            <div class="title-section text-center" style="margin-top: 7px;">
                <h1 class="title">Blogs</h1>
               
            </div>
            <div class="row listing-grid">
                <div class="col-md-4">
                    <div class="flat-product">
                        <div class="featured-product">
                            <img src="{{asset('website_asset/images/Opportunity1.jpg')}}" alt="image">
                         
                        </div>
                    
                        <div class="content-product">
                            <!-- <h6 class="widget-title">by : Youness &nbsp;| 23-02-2021 &nbsp;
                                
                            </h6> -->
                            <div class="text">
                                <p>The Role of Apprenticeships and Internships in Promoting Career Readiness</p>
                            </div>
                       

                        </div>

                        <button type="button" class="btn" style="color:white !important; width: 100%;" >
                            <a href="{{route('opportunites')}}" alt="image">
                                     Read More </a>
    
                         </button>
                    </div>
                  
                </div>
                <div class="col-md-4">
                    <div class="flat-product">
                        <div class="featured-product">
                            <img src="{{asset('website_asset/images/Cover-photo.jpg')}}" alt="image">
                         
                        </div>
                    
                        <div class="content-product">
                      
                            <div class="text">
                                <p>The Role of Apprenticeships and Internships in Promoting Career Readiness</p>
                            </div>
                       

                        </div>

                        <button type="button" class="btn" style="color:white !important; width: 100%;" >
                            <a href="{{route('choosing')}}" title="">
                                Read More </a>
    
                         </button>
                    </div>
                  
                </div>
                <div class="col-md-4">
                    <div class="flat-product">
                        <div class="featured-product">
                            <img src="{{asset('website_asset/images/featured-time-management-final.jpg')}}" alt="image">
                         
                        </div>
                    
                        <div class="content-product">
                           
                            <div class="text">
                                <p>“EFFECTIVE STUDY HABITS AND TIME MANAGEMENT FOR STUDENTS”</p>
                            </div>
                       

                        </div>

                        <button type="button" class="btn" style="color:white !important; width: 100%;" >
                            <a href="{{route('stratigic')}}" title="">
                                     Read More </a>
    
                         </button>
                    </div>
                  
                </div>
                <div class="col-md-4">
                    <div class="flat-product">
                        <div class="featured-product">
                            <img src="{{asset('website_asset/images/blog-cover-04.jpg')}}" alt="image">
                         
                        </div>
                    
                        <div class="content-product">
                           
                            <div class="text">
                                <p>“The benefits and challenges of online learning in the modern age”</p>
                            </div>
                       

                        </div>

                        <button type="button" class="btn" style="color:white !important; width: 100%;" >
                            <a href="{{route('benifite')}}" title="">
                                     Read More </a>
    
                         </button>
                    </div>
                  
                </div>
                <div class="col-md-4">
                    <div class="flat-product">
                        <div class="featured-product">
                            <img src="{{asset('website_asset/images/internship-training-in-chennai-kk-nagar-5.jpg')}}" alt="image">
                         
                        </div>
                    
                        <div class="content-product">
                          
                            <div class="text">
                                <p>The Role of Apprenticeships and Internships in Promoting Career Readiness</p>
                            </div>
                       

                        </div>

                        <button type="button" class="btn" style="color:white !important; width: 100%;" >
                            <a href="{{route('role')}}" title="">
                                     Read More </a>
    
                         </button>
                    </div>
                  
                </div>
          
            </div>
                       
        </div><!-- /.col-lg-9 -->    
               
    </div><!-- /.row -->  </div>
    </section>

    @stop
    <!-- Footer -->
    