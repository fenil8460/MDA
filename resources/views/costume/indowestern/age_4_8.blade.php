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
         <h2>Age 4 to 8</h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
          <div class="items items-grid items-centered items-9" data-equal=".items-item" data-equalitem=".items-sizer">
          @foreach($data as $datas)
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link">
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/4-8')}}/{{$datas->image_name}}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                     </a>
                  </div>
               </div>
               @endforeach
               <!-- <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" >
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/4-8/BOX38 LC11 Q14 A 5-6 IW.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" /></div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" >
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/4-8/BOX 37 LC9 IWGPW.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                     </a>
                  </div>
               </div>
                 <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" >
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/4-8/BOX63B LC6 IW31 BSBMC.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" /></div>
                     </a>
                  </div>
               </div>
               <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" >
                        <div class="items-image f0"> <img src="{{URL::asset('assets/images/costumes/Indowestern/4-8/BOX42 LC7 Q12 A 10-14 IW.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                     </a>
                  </div>
               </div>
                <div class="items-item" data-show="on-scroll">
                  <div class="items-holder">
                     <a class="items-link" >
                        <div class="items-image f0"> <img width="900" height="600" src="{{URL::asset('assets/images/costumes/Indowestern/4-8/BOX140ABC ML1 WGB(Black) and Green Patiyalas.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw"/></div>
                     </a>
                  </div>
               </div>               -->
               
            </div>
      </div>

   </div>

</div>
@include('home.landing.footer')