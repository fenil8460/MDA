<link rel="icon" type="image/png" href="{{URL::asset('assets/images/favicon.png') }}"/>
<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master')
@include('home.landing.header')
@section('faculty')
<style type="text/css">
  .top-hire-us{
    background: #efefef;
    padding: 8px 20px 8px 20px;
    border-radius: 10px;
  }
</style>
<div id="main">
   <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
      <div class="section-padding">
      <header class="content-header">
         <h1>Workshops and Festivals</h1>
         <h2><a class="top-hire-us" href="https://forms.gle/Ze8cWQtdnHxXRGbS7" target="blank">Hire Us!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">

               <div class="contentblock contentformat contentlinks s w bc">
                   <h5>SCHOOLS:</h5>
                 <p>Is your school looking for a fun, educational, and unique experience for its students? Want to take India off the map and bring it to life? Our expert teachers know how to get young learners of all backgrounds excited about music, Bollywood dance, and Indian culture. In partnership with primary,  secondary, and tertiary institutions across London,</p>
                  
                  <p>Our Bollywood school workshops can be easily integrated into any geography, history, or social studies curriculum. Workshops include an intro to Bollywood and Indian cinema, a warm-up, an explanation of a song’s meaning, and of course, plenty of dancing!</p>
                  <p>What to expect from an Indian Bollywood Dance Workshop:</p>
               <ul>
                   <li>We will provide an authentic Indian teacher in full costume as feel students really gain from teachers who have an affinity with Indian culture.</li>
                   <li>We supply colourful hips scarves for the children to get dressed up, as well as bindis to hand out as prizes.</li>
                   <li>We educate students on the background of Indian culture, geography and Indian Dance.</li>
                   <li>We use Indian style games to engage students and help them learn bespoke hand gestures in a fun and practical way.</li>
                   <li>All students will learn a dance routine to traditional music and we also encourage students to come up with their own creative ideas too.</li>
                   <li>An education pack will be left with the school. This includes detailed handouts for the students, homework assessments, a certificate as well as music files for the songs used in the session.</li>
                   <li>We recommend a group size of 30. For Grades k -1 we would recommend a maximum of 30-minute session.</li>
               </ul>
               <img class="wedding_performance" src="{{ asset('assets/images/')}}/{{$data->image_name}}"/>
               <h5><strong>Teacher Tips for Bollywood School Workshops</strong></h5>
               <ul>
                   <li><strong>Identify your numbers:</strong> Bollywood School Workshops typically last between 30 and 90 minutes, depending on the age group. We can accommodate up to 30 students at a time. We can accommodate simultaneous workshops for more students if your school has different sites.</li>
                   <br>
                   <li><strong>Scale:</strong> We can provide anywhere from three dancers to ten. Pricing varies accordingly. We offer both dance workshops and performance displays – perfect for cultural days and PTA evenings</li>
                   <br>
                   <li>For full information, pricing and reserving, contact us at 469-939-9550!</li>
                   
               </ul>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')