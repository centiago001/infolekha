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
                        <h1 class="title">Login</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <!-- <li><a href="index.html">Home</a></li>
                            <li> - </li>                         
                            <li><a href="index.html">Page</a></li>
                            <li> - </li>                          -->
                            <!-- <li>Login</li> -->
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->
    <section class="flat-row page-user bg-theme">
        <div class="container">
            <div class="row">
               <div class="col-md-3"></div>
                <div class="col-md-6"  style="padding-top:20px; 
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <form class="form-login form-listing" action="{{route('login_submit')}}" method="post">
                        @csrf
                        <h3 class="title-formlogin">Log in</h3>
                        <span class="input-login icon-form"><input type="text" placeholder="Username*" name="email"
                                required="required"><i class="fa fa-user"></i></span>
                        <span class="input-login icon-form"><input type="text" placeholder="Password*"
                                name="password" required="required"><i class="fa fa-lock"></i></span>
                        <div class="flat-fogot clearfix">
                            <!-- <label class="float-left">
                                <span class="input-check">
                                    <input type="checkbox" id="rem" name="check" value="0" checked="">
                                    <label for="rem" class="remember">Remember me</label>
                                </span>
                            </label> -->
                            <label class="float-right link-register">
                                <a href="#">Lost your password?</a>
                            </label>
                        </div>
                        <span class="">
                            <button type="submite" id="login-button" class="btn"
                                title="log in" style="margin-bottom: 15px;">LOG IN</button>
                        </span>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop