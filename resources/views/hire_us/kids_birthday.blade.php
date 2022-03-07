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
         <h1>Kids Birthday</h1>
         <!-- <h2>We're hiring!</h2> -->
         <h2 class="hire-us-heading"><a class="top-hire-us" href="https://forms.gle/UtPb6GmQkHH2nvhXA" target="blank">Hire Us!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
               <h3 class="a b c s w bc">Want a fun birthday party idea?</h3>
               <div class="contentblock contentformat contentlinks s w bc">
                  <p>Another birthday is here. Don’t stress about coming up with yet another idea. Let us help you relax and enjoy the day with our Bollywood kids birthday parties instead of feeling under pressure.</p>
                  <p>Our hugely popular Bollywood birthday parties are all about laughter, learning and self-expression! The kids have a ball getting dressed up, playing games, dancing and experiencing Indian culture. It’s something different and fun that your child will remember forever!</p>
                 </div>

                 <h3 class="a b c s w bc">You can relax</h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                  <p>We understand that as a parent, planning a party can sometimes be stressful and you can’t fully enjoy the moment with your child. We take the pressure off you by keeping the kids and adults fully entertained so that you can relax and enjoy the fun!</p>
                 </div>

                 <h3 class="a b c s w bc">Create an unforgettable memory</h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                  <p>We have a range of Bollywood experiences that you can choose from and we are ready to help you create an unforgettable experience for your child’s next birthday. You won’t need to worry about a thing since our professional dance instructors specialise in turning even the shyest participant into a carefree Bollywood star!</p>
                 </div>


                 <h3 class="a b c s w bc">They learn about a new culture</h3>
                 <div class="contentblock contentformat contentlinks s w bc">
                  <p>Not only will children have fun while participating in an exciting Bollywood dance routine, it’s a complete cultural experience where they learn about Indian customs and costumes.</p>
                  <p>Celebrating their birthday in this way is a wonderful opportunity to impart new knowledge and promote important values of diversity, acceptance and friendship to your child.</p>
                 </div>
                 <h3 class="a b c s w bc">Let us help you create the most fun and colourful party they will thank you for!</h3>
                
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')