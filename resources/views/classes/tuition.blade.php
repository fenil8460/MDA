<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<style>
   .annual-class{
      width:100% !important;
   }
   
</style>

<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
   @extends('home.landing.master')
   @include('home.landing.header')
   @section('faculty')
   <style type="text/css">
      h4{text-align: center;margin-bottom: 22px!important;}
      *,::after,::before{box-sizing: content-box;}
      h5{text-align: center;margin-bottom: 10px!important;}
   </style>
   <div id="main">
      <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
         <div class="section-padding">
            <header class="content-header">
               <h1>Tuition</h1>
               <h2>REGISTRATION FEE</h2>
            </header>
         </div>
      </div>
      <div class="section-builder">
         <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
            <div class="section-content">
               <div class="margins">
                  <div class="container shading-holder colors-white">
                     <div class="boxes boxes-inline-separate boxes-inline boxes-margins boxes-widths-equal boxes-layouts-text-text boxes-second-auto boxes-shading-light-color boxes-z-left boxes-separate boxes-shifted-no boxes-shadow boxes-shadow-partial boxes-same">
                        <div class="boxes-item boxes-left margin-normal boxes-has-limit shading-here shading-layers shading-light colors-light shading-opacity-100 shading-border-no shading-other-color shading-other-layers boxes-text annual-class"  id="boxes-item">
                           <div class="boxes-content">
                              <div class="boxes-buffer">
                                 <div class="boxes-holder shading-holder shading-holder-box">
                                    <h2 class="a b n bc" > ANNUAL REGISTRATION FEE - $20 </h2>
                                    <div class="contentblock contentformat contentlinks n bc">
                                       <ul>
                                          <li>Our calendar is divided into 2 sessions, 18 weeks each.</li>
                                          <li>Tuition is calculated by the number of classes a student takes per week.</li>
                                          <li>1 Class/Week = $320/Session.</li>
                                          <li>Each Additional Class/Week = $220/Session.</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="boxes-item boxes-right margin-normal boxes-has-limit shading-here shading-layers shading-light colors-light shading-opacity-100 shading-border-no shading-other-color shading-other-layers boxes-text" id="boxes-item">
                           <div class="boxes-content">
                              <div class="boxes-buffer">
                                 <div class="boxes-holder shading-holder shading-holder-box">
                                    <h2 class="a b n bc" > Masti Fit Classes</h2>
                                    <div class="contentblock contentformat contentlinks n bc">
                                       <ul>
                                          <li>Per Class / Drop-In = $20.</li>
                                          <li>Discounted Package<br> 
                                             (18 Classes)=$180/Session.
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <div class="boxes boxes-inline-separate boxes-inline boxes-margins boxes-widths-equal boxes-layouts-text-text boxes-second-auto boxes-shading-light-color boxes-z-left boxes-separate boxes-shifted-no boxes-shadow boxes-shadow-partial boxes-same">
                        <div class="boxes-item boxes-right margin-normal boxes-has-limit shading-here shading-layers shading-color colors-color shading-opacity-100 shading-border-no shading-other-light shading-other-layers boxes-text" style="margin-left: 14%;
                           width: 19cm;" id="boxes-item">
                           <div class="boxes-content">
                              <div class="boxes-buffer">
                                 <div class="boxes-holder shading-holder shading-holder-box">
                                    <div class="quote-box n">
                                       <h2 class="a b n bc" > DISCOUNTS</h2>
                                       <div class="contentblock contentformat contentlinks n bc">
                                          PRIORITY REGISTRATION
                                          <ul>
                                             <li>Enroll before the first date of the session and get registration fee waived.</li>
                                          </ul>
                                          SIBLING DISCOUNTS
                                          <ul>
                                             <li>
                                                Deduct $15/session/child if two or more children are enrolled in a single class/week.
                                             </li>
                                             <li>Deduct $30/session/child if two or more children are enrolled in multiple classes/week.</li>
                                          </ul>
                                          {{-- <p style="margin-left: 138px;">**Discounts are provided on the next session**</p> --}}
                                          STUDENT REFERRALS
                                          <ul>
                                             <li>Refer a new student to Masti and get $50 off your session's tuition.</li>
                                             <li>Dance classes are discounted so that as your child dances more, dance class costs less. Please note that 1 hour per week after the age of 6, is more for recreational dancers. For optimum technique, we encourage our dancers to dance at least 2 hours per week once they turn 6 years old.</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <h4>There are no refunds for classes.</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('home.landing.footer')
   <style type="text/css">
      @media screen and (max-width: 1000px) 
      {
      .boxes-item{margin-left: -13px!important; }
      #boxes-item{width: 85%!important;}
      h4{margin-left: -70px!important;}
      }
      @media screen and (device-width: 768px) 
      {
      .boxes-item{margin-left: 22px!important; }
      #boxes-item{width: 90%!important;}
      h4{margin-left: 10px!important;}
      }
   </style>