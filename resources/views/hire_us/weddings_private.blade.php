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
  .emmbed-video{
     margin-left:25%;
  }
  .top-hire-us{
    background: #efefef;
    padding: 8px 20px 8px 20px;
    border-radius: 10px;
  }
  @media screen and (max-width: 1023px) {
   .emmbed-video{
     margin-left:unset;
  }
  .hire-us{
    margin-left:25%
  }
  }
</style>
<div id="main">
   <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
      <div class="section-padding">
      <header class="content-header">
         <h1>Weddings and Private Events</h1>
         <h2><a class="top-hire-us" href="https://forms.gle/HJJ8NiukSoH2ZcHz6" target="blank">Hire Us!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
               
               <!-- <button class="hire-us"><a href="https://forms.gle/HJJ8NiukSoH2ZcHz6">HIRE US</a></button> -->
               <div class="contentblock contentformat contentlinks s w bc">
                  <p><strong>Do you want to make your wedding memorable?</strong></p>
                  <p>Creative, and energetic wedding choreographies to light up any celebration. Our choreographies are built to make your friends and family look good and have fun putting it together. We’re the world experts on making non-dancers look great dancing !</p>
                  <p>You can hire us to perform or we can teach you the choreography:</p>
                  <p>Not in Dallas?</p>
                  <P>We'll do live online lessons and send you practice videos as a supplement.</p>
                  <div class="emmbed-video">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/cV2ksh1fUfY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                     <p><strong>Our Wedding Choreography Services:</strong></p>
                     <h3 class="a b c s w bc">First Dance</h3>
                     <p>You’re not a boring couple then why do whatever the other couple is doing? Add a Bollywood twist to your first dance as husband and wife.</p>
                     <p>Are you thinking “but I can’t dance”.</p>
                     <p>Don’t worry, we specialise in choreographing for couples of any skill level so you can relax and leave it to us! We will provide you with private tuition so that you can dance like a professional dancer on your wedding day!</p>
                     <h3 class="a b c s w bc">Family Dance</h3>
                     <p>Uncles, Aunties, Cousins, Friends, and Grand-parents - Complete family dance choreography.  Mother-son duo, Father-daughter duo.  You name it, we got it!</p>
                     <h3 class="a b c s w bc">Interactive Dance</h3>
                     <p>Guests will be invited on to the dance floor to learn a series of easy and fun Bollywood dance steps from our friendly dancers. Dancers rove through the crowd to involve even the shyest participants. This is a great opportunity for your guests to let go of their inhibitions, have a laugh and mingle with guests from the opposite side of the bridal party.</p>
                     <h3 class="a b c s w bc">Wedding Entertainment</h3>
                     <p>We work with you to understand your needs and help provide the best possible solution for your special day. Depending on your requirement and budget, you can choose a small 2-dancer performance ten-minute or an elaborate 6 to 8 dancers 20-minute Bollywood extravaganza to blow your audience away.</p>
                     <p>So what are you waiting for? Contact us to find out some of our most popular Bollywood experiences or let us tailor something especially for you.</p>
                 </div>
                 <!-- <h3 class="a b c s w bc">Wedding and Sangeet Packages

                 </h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                  <p>Being romantics at heart we love collaborating with couples to create bespoke dances that your friends and family will love! Teaching is our passion, and we can work with your dance ability, personality, style and love story to create a first dance, or guide you and your friends and family in an unforgettable Bollywood performance.</p>
                  <p>In this package we coach you and the wedding party in basic dance moves for the wedding or sangeet! </p>
                  <p>* All packages include original choreography, supportive coaching, free music mixing and video support to help you practice at home!</p>
                 </div>
                  <h3 class="a b c s w bc">First Dance
                 </h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                  <p>“Whether you want intricate choreography or something fun and simple, this package is for you! ” It includes at least 4 x 1-hour teaching sessions with a Masti Dance Academy Instructor and an Assistant. You pay per session, therefore only paying for what you need!</p>
                  <p>
                  <span style=" background: -webkit-linear-gradient(#20148F, #068C71);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;"> Why do we use an assistant?
                  </span> Because for just a small fee this gives the couple someone for each of them to follow which makes it easier to follow, and speeds up learning significantly!
                  </p>
                 </div>

                  <h3 class="a b c s w bc">Masti Dance Academy
                 </h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                  <p>As above this package includes at least 4 x 2-hour teaching sessions with a Masti Dance Academy Instructort.  AND to give your wedding the full filmic experience, we include a performance from Masti Dance Academy’s professional company who can come and give a 5-minute professional</p>
                 </div> -->

                 <!-- <div class="contentblock contentformat contentlinks s w bc">
                  
                  
                  <p><a href="#"> Click here to sign up for any of the above packages </a></p>
                 </div> -->

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')