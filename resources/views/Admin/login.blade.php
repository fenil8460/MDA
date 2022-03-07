
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

   <!-- Custom Theme files -->
   <link href="{{URL::asset('assets/Admin/login/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{URL::asset('assets/Admin/login/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
   <!-- //Custom Theme files -->

   <!-- web font -->
   <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
   <!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
   <div class="bg-layer">
      <h1 style="background: -webkit-linear-gradient(#3368a8, #67b793);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">MASTI DANCE ACADEMY
</h1>
      <div class="header-main">
         <div class="main-icon">
            <span class="fa"><img src="{{URL::asset('assets/images/logo.png') }}" style="height:150px;"></span>
         </div>
         <div class="header-left-bottom">
            <form action="Login" method="post">
              @csrf
              <span style="color:red;"><?php 
              echo Session::get('error');
              ?></span>
               <div class="icon1" >
                  <span class="fa fa-user"></span>
                  <input type="email" placeholder="Email Address" required="" name="email"/>
               </div>
               <div class="icon1">
                  <span class="fa fa-lock"></span>
                  <input type="password" placeholder="Password" required="" name="password"/>
               </div>
               <div class="bottom">
                  <button class="btn">Log In</button>
               </div>
               <div class="links">
                  <p><a href="#">Forgot Password?</a></p>
                  <div class="clear"></div>
               </div>
            </form>  
         </div>
      </div>
      
      <!-- copyright -->
      <div class="copyright">
         <p>© 2021 All rights reserved by  <a href="http://https://masti.miisuppliers.in/" target="_blank">MASTI DANCE ACADEMY</a></p>
      </div>
      <!-- //copyright --> 
   </div>
</div>   
<!-- //main -->

</body>
</html>