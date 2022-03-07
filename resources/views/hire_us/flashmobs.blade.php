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
         <h1>Flashmobs</h1>
         <h2><a class="top-hire-us" href="https://forms.gle/cV4TwVmubzgdRUQ58" target="blank">Hire Us!</a></h2>
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">

               <div class="contentblock contentformat contentlinks s w bc">
                  <p>Why not surprise your guests and produce an unexpected Flash Mob performance?</p>
                  <p>Flash Mob events are taking over the world, so what better way to wow your guests and create a sensational dance piece – it will leave everyone thrilled!</p>
                  
                  <p>Masti Dance Academy can provide the dancers to create the Flash Mob – or even better, we can teach you a simple Bollywood dance routine and you can be part of the Flash Mob yourself. These have proven to be really successful at weddings and corporate events.</p>
                  <p>There are lots of options so just speak to us to find out what’s best for your event.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')