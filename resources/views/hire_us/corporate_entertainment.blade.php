<link rel="icon" type="image/png" href="{{URL::asset('assets/images/favicon.png') }}"/>
<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master')
@include('home.landing.header')
@section('faculty')
<style type="text/css">
a.faqs {
    font-size: 18px;
}
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
         <h1>Corporate Bollywood Entertainment</h1>
         <h2><a class="top-hire-us" href="https://docs.google.com/forms/d/1ocfLStu8W-d3UJcM-ZcFc8XogQ9Ukobo6Fxo4UPpGUY/edit" target="blank">Hire Us!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
            <!-- <button class="hire-us"><a href="https://docs.google.com/forms/d/1ocfLStu8W-d3UJcM-ZcFc8XogQ9Ukobo6Fxo4UPpGUY/edit" target="blank">HIRE US</a></button> -->
             
            <div class="contentblock contentformat contentlinks s w bc">
                  <p>Looking for corporate Bollywood entertainment? Masti Crew has a range of services to suit several types of corporate events. Whether Awards Ceremony, Annual Party or Cultural Day, we offer fantastic solutions for corporate needs. Our Bollywood dancers will bring colour and energy to your corporate event, creating an unforgettable spectacle. We tailor each performance to the client; considering your brand, the venue and budget. We can also combine performances with interactive workshops for a fuller experience. If you need your corporate Bollywood entertainment to pull out all the stops, then we can guarantee this will do just that.
                   </p>
                   <p>Let the Masti Dance Academy Performance Company add some energy and entertainment to your next corporate event.  We do it all, including conferences, conventions, holiday parties, media events, showcases, concerts, non-profit events and more.</p>
                  </div>
                <!--  <h3 class="a b c s w bc"> PERFORMANCES AND WORKSHOPS
                 </h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                 <p> We are committed to making your event memorable, and delivering Bollywood Dance like you have never seen it before! The costumes are vibrant, the choreography is exciting, and our professional company is ready to take you on a journey to Bollywood! Whether it’s a five-minute demonstration to invigorate your crowd, mid-conference; to a 30-minute Bollywood experience complete with a workshop; our company is ready to work with your ideas and make your event the best it can be!</p>
                 </div> -->

                <!--  <h3 class="a b c s w bc">EXECUTIVE ENGAGEMENT

                 </h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                  <p>Get involved! Let us teach your Corporate Executives how to dance Bollywood for your next event. Perfect as an icebreaker for your next conference, a surprise for your team, and a show of cultural diversity. We will teach you a simple and exciting Bollywood routine and have you suited up and performance ready! We work with your experiences and needs, and can provide the perfect back-up dancers for your executives to really shine!</p>

                  <p>At Masti Dance Academy, we go to great lengths to make sure our performances are memorable and exciting. Our dancers are professionally trained and have a wealth of experience. Whether for your wedding celebrations, your birthday party or your 30 year anniversary – our professional company will help you execute your vision for this special event with professionalism and grace.</p>
                 </div> -->
                
                 {{-- <img class="wedding_performance" src="{{ asset('assets/images/')}}/{{$data->image_name}}"/> --}}
                 <img class="wedding_performance" src=""/>
                 <a class="faqs" href="/hire_faq">View FAQ's</a>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')