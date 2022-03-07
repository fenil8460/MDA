<link rel="icon" type="image/png" href="{{URL::asset('assets/images/favicon.png') }}"/>
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
         <h1>Corporate Team Building</h1>
         
         <h2 class="hire-us-heading"><a class="top-hire-us" href="https://docs.google.com/forms/d/e/1FAIpQLSdJCPPNDGtqVuF2Bq-yqFuyp5AYWZZrJErNb-mGwgceGOBr7g/viewform?usp=sf_link" target="blank">Hire Us!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
                <!-- <button class="hire-us"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdJCPPNDGtqVuF2Bq-yqFuyp5AYWZZrJErNb-mGwgceGOBr7g/viewform?usp=sf_link" target="blank">HIRE US</a></button> -->

               <div class="contentblock contentformat contentlinks s w bc">
                  <p>We provide an array of activities for corporations.</p>
                  <p><strong>Some of the companies that have partnered with us in the past are:</strong></p>
                  <ul>
                      <li>IT Serve</li>
                      <li>Pepsico</li>
                      <li>Cognizant</li>
                  </ul>
                  <p>Our corporate Bollywood team-building workshops offer a unique experience that are designed to bring out the best in your team. Participants leave feeling stimulated, connected, and re-energised. Our Bollywood team-building workshops are designed to cater for all levels/abilities.</p>
                  <p><strong>Our standard Bollywood team-building workshop structure includes:</strong></p>
                  <ul>
                      <li>15 minute Introduction & warm-up</li>
                      <li>15 minute Bhangra/bollywood dancing</li>
                      <li>40 minute interactive dance game</li>
                      <li>The group is split into smaller sub-teams</li>
                      <li>Each member of the team plays a part to learn & complete the full choreography</li>
                      <li>Once the choreography is complete, the group will add the final touches</li>
                      <li>10 minute ‘show & tell’ between the teams</li>
                  </ul>
                  <p><strong>Services we provide:</strong></p>
                  <ul>
                      <li>Team Building activities</li>
                      <li>Performances</li>
                      <li>Fitness/Dance Workshops</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')