<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Infolekha </title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('website_events/stylesheets/bootstrap.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('website_events/stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('website_events/stylesheets/responsive.css')}}">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('website_events/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website_events/revolution/css/settings.css')}}">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('website_events/stylesheets/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="{{asset('website_events/icon/apple-touch-icon-48-precomposed.png')}}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{asset('website_events/icon/apple-touch-icon-32-precomposed.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{asset('website_events/images/favicon.png')}}" rel="shortcut icon">

</head>
<style>
    .btn {
        border: none;
        background-color: #073D5F;
        padding: 11px 26px;
        font-size: 16px;
        cursor: pointer;
        display: inline-block;
    }

    .btn:hover {
        background: #477ea0;
    }


    .default {
        color: black;
    }

    .dropbtn {

        border: none;
        cursor: pointer;
    }



    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 3px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
</style>

<style>
  .slider {
    width: 100%;
    height: 510px;
    position: relative;
  }

  .slider img {
    width: 100%;
    height: 500px;
    position: absolute;
    top: 10;
    left: 0;
    transition: all 0.5s ease-in-out;
  }

  .slider img:first-child {
    z-index: 1;
  }

  .slider img:nth-child(2) {
    z-index: 0;
  }

  .navigation-button {
    text-align: center;
    position: relative;
  }

  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
  }

  .active,
  .dot:hover {
    background-color: #717171;
  }
    </style>

<body class="header_sticky">
    <!-- Preloader -->
    <section >
        <div >
            <h2 >Loading</h2>
        </div>
    </section>

    <!-- Boxed -->
    <div class="boxed">

        <!-- Header -->
        <header id="header" class="header clearfix" style="margin-top:-2%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div id="logo" class="logo float-left">
                            <a href="{{route('index')}}" rel="home">
                                <img src="{{asset('website_events/images/logonew.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="btn-menu">
                            <span></span>
                        </div>
                    </div>
                    <div class="col-lg-8" >
                        <div class="nav-wrap">
                            <nav id="mainnav" class="mainnav float-right">
                                <ul class="menu">
                                    <!-- <li class="home">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li><a href="listing-grid.html">Listing</a>
                                        <ul class="submenu">
                                            <li><a href="listing-grid.html">Listing Grid</a>
                                            </li>
                                            <li><a href="listing-list.html">Listing List</a>
                                            </li>
                                            <li><a href="listing-full.html">Listing Full Width</a>
                                            </li>
                                            <li><a href="listing-map1.html">Listing Map V1</a>
                                            </li>
                                            <li><a href="listing-map2.html">Listing Map V2</a>
                                            </li>
                                            <li><a href="listing-single.html">Listing Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a>
                                            </li>
                                            <li><a href="blog-single.html">Blog Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="page-about.html">Page</a>
                                        <ul class="submenu">
                                            <li><a href="page-about.html">About Us</a>
                                            </li>
                                            <li><a href="page-services.html">Services</a>
                                            </li>
                                            <li><a href="page-user.html">User</a>
                                            </li>
                                            <li><a href="page-profile.html">User profile</a>
                                            </li>
                                            <li><a href="page-addlisting.html">Add Listing</a>
                                            </li>
                                            <li><a href="page-pricing.html">pricing</a>
                                            </li>
                                            <li><a href="page-contact.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li>
                                        <a data-toggle="modal" href="#popup_login"><i class="fa fa-user"></i> Sign
                                            in</a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" href="#popup_register"><i class="fa fa-user-plus"></i>
                                            Register</a>
                                    </li> -->

                                    <!-- <li >
                        
                                        <div class="button-addlist  dropdown">
                                            <a class="nav-link " align="center">
                                                 <img src="images/pin (1).png" width=""><br>Aurangabad </a>
            
                                        </div>
                                    </li> -->

                                    <!-- <li style="padding-top: 5%;">
                        
                                        <div class="button-addlist  dropdown"  >
                                            <a class="nav-link " > <i class="fa fa-map-marker"></i><br>Aurangabad </a>
            
                                        </div>
                                    </li> -->

                                    <li style="margin-top: 5%;">
                                        <div class="button-addlist  dropdown ">
                                            <a href="login1.html
                                            "><button type="button" class="btn" href='page-addlisting.html'><i class="fa fa-map-marker"></i> Aurangabad</button></a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="button-addlist  dropdown ">
                                            <a href="{{route('event')}}
                                            "><button type="button" class="btn" href='events.html'><i class="fa fa-check-square-o" ></i> Events</button></a>
                                        </div>
                                    </li>

                                        <li>
                                            <div class="button-addlist  dropdown ">
                                                <a href="{{route('login')}}
                                                "><button type="button" class="btn" href='page-addlisting.html'><i class="fa fa-user-plus"></i> Login</button></a>
                                            </div>
                                        </li>

                                    <li>   
                                        <div class="button-addlist  dropdown">
                                        <button type="button" onclick="myFunction()" class="btn dropbtn"
                                            onclick="location.href='page-addlisting.html'"><i class="fa fa-sign-in"></i>
                                            Sign Up</button>
                                        <div id="myDropdown" class="dropdown-content" style="z-index: 1000;">
                                            <a href="{{route('school_institute_register_form')}}">School/College/Institution</a>
                                            <a href="{{('student_register_form')}}">Student/Parent </a>
                                            <a href="{{('tutor_register_form')}}">Tutor/Faculty </a>
                                        </div>
                                    </div>
                                </li>
                                  
                                  

                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->

                            <!-- <div class="button-addlist float-right">
                                <button type="button" class="flat-button"
                                    onclick="location.href='page-addlisting.html'">Add Listing</button>
                            </div> -->
                        </div><!-- /.nav-wrap -->
                    </div>
                    <!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div>
        </header><!-- /.header -->

        @yield('heder1_content')


           <!-- Footer -->
           <footer class="footer footer-widgets">
        
            <div class="container">
                <div class="bottom" >
                    <div class="row">
                        <div class="col-md-4"  style="margin-bottom: 2%;">
                            <div class="copyright">
                                <p>© 2023 Infolekha <a href="https://themeforest.net/user/themesflat/portfolio"></a> All
                                    Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </p>
                            </div>
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-3" style="margin-top: 15px; margin-bottom: 2%;">
                            <h6 class="widget-title"><a href="about-us.html">About us &nbsp;&nbsp;&nbsp;</a> <a href="blogs.html">Blogs &nbsp;&nbsp;&nbsp;</a>
                                <a href="{{route('web_contacts')}}">Contact&nbsp;&nbsp;&nbsp;</a>
                            </h6>
                        </div>
                        <div class="col-md-5"  style="margin-bottom: 2%;">
                            <div class="social-links float-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i  class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal fade flat-popupform" id="popup_login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center clearfix">
                        <form class="form-login form-listing" action="#" method="post">
                            <h3 class="title-formlogin">Log in</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="email"
                                    required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*"
                                    name="password" required="required"><i class="fa fa-lock"></i></span>
                            <div class="flat-fogot clearfix">
                                <label class="float-left">
                                    <span class="input-check">
                                        <input type="checkbox" id="rem" name="check" value="0" checked="">
                                        <label for="rem" class="remember">Remember me</label>
                                    </span>
                                </label>
                                <label class="float-right link-register">
                                    <a href="#">Lost your password?</a>
                                </label>
                            </div>
                            <span class="wrap-button">
                                <button type="button" id="login-button" class=" login-btn effect-button"
                                    title="log in">LOG IN</button>
                            </span>
                        </form>
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
                        <form class="form-login form-listing" action="#" method="post">
                            <h3 class="title-formlogin">Sign Up</h3>
                            <span class="input-login icon-form"><input type="text" placeholder="Your Name*" name="name"
                                    required="required"><i class="fa fa-user"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="E-mail*" name="email"
                                    required="required"><i class="fa fa-envelope-o"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Password*"
                                    name="password" required="required"><i class="fa fa-lock"></i></span>
                            <span class="input-login icon-form"><input type="text" placeholder="Repeat Password*"
                                    name="password" required="required"><i class="fa fa-lock"></i></span>
                            <div class="wrap-button signup">
                                <button type="button" id="logup-button" class=" login-btn effect-button"
                                    title="log in">LOG UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go Top -->
        <a class="go-top effect-button">
            <i class="fa fa-angle-up"></i>
        </a>

    </div>

    <!-- Javascript -->
    <script src="{{asset('website_events/javascript/jquery.min.js')}}"></script>
    <script src="{{asset('website_events/javascript/tether.min.js')}}"></script>
    <script src="{{asset('website_events/javascript/bootstrap.min.js')}}"></script>
    <script src="{{asset('website_events/javascript/jquery.easing.js')}}"></script>
    <script src="{{asset('website_events/javascript/jquery-waypoints.js')}}"></script>
    <script src="{{asset('website_events/javascript/jquery-countTo.js')}}"></script>
    <script src="{{asset('website_events/javascript/owl.carousel.js')}}"></script>
    <script src="{{asset('website_events/javascript/jquery.cookie.js')}}"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <script src="{{asset('website_events/javascript/parallax.js')}}"></script>
    <script src="{{asset('website_events/javascript/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('website_events/javascript/smoothscroll.js')}}"></script>

    <script src="{{asset('website_events/javascript/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('website_events/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/slider.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('website_events/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

<script>
   var currentImg = 0;
  var imgs = document.querySelectorAll('.slider img');
  let dots = document.querySelectorAll('.dot');
  var interval = 3000;

  // Second banner
  var secondEventTitle = 'Hi! *Freshmen* Orientation Day';

  // Third banner
  var thirdEventDate = new Date('2023-02-01'); // pull this from database
  var thirdEventDateString = thirdEventDate.toLocaleDateString('en-us', { year: 'numeric', month: 'short', day: 'numeric' });
  var days = calculateDays(new Date(), thirdEventDate) || 0;
  const countdownText = days > 0 ? `${days} days left` : 'Live Now!';

  var secondImageUrl = `https://ondemand.bannerbear.com/simpleurl/01YWAxB7nGYdJrKoXM/title/text/${encodeURIComponent(secondEventTitle)}`;
  var thirdImageUrl = `https://ondemand.bannerbear.com/simpleurl/ley9O0B2ZGbB4GjRDY/date/text/${encodeURIComponent(
    thirdEventDateString
  )}/countdown/text/${encodeURIComponent(countdownText)}`;

  document.getElementById('img-2').src = secondImageUrl;
  document.getElementById('img-3').src = thirdImageUrl;

  var timer = setInterval(changeSlide, interval);

  function changeSlide(n) {
    for (var i = 0; i < imgs.length; i++) {
      imgs[i].style.opacity = 0;
      dots[i].className = dots[i].className.replace(' active', '');
    }

    currentImg = (currentImg + 1) % imgs.length;

    if (n != undefined) {
      clearInterval(timer);
      timer = setInterval(changeSlide, interval);
      currentImg = n;
    }

    imgs[currentImg].style.opacity = 1;
    dots[currentImg].className += ' active';
  }

  function calculateDays(today, eventDate) {
    const difference = eventDate.getTime() - today.getTime();

    return Math.ceil(difference / (1000 * 3600 * 24)); // convert to days
  }
    </script>
</body>

</html>