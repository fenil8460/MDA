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
         <h1>Teaching Positions</h1>
         <h2><a class="top-hire-us" href="https://forms.gle/1sp97AzjYHP5xCCZ9" target="blank">APPLY TODAY!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
             
            <div class="contentblock contentformat contentlinks s w bc">
                  <p>Dance Teachers, Substitute Teachers, Teacher's Assistant<br>
                   Are you a mover and a shaker?</p>
                   <p>Yes!  Finally you found your place!  Here is your chance to enrich children’s lives through dance and work with a company that is going above and beyond.</p>
                   <p>A bit about us:<br>
                   Masti Dance Academy hires rockstar candidates who EXCEL at their strengths but ALSO love to learn. Our employees understand that they are role models for our students, in and out of the studio.
                   </p>
                   <p>
                   Ownership of your classes
                   <br>
                   Believe in your potential because you have the 'X' factor? We love that! 
                  <br>
                   We have a great teacher training program for the right candidates who need a little more support in order to become great.
                  <br>
                   Must Love and Be Great with children to young teens (We love tiny tots! No advanced classes or competitions here.)
                   </p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')