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
                <h1 class="title">Announcement</h1>
               
            </div>
          
           <div class="col-md-8" >
          
            <span align="center" style="font-size: 20px;" >
                <b>{{$anu->announcement}} </b>
            </span>
            <p>{!!$anu->announcement_image!!}</p>
            
           </div>
                       
        </div><!-- /.col-lg-9 -->    
               
    </div><!-- /.row -->  </div>
    </section>

    
   @stop