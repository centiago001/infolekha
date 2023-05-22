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
                        <h1 class="title">Contact Us</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <!-- <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> - </li>   
                             <li><a href="index.html">Page</a></li> 
                             <li> - </li>                         
                            <li>Contact</li>
                        </ul>                    -->
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

     <section class="flat-row page-contact1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        <h1 class="title"></h1>
                        <!-- <div class="sub-title">
                            Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits <br>der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="iconbox style2 text-center">
                        <div class="box-header">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">+91 9730604722 </div>  
							<div class="box-title">+91 9730205722 </div>
                            <!--<ul>
                                <li>+9730205722</li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iconbox style2 text-center">
                        <div class="box-header">
                            <i class="icon-map"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">AURANGABAD</div>    
                          <!--  <ul>
                                <li>Flat N0.13, Wyankatesh Apartment,  Pandariba,  Aurangabad, 431001</li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iconbox style2 text-center">
                        <div class="box-header">
                            <i class=" icon-envelope"></i>
                        </div>
                        <div class="box-content">
                            <div class="box-title">office@infolekha.org</div>    
                           <!-- <ul>
                                <li>www.infolekha.org</li>
                                <li>office@infolekha.org</li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="flat-row page-contact2">
         <div class="container">
             <div class="row">
				 <div class="col-lg-3"></div>
                 <div class="col-lg-6">
                     <form id="contactform" method="post" action="{{route('mail')}}" novalidate="novalidate" class="form-info">
                        @csrf
                        <p class="input-info"><input type="text" name="name" id="name" value="" placeholder="Your Name" required="required"></p>
                        <p class="input-info"><input type="text" name="email" id="email" value="" placeholder="E-mail" required="required"></p>
                        <p class="input-info"><input type="text" name="mob" id="phone" value="" placeholder="Telephone" required="required"></p>
                        <p class="textarea-info clearfix"><textarea id="message-contact" name="msg" placeholder="Message" required="required"></textarea></p>
                        <p class="submit-info">
                            <button type="submit" class="effect-button">Send now</button></p>
                    </form>
                 </div>
               <!-- <div class="col-lg-8">
                    <div class="flat-maps">
                        <div class="maps" style="width: 100%; height: 420px; "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.871836215595!2d75.33315347359454!3d19.88763302599512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb980bf48406e1%3A0x67b6cf656aedb23!2z4KSF4KS14KSk4KS-4KSw!5e0!3m2!1sen!2sin!4v1682766645846!5m2!1sen!2sin" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div> 
                    </div>
				 </div>
             </div>-->
         </div>     
     </section> 

   
    @stop
    <!-- Javascript -->
   