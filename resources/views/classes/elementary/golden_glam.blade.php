<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master')
@include('home.landing.header')
@section('faculty')
<div id="main">
   <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
      <div class="section-padding">
      <header class="content-header">
         <h1>Golden Glam</h1>
         <h2>For children ages 9 to 12</h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
               <div class="contentblock contentformat contentlinks s w bc">
                  <p>Our Golden Glam dance class a Bolly-Fusion Class with a mix of Bollywood and Kathak fusing with other international and Urban Dance Styles.   This class is suitable, for EVERYBODY, even if you haven't danced an inch in your life.  In this class we will focus on hand movements and communicate with facial expressions.</p>
               </div>
            </div>
            <div class="container">
               <div class="imagegroup imagegroup-3">
                  <div class="imagegroup-item imagegroup-highlight shading-highlight-bg colors-highlight">
                     <p class="imagegroup-text imagegroup-text-normal">Creative Expression</p>
                  </div>
                  <div class="imagegroup-item imagegroup-image imagegroup-image-1 f0" data-show="on-scroll"> <img width="1200" height="800" src="{{URL::asset('assets/images/Ages 14 to 16 (2).webp') }}" class="attachment-width-1200 size-width-1200" alt="" loading="lazy" sizes="(min-width: 1380px) 1040px, 100vw"/></div>
                  <div class="imagegroup-item imagegroup-image imagegroup-image-2 f0" data-show="on-scroll"> <img width="1200" height="1800" src="{{URL::asset('assets/images/Ages 14 to 16 (5).webp') }}" class="attachment-width-1200 size-width-1200" alt="" loading="lazy" sizes="(min-width: 1380px) 1040px, 100vw" /></div>
                  <div class="imagegroup-item imagegroup-image imagegroup-image-3 f0" data-show="on-scroll"> <img width="1200" height="800" src="{{URL::asset('assets/images/Ages 14 to 16 (4).webp') }}" class="attachment-width-1200 size-width-1200" alt="" loading="lazy" sizes="(min-width: 1380px) 1040px, 100vw" /></div>
               </div>
            </div>
            <div class="container shading-holder colors-white">
               <div class="contentblock contentformat contentlinks s w bc">
                  <p>Each one hour class is filled with grace and beauty!</p>
                  <p>
                    If you are interested in your child attending a class that is full, please contact our office to be placed on a waiting list so we can notify you if an opening becomes available.
                 </p>
                 <p  class="buttons-group c"><a class="button" href="https://app.jackrabbitclass.com/regv2.asp?id=526570&hc=&initEmpty=&hdrColor=&WL=0&preLoadClassID=12730672&loc=" style="color: black;text-transform: none;text-decoration-line: none; " target="_blank" rel="noopener">Try a free dance class!  Click here to request your class!</a></p>
              </div>
           </div>
           <nav class="navigation site-navigation">
               <div class="site-navigation-pages"><a href="/elementary/Dancing-Dynamites" rel="prev"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i> Dancing Dynamites (Ages 8-12) </a><a class="site-navigation-alt" href="/elementary-aged">Back</a><a href="#" rel="next">Bolly Hop (Ages 6-11) <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a></div>
            </nav>
        </div>
     </div>
  </div>
</div>
</div>
@include('home.landing.footer')