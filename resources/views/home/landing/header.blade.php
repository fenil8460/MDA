<link rel="icon" type="image/png" href="{{URL::asset('assets/images/favicon.png') }}"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
     window.addEventListener('scroll', myFunction);

var navbar = document.getElementById("navbarTogglerDemo01");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= 100) {
    $("#navbarTogglerDemo01").addClass("sticky");
    $(".nav-item").css("margin-right","2.2cm");
    $("#registionbutton").css("margin-right","30px");
  } else {
    $("#navbarTogglerDemo01").removeClass("sticky");
    $(".nav-item").css("margin-right","1.6cm");
    $("#registionbutton").css("margin-right","0px");
  }
}
});
</script>
 @if(Session::has('status'))        
<script type="text/javascript">
  $( document ).ready(function() {
 swal("Done", "We have received your request and will get back to you as soon as we can. Thank you for reaching out to us!!", "success");
});
</script>
@endif
<style type="text/css">
.responsive-table tbody tr td{    padding: .3em .7em !important}
.content-header>h2{padding-top:11px;}
  .collapse.show{position: absolute;}
  .swal-button{background-color: #452c82;}
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
  right: 0px;
  background: -webkit-linear-gradient(#20148F, #068C71);
}
.dropdown-menu li:hover a {
    color: black;
}
.dropdown-submenu .dropdown-menu li a{
    color: white;
}

.dropdown-submenu .dropdown-menu li:hover a {
    color: black;
}
.dropdown-menu li a:hover {
    color: unset;
    background-color: unset;
}


</style>
 <div id="header">
    <div id="header-object">
        <div id="header-padding" class="section-padding">
            <div id="header-content">
                 <div id="header-logo" style="max-width:110px;">
                  <img src="{{URL::asset('assets/images/logo.png') }}" id="loading1">
                </div>
                <div class="container" id="container">
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About 
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/../../about_us"> Learn About Us</a></li>
              <li><a class="dropdown-item" href="/../../faculty"> Faculty</a></li>
              <!--<li><a class="dropdown-item" href="#"> Blog</a></li>-->
              <li><a class="dropdown-item" href="/../../testimoni"> Testimonials</a></li>
              <li class="dropdown-submenu" ><a class="dropdown-item dropdown-toggle" href="#">Careers</a>
                <ul class="dropdown-menu" id="sub">
                    <li><a class="dropdown-item" href="/../../teaching_positions">Teaching Positions</a></li>
                    <li><a class="dropdown-item" href="/../../internship_positions">Internship Positions</a></li>
                    <li><a class="dropdown-item" href="/../../masti_crew">Masti Crew</a></li>
                </ul>
              </li>
              <!-- <li><a class="dropdown-item" href="/../../employment_opportunities"> Employment Opportunities</a></li> -->
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
         Classes
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/../../classes">Overview </a></li>
             <li class="dropdown-submenu" ><a class="dropdown-item dropdown-toggle" href="#">Classes Offered</a>
                <ul class="dropdown-menu" id="sub">
                    <li><a class="dropdown-item" href="/../../online">Online </a></li>
                    <li><a class="dropdown-item" href="/../../plano">Plano</a></li>
                    <li><a class="dropdown-item" href="/../../west_frisco">West Frisco</a></li>
                    <li><a class="dropdown-item" href="/../../coppell">Coppell</a></li>
                    <li><a class="dropdown-item" href="/../../private_gully">Private Gully</a></li>
                </ul>
              </li>
           <!--  <li><a class="dropdown-item" href="/../../classes-offered">Classes Offered </a></li> -->
          <!-- <li class="dropdown-submenu" ><a class="dropdown-item dropdown-toggle" href="#">Classes by Ages</a>
            <ul class="dropdown-menu" id="sub">
              <li><a class="dropdown-item" href="/../../classes-by-ages">Overview</a></li>
                    <li><a class="dropdown-item" href="/../../elementary-aged">Elementary Aged (6-11)</a></li>
                    <li><a class="dropdown-item" href="/../../elementary/adolescent">Adolescents (12-19)</a></li>
                     <li><a class="dropdown-item" href="/../../free-trial-class">Free Trial Class</a></li>
            </ul>
          </li> -->
            <li><a class="dropdown-item" href="/../../../tuition"> Tuition </a></li>
            <li><a class="dropdown-item" href="/../../free-trial-class"> Free Trial Class </a>
            </li>
            <li><a class="dropdown-item" href="/../../policies">Policies</a></li>
            <li><a class="dropdown-item" href="/../../classes_faq">FAQ</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Hire Us
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li class="dropdown-submenu" ><a class="dropdown-item dropdown-toggle" href="#">Corporate Event</a>
            <ul class="dropdown-menu" id="sub">
              <li><a class="dropdown-item" href="/../../team_building_activities">Team Building Activities</a></li>
                    <li><a class="dropdown-item" href="/../../corporate_entertainment">Corporate Entertainment</a></li>
            </ul>
          </li>


              <li><a class="dropdown-item" href="/../../../weddings_private"> Weddings and Private Events</a></li>
              <li><a class="dropdown-item" href="/../../../school_workshops"> Workshops and Festivals</a></li>
              <li><a class="dropdown-item" href="/../../../birthday"> Birthdays</a></li>
              <li><a class="dropdown-item" href="/../../../flashmobs"> Flashmobs</a></li>
              <li><a class="dropdown-item" href="/../../hire_faq">FAQ</a></li>
        </ul>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Costume Rental 
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <li><a class="dropdown-item" href="/../../../indowestern"> Indowestern</a></li>
              <li><a class="dropdown-item" href="/../../../western"> Western</a></li>
              <li><a class="dropdown-item" href="/../../../classical"> Classical</a></li>
        </ul>
      <!-- </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About 
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/../../about_us"> Learn About Us</a></li>
              <li><a class="dropdown-item" href="/../../faculty"> Faculty</a></li>
              <li><a class="dropdown-item" href="#"> Blog</a></li>
              <li><a class="dropdown-item" href="/../../testimoni"> Testimonials</a></li>
              <li><a class="dropdown-item" href="/../../employment_opportunities"> Employment Opportunities</a></li>
              <li><a class="dropdown-item" href="#"> Alumni</a></li>
        </ul>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="/../../../contact_us">Contact</a>
      </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0" id="registionbutton" style="visibility: hidden;">
        <p  style="
        border-radius: 100px;
        box-shadow: 2px 2px 15px 0 hsla(0,0%,50%,0.2);
        font-weight: 800;width: max-content;
        padding: 10px 25px;background-color: #452c82;
    
        ">
     <a class="nav-link" href="/../../classes-offered"  style="color: #ffd131;font-size: initial;"> Register<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> </a></p>
    </form>
  </div>
</nav>
</div>
</div>
</div>
</div>
</div>
<style type="text/css">
</style>
<style type="text/css">
  #loading1{opacity: 0;}
   .navbar-light .navbar-nav .nav-link .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover
    {
        color: #ffd131;
    }
    .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link{color: #ffd131;}
    .navbar-expand-lg .navbar-nav .nav-link{font-size: 15px;font-weight: 700;color: white;}
    .nav-item{margin-right: 1.6cm;}
    .mt-2{margin-left: auto;}
    .dropdown-submenu {
  position: relative;
}
.dropdown-menu li{height: 38px; }

.dropdown-menu{
     background-color:#1e1576;
    border-radius: 4px;
    box-shadow: 2px 2px 15px 0 hsl(0deg 0% 50% / 20%);
    font-size: 14px;
    font-weight: 400;
    left: 50%;
    opacity: 1;
    margin: 0 0 0 -120px;
    position: absolute;
    text-align: center;
    transition-property: opacity;
    width: 240px;
    z-index: 10;
}
 .dropdown-item{
    margin-right: 0px;
margin-top: 0px;margin-bottom: 0px;top: 50%;  position: relative;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
            color: white;text-align: center;}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}
.navbar{padding: 0px 0px!important;display: contents!important;}
.dropdown-menu li:hover{background-color: white;}
.dropdown-item.active,.dropdown-item:active{background-color:#452c82;color:#ffd131;}
 @media all and (max-width: 1000px) {
   .navbar-toggler-icon{background-image: url(/../../../assets/images/hamburger-menu-icon-png-white-10.jpg)!important;}

.my-2 {
  position: absolute;
    margin-top: -29.0rem!important;
    margin-bottom: -1.5rem!important;
    margin-left: -35px;
}

                  #header-logo {margin-left: 2.8cm !important;padding-top: 0px!important;}
                  #loading1{margin-top: -13px;}
                  .mt-2{margin-top: 1.5rem!important;}     
                  .mt-2{margin-top: 1.5rem!important;}
                  .hero-text{margin-top: 155px!important;}
                  section{height: 35%;}
                  .slide-title{opacity: 0;}
                .navbar-toggler{margin-left: auto;color: white;border: 0px;border:0px;}
                .navbar-expand-lg .navbar-nav .nav-link{padding-right: 0rem;color: white;background-color:#452c82;width: 100%; font-weight: 10;text-align: center;}
                .navbar-expand-lg .navbar-nav .nav-link{}
                .navbar{width: 100%;}
                .navbar-nav li{height: 36px;background-color:#452c82;}
                .nav-item{margin-right: 0cm;width: 325px;margin-left: -42px;}
                .navbar-nav .dropdown-menu{width: inherit;margin-left: 0px;float: none;    position: sticky;}
                #sub{margin-top: 20px;}
                .dropdown-menu{background-color: #341e6c;}
                #test1{margin-left:11%!important;}

            }
            @media all and (device-width: 360px) {
                .nav-item{margin-right: 0cm;width: 360px;margin-left: -40px;}
                .navbar-nav .dropdown-menu{width: inherit;margin-left: 0px;float: none;    position: sticky;}
                #header-logo {margin-left: 2.6cm !important;}
                 #test1{margin-left:16%!important;}
                 section{height: 38%!important;} 
                 .slide-title{opacity: 1;margin-top: -5cm!important;}
                 .hero-text{margin-top: 150px!important;}
            }
              @media all and (device-width: 411px),(device-width: 414px) {
                .nav-item{margin-right: 0cm;width: 415px;margin-left: -42px;}
                .navbar-nav .dropdown-menu{width: inherit;margin-left: 0px;float: none;    position: sticky;}
                #header-logo {margin-left: 3.6cm !important;}
                #test1{margin-left:22%!important;}
                  .hero-text{ margin-top: 120px!important;}
                   .slide-title{opacity: 1;margin-top: -8cm!important;}
            }
              @media all and (device-width: 375px) {
                .nav-item{margin-right: 0cm;width: 378px;margin-left: -42px;}
                .navbar-nav .dropdown-menu{width: inherit;margin-left: 0px;float: none;    position: sticky;}
                #header-logo {margin-left: 3cm !important;}
                #test1{margin-left:16%!important;}
                .slide-title{opacity: 1;margin-top: -11cm!important;}
                .hero-text{ margin-top: 135px!important;}
            }
             @media  screen  and (device-width: 1024px) {
                .nav-item{margin-right: 1.0cm;}
                #header-logo {margin-left: -59px;}
                .my-lg-0 {margin-right: -82px;}
                .slide-title{opacity: 1;margin-top: -6cm!important;}
                .hero-text{ margin-top: -80px!important;}
            }
              @media  screen  and (device-width: 768px) {
                .navbar-nav .dropdown-menu {
                    width: 250px;margin-left: 128px;float: right;position: absolute;}
                .nav-item{margin-right: 1.0cm;width: 255px;}
                #header-logo {margin-left: 8cm !important;padding-top: 0px!important;}
                .my-lg-0 {margin-right: -82px;}
                #sub{margin-top: 20px;position: absolute;margin-left: 0px;}
                 .slide-title{opacity: 1;margin-top: -6cm!important;}
                .hero-text{ margin-top: 23px!important;}
                .hero-intro{max-width: 75%!important;}
            }
             @media all and (device-width: 540px) {
                .nav-item{margin-right: 0cm;width: 540px;margin-left: -40px;}
                .navbar-nav .dropdown-menu{width: inherit;margin-left: 0px;float: none;    position: sticky;}
                  #header-logo {margin-left: 5cm !important;padding-top: 0px!important;}
                  #loading1{margin-top: -13px;}
                  .mt-2{margin-top: 1.5rem!important;}
                  #test1{margin-left:26%!important;}
                  .slide-title{opacity: 1;margin-top: -10cm!important;}
                .hero-text{ margin-top: 70px!important;}
                .hero-intro{max-width: 100%!important;line-height: 2em!important;}
            }
              @media  screen  and (device-width: 280px) {
                .nav-item{margin-left:-61px;}     }

}
.container {    margin: 25px 25px!important;max-width: fit-content!important;}
#container {max-width: inherit!important;}
</style>
<script type="text/javascript">
$(document).ready(function(){
$(".nav-item").hover(function(){
  $(this).children(".dropdown-menu").first().addClass("show");
    }, function(){
       $(this).children(".dropdown-menu").first().removeClass("show");
  });
  $(".dropdown-submenu").hover(function(){
  $(this).children("#sub").first().addClass("show");
    }, function(){
       $(this).children("#sub").first().removeClass("show");
  });
});

    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });

  return false;
});
   
</script>
