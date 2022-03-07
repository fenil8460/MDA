<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master')
@include('home.landing.header')
@section('faculty')
<div id="main">
	<div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
      <div class="section-padding">
      <header class="content-header">
         <h1>Elementary Aged (Ages 6-11)</h1>
         <h2>Bhangra, Bollywood, Garba, Tollywood and More</h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
               <div class="contentblock contentformat contentlinks s w bc">
                  <p>Ready for your elementary-aged child to start dancing with us? Dancing at a young age can help promote your child&#8217;s self-confidence, develop their creativity, build social skills, and give them a lifelong love of dance and movement.
                  </p>
                  <p>At Masti Dance Academy we offer a variety of dance classes for your child at every age and skill level. It’s never too early or too late for your child to try dance. If you aren’t sure which class is the right fit for your child, give our studio a call and we’ll be happy to help!</p>
               </div>
            </div>
            <div class="container shading-holder colors-white">
               <div class="header-group c s w bc">
                  <h2 class="g b"> <span>Available Classes</span></h2>
                  <h3 class="g b"> Dance Types for this Age Group</h3>
               </div>
            </div>
            <div class="items items-grid items-centered items-5" data-equal=".items-item" data-equalitem=".items-sizer">
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" href="/../../elementary/Little-Leapers">
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/Ages 6 to 8 (4).webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                        <div class="items-content">
                           <div class="items-info items-sizer">
                              <h3 class="items-header">Little Leapers (Ages 6-8)</h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" href="../../elementary/Jumpy-Junior">
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/Ages 10 to 11.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" /></div>
                        <div class="items-content">
                           <div class="items-info items-sizer">
                              <h3 class="items-header">Jumpy Juniors (Ages 8-11)</h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" href="../../elementary/Dancing-Dynamites">
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/Ages 10 to 12.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" /></div>
                        <div class="items-content">
                           <div class="items-info items-sizer">
                              <h3 class="items-header">Dancing Dynamites (Ages 8-12) </h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" href="../../elementary/Golden-Glam">
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/Ages 10 to 12 (3).webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" /></div>
                        <div class="items-content">
                           <div class="items-info items-sizer">
                              <h3 class="items-header">Golden Glam (Ages 9-12)</h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" href="#">
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/Ages 6 to 8 (3).webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                        <div class="items-content">
                           <div class="items-info items-sizer">
                              <h3 class="items-header">Bolly Hop (Ages 6-11) </h3>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
           <nav class="navigation site-navigation">
               <div class="site-navigation-pages"><a href="/Crazy-Cuties4-6" rel="prev"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i> Crazy Cuties(4-6) </a><a class="site-navigation-alt" href="/classes-by-ages">Back</a><a href="/elementary/adolescent" rel="next">Adolescents (Ages 12-19) <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a></div>
            </nav>
         </div>
      </div>
   </div>
</div>
</div>
@include('home.landing.footer')