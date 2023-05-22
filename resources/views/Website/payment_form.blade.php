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
                                <li><a href="index.html">Page</a></li>
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
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-7">
                        <div class="flat-tabs style2" data-effect="fadeIn">


                            <div class="content-tab listing-user profile">
                                <div class="content-inner active">
                                    <div class="basic-info">
                                        <h3 align="center" style="color: #073D5F; margin-bottom:7% !important;">Subscription Plans
                                        </h3>
                                        <div class="row">



                                            <div class="col-md-12">

                                                <div>
                                                    <form method="post" action="{{url('initiatePaymentAPI')}}" class="form-profile">
                                                        @csrf
                                                        <div class="row" style="margin-right: 5%;">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-3">
                                                            <div class="">
                                                                <label class="checkbox-wrapper">
                                                                    <input type="radio" name="amount" value="500" class="radio-input" />
                                                                    <span class="checkbox-tile">
                                                                        <span class="checkbox-icon">
                                                                            <div class="box-content">
                                                                                <h4 for="vehicle1" style="color: #073D5F; ">
                                                                                    <b>Monthly</b></h4>
                                                                                <h6
                                                                                    style="color:#073D5F; margin-top: 8%;  ">
                                                                                    ₹ 500 / Per Month</h6>
                                                                            
                                                                            </div>
                                                                        </span>
                                                                    
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-3">
                                                        <div class="">
                                                            <label class="checkbox-wrapper">
                                                                <input type="radio" name="amount" value="5000" class="radio-input" />
                                                                <span class="checkbox-tile">
                                                                    <span class="checkbox-icon">
                                                                        <div class="box-content">
                                                                            <h3 for="vehicle1" style="color: #073D5F; ">
                                                                                <b>Yearly</b></h3>
                                                                            <h6
                                                                                style="color:#073D5F; margin-top: 8%;  ">
                                                                                ₹ 5000 / Per Year</h6>
                                                                            
                                                                        </div>
                                                                    </span>
                                                                
                                                                </span>
                                                            </label>
                                                        </div>
                                                        </div>


                                                        <!-- <div class="update-profile" style="margin-left:42%;">
                                                  <button type="button" class="btn btn-primary">Submit</button>
                                                </div> -->
                                                </div>

                                                <div class="col-md-12" style="margin-top: 5%;">

<table width="60%" align="center" style="margin-left: 26%;">
    <td width="30%">
        <p class="form-control-label"
                                style="color: #073D5F; font-size:16px">
                                <b>Apply Coupon Code</b></p>
    </td>
    <td width="30%">
        <input type="text" class="form-control"
            placeholder="Coupon Code"></td>
</table>


<div class="update-profile" style="margin-left:38%; ">
    <button type="submit" class="btn btn-primary"   style="width: 40%;">Pay Now</button>
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