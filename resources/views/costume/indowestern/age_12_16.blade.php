<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master')
@include('home.landing.header')
@section('faculty')
<style type="text/css">
  .size-item-large{height: 214px!important;min-width: 316px!important;}
</style>
<div id="main">
   <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
      <div class="section-padding">
      <header class="content-header">
         <h1>Indowestern</h1>
         <h2>Age 12 to 16</h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
          <div class="items items-grid items-centered items-9" data-equal=".items-item" data-equalitem=".items-sizer">
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link">
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/12-16/Box7 Bw1CCC42 Q14GRBA10-14.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" >
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/12-16/BOX46 LC8 QB5 A10-14 IW.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" /></div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" >
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/12-16/BOX242AB LC7 IWGBG 12SETS.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                     </a>
                  </div>
               </div>
                     
               
            </div>
      </div>

   </div>

</div>
@include('home.landing.footer')