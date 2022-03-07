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
         <h1>Internship Positions</h1>
         <h2><a class="top-hire-us" href="https://docs.google.com/forms/d/1yZ0gJS-0uhv2k4XqZ38qXMvAIYmztGYx0nXf06-vDs8/edit?usp=sharing" target="blank">APPLY TODAY!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
             
            <div class="contentblock contentformat contentlinks s w bc">
                    <p>Freshman and Senior High School students having a passion in dance and interested in learning how to teach dance are encouraged to apply. Interns will play an active, direct, hands-on role in the continued growth and evolution of our organization. Although Masti Dance Academy's internship first is unpaid, based on an evaluation after a session (one session is usually 18 weeks long), we would love to have our interns on board.</p>
                    <p>Choose from one or more of these Intenrship positions:</p>
                    <ul>
                     <li>Assistant Dance Instructors Intern</li>
                     <li>Social Media/Communications Intern</li>
                    </ul>
                    <p>Responsibilities include:</p>
                    <ul>
                    <li>Combine artistry, passion, and growth</li>
                    <li>Be a part of a team on the brink of something new</li>
                    <li>Receive on-the-job training</li>
                    <li>Work alongside professional staff both independently and collaboratively</li>
                    <li>Gain hands-on experience in arts administration</li>
                    <li>Immerse yourself in a creative environment</li>
                    </ul>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')