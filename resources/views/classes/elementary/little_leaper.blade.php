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
         <h1>Little Leapers</h1>
         <h2>For children ages 6 to 8</h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
               <div class="contentblock contentformat contentlinks s w bc">
                  <p>We have an exciting Bollywood Class for our Little Leapers! Choreography based class to introduce and develop the basic skills, terminology and movement of bollywood. Our Little Leapers class is designed to combine a variety of dance styles from India  and teach your child a new way to dance and express themselves.</p>
               </div>
            </div>
            <div class="container">
               <div class="imagegroup imagegroup-3">
                  <div class="imagegroup-item imagegroup-highlight shading-highlight-bg colors-highlight">
                     <p class="imagegroup-text imagegroup-text-normal">Building Coordination and confidence</p>
                  </div>
                  <div class="imagegroup-item imagegroup-image imagegroup-image-1 f0" data-show="on-scroll"> <img width="1200" height="800" src="{{URL::asset('assets/images/Ages 6 to 8 (2).webp') }}" class="attachment-width-1200 size-width-1200" alt=""  loading="lazy" sizes="(min-width: 1380px) 1040px, 100vw"  /></div>
                  <div class="imagegroup-item imagegroup-image imagegroup-image-2 f0" data-show="on-scroll"> <img width="1200" height="1800" src="{{URL::asset('assets/images/Ages 6 to 8 (4).webp') }}" class="attachment-width-1200 size-width-1200" alt="" loading="lazy" sizes="(min-width: 1380px) 1040px, 100vw"/></div>
                  <div class="imagegroup-item imagegroup-image imagegroup-image-3 f0" data-show="on-scroll"> <img width="1200" height="800" src="{{URL::asset('assets/images/Ages 10 to 11.webp') }}" class="attachment-width-1200 size-width-1200" alt="" loading="lazy" sizes="(min-width: 1380px) 1040px, 100vw" /></div>
               </div>
            </div>
            <div class="container shading-holder colors-white">
               <div class="contentblock contentformat contentlinks s w bc">
                  <p>Each one hour class is filled with fun and high energy!</p>
                  <p>
                    If you are interested in your child attending a class that is full, please contact our office to be placed on a waiting list so we can notify you if an opening becomes available.
                 </p>
                 <p>If your child has prior dance experience, please call our studio at (469)939-9550 to discuss placement options.
                 </p>
                 <p  class="buttons-group c"><a class="button" href="https://app.jackrabbitclass.com/regv2.asp?id=526570&hc=&initEmpty=&hdrColor=&WL=0&preLoadClassID=12660008&loc=" style="color: black;text-transform: none;text-decoration-line: none; " target="_blank" rel="noopener">Try a free dance class!  Click here to request your class!</a></p>
              </div>
           </div>
            <nav class="navigation site-navigation">
               <div class="site-navigation-pages"><a href="../preschoolers-3-4/index.html" rel="prev"><a class="site-navigation-alt" href="/elementary-aged">Back</a><a href="/elementary/Jumpy-Junior" rel="next">Jumpy Juniors (Ages 8-11) <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a></div>
            </nav>
        </div>
     </div>
  </div>
</div>


</div>
@include('home.landing.footer')