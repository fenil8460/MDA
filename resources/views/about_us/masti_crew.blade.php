<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master')
@include('home.landing.header')
@section('faculty')
<style type="text/css">
   .hire-us{
   width: 130px;
    height: 40px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 600;
    margin-left:45%
  }
  .wedding_performance{
   margin-top: 35px;
  }
  .top-hire-us{
    background: #efefef;
    padding: 8px 20px 8px 20px;
    border-radius: 10px;
  }
  @media screen and (max-width: 1023px) {
 
  .hire-us{
    margin-left:25%
  }
  }
</style>
<div id="main">
   <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
      <div class="section-padding">
      <header class="content-header">
         <h1>Masti Crew</h1>
         <h2><a class="top-hire-us" href="https://forms.gle/3FJLBiPwWuFwTPQK7" target="blank">Join our Team</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
             
            <div class="contentblock contentformat contentlinks s w bc">
                  <p>Are you looking to be part of something special?
                      <br>
                      Keep your day job and join our fun and friendly team of dancers.
                  </p>
                   <p>We’re always on the look-out for enthusiastic and talented male and female dancers with a professional work ethic. You don’t need prior Bollywood dance experience as we provide full training.  We have events all across the Dallas Metroplex and you have the flexibility to choose the gigs that you want.</p>
                   <p>
                   So why not get paid for having fun? 
                   </p>
                   <p>
                   Interested in joining Masti Crew? <br>
                   <a href="https://forms.gle/3FJLBiPwWuFwTPQK7">YES PLEASE!</a>
                   </p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')