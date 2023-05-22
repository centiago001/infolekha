@extends('website_layout')
@section('website_content')

<div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Student/Parent Sign Up</h1>
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

    <section class="flat-row page-profile bg-theme">
        <div class="container">
            <div class="row">
            <div class="col-md-3"></div>
         <div class="col-md-6"  style="padding-top:20px; 
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <form class="form-login form-listing" action="{{route('student_register_user_create')}}" method="post">
                @csrf
                
                
                <h3 class="title-formlogin">Sign Up</h3>
             
                <span class="input-login icon-form"><input type="text" placeholder="Name of Student/Parent *" name="name"
                        required="required"><i class="fa fa-user"></i></span>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <span class="input-login icon-form"><input type="text" placeholder="Name of Current School/College" name="current_school_institute"
                            required="required"><i class="fa fa-user"></i></span>
                            @error('current_school_institute')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                        <span class="input-login icon-form"><input type="text" id="mob" placeholder="Mobile No*" name="mob"
                            required="required"><i class="fa fa-user"></i></span>
                            @error('mob')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

                <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email"
                        required="required"><i class="fa fa-envelope-o"></i></span>
                        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


                       <span class="input-login icon-form"><input type="text" placeholder="Address*" id="current_location_at_form" name="address"
                        required="required"><i class="fa fa-envelope-o"></i></span>

                   

                <span class="input-login icon-form"><input type="password" placeholder="Password*"
                        name="password" required="required"></span>
                        @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                         @enderror

                <span class="input-login icon-form"><input type="password" placeholder="Repeat Password*"
                        name="password_confirmation" required="required"></span>

                    

                                
                       
                          <hr class="mt-4">
                <div class="">
              <button type="button" id="login-button1"   class=" login-btn btn"
                            title="Sign Up" style="margin-bottom: 15px;">Verify</button>
                </div>

                
            </form>

         </div>
            </div>
   
        </div>
    </section>
<div class="modal fade flat-popupform" id="popup_login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center clearfix">
                    <div class="form-login form-listing" >
                        <h3 class="title-formlogin">OTP Verify</h3>
                        <span class="input-login icon-form"><input type="text" placeholder="Enter OTP*" id="otp" name="otp" required="required"><i class="fa fa-user"></i></span>

                    
                        <span class="">
                            <button type="button" id="login-button" onclick="verify()" data-dismiss="modal" class="btn" title="log in">Verify</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    @stop



@section("js")

<script>
$('#login-button1').on("click",function(){
    var mob=$('#mob').val();
    
if($('#login-button1').attr('type') != 'submit'){
   var m= $("#form1").serializeArray();
  
   if ($('#mob').val() && $('#mob').val().length == 10 ){
    $.ajax({
        type: 'GET',
         url: 'val_form/'+mob ,
        success: function (data) {
        if (data.status){
           $('#popup_login').modal('show');
            otp();
           }
           else{
            alert("number already taken by someone")
           }
},
error: function (data) {
    alert(data
    )
    console.log(data);
}
});


   
   }
   else{
    alert("Invalid mobile number plz enter the valid 10 digit number ");
   }



}
    
});
    </script>

<script >	
		



    
//     var select = document.getElementById('sel');
//     var option = select.options[select.selectedIndex];
// console.log(option.value);

// document.getElementById('entity').placeholder =' Name of '+ option.value;
//     //document.getElementById('text').value = option.text;






var mayur;

function otp(){
const mob= $("#mob").val();
$.ajax({
type: 'GET',
url: 'send_mobile_verify_otp/'+mob,
success: function (data) {
     mayur=data;
    console.log(data);
},
error: function (data) {
    
    console.log(data);
}
});

}

function verify(){
const x = document.getElementById("otp");
if (x.value== mayur){
$("#login-button1").attr({type:'submit'});

$("#login-button1").text("Sign Up");
console.log("verified otp");

}

}

//   if (selectedFiles.length > maximage) {
//     alert(`You can select maximum ${maximage} files`);
//     imageSelector.value = ''; // Clear the selected files
//   }
var Boo = function(){
alert("test");
}



</script>

<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?countrycode:IN&key=AIzaSyDkFrL3p2KR9iAmFiuhmkszKgMHIon1Y0E&libraries=places" ></script>
    
    <script>
        google.maps.event.addDomListener(window, 'load', initialize);
  
        function initialize() {
           /* var input = document.getElementById('current_location');*/
			var input =new google.maps.places.Autocomplete(
                                                      (document.getElementById('current_location_at_form')),
                                                      { types: ['geocode'] });

                                                    //   var input =new google.maps.places.Autocomplete(
                                                    //   (document.getElementById('current_location_at_form')),
                                                    //   { types: ['locality'] ,componentRestrictions: { country: "in"}});
                                                      
            /*var autocomplete = new google.maps.places.Autocomplete(input);*/
  
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                
            });
        }
    </script>
@stop
