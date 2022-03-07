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
                     <h1>Register</h1>
                     <h2>Register for dance classes and events</h2>
                  </header>
               </div>
            </div>
            <div class="section-builder" style="margin-left: 4cm;">
               <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
                  <div class="section-content">
                     <div class="margins">
                        <div class="container shading-holder colors-white">
                           <div class="contentblock contentformat contentlinks s w bc">
                               <p><strong>Registration Information :
							<br /> </strong>
							<ul>
							<li>Register for our 2020-2021 Season!</li>
							<li>Fall Session: September - December</li>
							<li>Spring  Session: January - April</li>
							<li>Summer Session:  May - August</li>
							</ul></p>
                           </div>
                        </div>
                        <p class="buttons-group c"><a class="button" href="/classes-offered" target="_blank" data-registration="button">Register Now!</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <style type="text/css">
            @media screen and (max-width: 1620px)
{.section.section-padding {overflow-x: hidden!important;}}
 @media screen and (max-width: 1000px)
{.section-builder {margin-left: 0px!important;}}
 @media screen and (device-width: 768px)
{.section-builder {margin-left: 3cm!important;}}
 @media screen and (device-width: 540px)
{.section-builder {margin-left: 2cm!important;}}

         </style>
@include('home.landing.footer')