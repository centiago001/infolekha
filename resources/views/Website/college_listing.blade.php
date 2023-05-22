@extends('header12')
@section('website_content')
<section class="main-content page-listing-grid">
        <div>
            <img src="https://via.placeholder.com/1920x400">
        </div>
        <div class="container">
            
                 <div class="row">
              
                    <div class="col-lg-12">
       
                        <section class="main-content page-listing-grid">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="flat-select clearfix">
                                            <div class="float-left width50 clearfix">
                                                <div class="one-three showing">
                                                    <p> FIllters</p>
                                                </div>
                                                <div class="one-three more-filter">
                                                    <ul class="unstyled">
                                                        <li class="current"><a href="#" class="title">More Fillter <i
                                                                    class="fa fa-angle-right"></i></a>
                                                            <ul class="unstyled">
                                                                <li class="en">
                                                                    <input type="checkbox" id="wifi" name="category">
                                                                    <label for="wifi">College</label>
                                                                </li>
                                                                <li class="en">
                                                                    <input type="checkbox" id="smoking" name="category">
                                                                    <label for="smoking">Institution</label>
                                                                </li>
                                                                <li class="en">
                                                                    <input type="checkbox" id="onl" name="category">
                                                                    <label for="onl">School</label>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="one-three sortby">
                                                    <ul class="unstyled">
                                                        <li class="current"><a href="#" class="title">Sort by: Random <i
                                                                    class="fa fa-angle-right"></i></a>
                                                            <ul class="unstyled">
                                                                <li class="en"><a href="#" title=""><i
                                                                            class="fa fa-caret-right"></i>Open Now</a>
                                                                </li>
                                                                <li class="en"><a href="#" title=""><i
                                                                            class="fa fa-caret-right"></i>Most
                                                                        reviewed</a></li>
                                                                <li class="en"><a href="#" title=""><i
                                                                            class="fa fa-caret-right"></i>Top rated</a>
                                                                </li>
                                                                <li class="en"><a href="#" title=""><i
                                                                            class="fa fa-caret-right"></i>Random</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <div class="float-right">
                                            <div class="flat-sort">
                                               <a href="listing-list.html" class="course-list-view active"><i class="fa fa-list"></i></a>
                                                <a href="listing-grid.html" class="course-grid-view "><i class="fa fa-th"></i></a>
                                            </div>
                                        </div> -->
                                        </div>
                                        @foreach ($college_list as $anno)
                                        <div class="listing-list">
                                       
                                            <div class="flat-product clearfix">
                                                <div class="featured-product">
                                                 
                                                 
                                            <a href="{{asset('database_files/school_institute/photo/')."/".$anno->image}}">
                                                    <img style="width:290px; height: 220px" src="{{asset('public')."/".$anno->logo}}" alt="" />
                                            </a>
                                                    
                                                    <div class="time">

                                                    </div>
                                                </div>
                                                <div class="rate-product">
                                                    <div class="link-review clearfix">

                                                        <div class="info-product">
                                                            <h4 class="title"><i class="fa fa-thumbs-up"
                                                                    aria-hidden="true"></i> {{$anno->entity_name}}</h4>
                                                            <p>{{$anno->about}}</p>
                                                            <a href="#" class="heart">
                                                                <i class="ion-android-favorite-outline"></i>
                                                            </a>
                                                        </div>
                                                        <div class="start-review">
                                                            <span class="flat-start">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <a href="#" class="review">(4.9 )</a>
                                                        </div>
                                                        <p>{{$anno->address}}</p>
                                                       
                                                    </div>
                                                    <div class="info-product" style="margin-top:-6;">
                                                    <a mobile_number="{{$anno->mob}}" data-toggle="modal" href="#popup_login" class="mobile1" id="{{$anno->id}}"><i class="fa fa-user"></i>
                                                    <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleSmallModal"  ><i class="fa fa-phone" aria-hidden="true"></i> Show Number</button> &nbsp;
                                                        &nbsp;</a> 


                                                        <a data-toggle="modal" href="#popup_register"><i class="fa fa-user-plus"></i>  
                                                        <button type="button" id="logup-button"
                                                            class=" login-btn effect-button"
                                                            onclick="location.href='#'"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Enquiry</button></a>



                                                    </div>
                                                    <div class="modal fade flat-popupform" id="popup_login">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                             <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                           </div>

                                                            <div class="modal-body text-center clearfix">
                                                            <label class="form-label">Mobile Number</label><br>
								                            <label style="color: black;" id="mobile_number"></label>
                                                           </div>
                                                        </div>
                                                    </div>
                                            </div> 



<div class="modal fade flat-popupform" id="popup_register">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix">
                        <form class="form-login form-listing" action="{{route('post_enquiry')}}" method="post">
                            @csrf

                            <h3 class="title-formlogin">Send Enquiry</h3>
                         
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="name" required="required" value="{{auth()->check() ? auth()->user()->name : ''}}"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email" required="required" value="{{auth()->check() ? auth()->user()->email : ''}}"><i class="fa fa-envelope-o"></i></span>
                            <!-- <span class="input-login icon-form"><input type="text" placeholder="Mobile Number*" name="mobile_no" required="required"><i class="fa fa-phone" aria-hidden="true"></i></span> -->
                             <span class="input-login icon-form"><textarea type="text" placeholder="Message" name="message" required="required" rows="4" cols="50"></textarea></span>
                            <div class="wrap-button signup">
                                <button type="submit" id="logup-button" class=" login-btn effect-button" title="log in">SEND</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
    </div> 



                                                   
                                                </div>
                                                
                                            </div>
                                           
                                        </div> 
                                        @endforeach
                                   

                                       
                                        <div class="blog-pagination style2 text-center">
                                            <ul class="flat-pagination clearfix">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="next">
                                                    <a href="#">Next</a>
                                                </li>
                                            </ul><!-- /.flat-pagination -->
                                        </div><!-- /.blog-pagination -->
                                    </div><!-- /.col-lg-9 -->
                                    <div class="col-lg-3">
                                        <div class="sidebar">
                                            <div class=" widget widget-form style2">
                                                <marquee width="100%" direction="up" height="1036px" scrollamount="4">

                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <img src="https://via.placeholder.com/290x220">
                                                    </div>
                                                </marquee>
                                            </div>

                                        </div><!-- /.sidebar -->
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>


                    </div><!-- /.col-lg-9 -->
                          
            </div>
           <!-- /.row -->           
        </div><!-- /.container -->   
    </section> 


    @stop
    @section('js')
    <script>
        $(document).ready(function()
        { 

            //data show krwane ke liye
            $(".mobile1").on('click',function(){
                     $("#mobile_number").text($(this).attr('mobile_number'));

//                 $.ajax({
//   url: "{{route('get_mobile_number')}}",
//   type:'get',
//   data:{ 
//     id:$(this).val()

//     },

//   cache: false,
//   success: function(result){
//     var loan=result.loan;
//     $("#mobile_number").text(loan.mob);
    
//   }
// });
            })


        });
</script>
@stop