<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
   @extends('home.landing.master')
   @include('home.landing.header')
   @section('faculty')
   <style type="text/css">
      .profiles-holder{float:right;}
   </style>
   <div id="main">
      <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
         <div class="section-padding">
            <header class="content-header">
               <h1>Classes Available</h1>
               <h2>Find the right dance class for you or your child</h2>
            </header>
         </div>
      </div>
      <div class="section-builder">
         <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
            <div class="section-content">
               <div class="margins">
                  <div class="container shading-holder colors-white">
                     <div class="contentblock contentformat contentlinks s w bc">
                        <p>Looking for the right bollywood lass for your child?</p>
                        <p>Looking for an adult dance class? We have those too!</p>
                        <p>MDA  has a dance class for everyone. Our classes are tailored to meet every age and dance level from toddlers to adults!</p>
                        <p>Our certified dance instructors are dedicated to instilling a lifelong love of dance in your child. Whether you or your child are beginners or have been dancing for years, you can find the right class here at our dance studio.</p>
                     </div>
                  </div>
                  <!-- <h3 class="a b c s w bc"> Recital Based</h3>
                  <div class="contentblock contentformat contentlinks s w bc" style="text-align: justify;">
                     <p>Bollywood is a technical, diverse and profound art form, drawing from many influences. At At Masti Dance Academy, we take a holistic approach to teaching this dance form. We use a combination of theoretical knowledge (encouraging the children to intellectually engage with what they're doing), technical drills (these include ballet barre, kathak, bharatanatyam, and hip hop drills depending on what dance they are learning) and play-based learning (a drill disguised as a game). Students will learn a recital routine to perform either at community events or at our own Recital.
                        routine to perform either at community events or at our own Recital.
                     </p>
                  </div>
                  <h3 class="a b c s w bc" >Onsite Classes </h3>
                  <div class="contentblock contentformat contentlinks s w bc" style="text-align: justify;">
                     <p>These classes meet each week to learn a routine and showcase it to family and friends as and when opportunities and schedules permit. We are collaborating with Richwoods Academy to provide on-site classes. These classes are monthly classes, with performances  every 4 to 6 weeks.</p>
                  </div>
                  <h3 class="a b c s w bc">Online Classes </h3>
                  <div class="contentblock contentformat contentlinks s w bc" style="text-align: justify;">
                     <p>These classes meet each week, and learn a routine to perform at our online recital at the end of the session. Our choreography based classes encourage individual style and creativity while learning and developing coordination, confidence and specific techniques.  These classes  consists of techniques needed for to build core strength, stamina, endurance and flexibility.  These classes are primarily being held on weekends.  </p>
                  </div>
                  <h3 class="a b c s w bc">Hybrid Classes</h3>
                  <div class="contentblock contentformat contentlinks s w bc" style="text-align: justify;">
                     <p>If a class exceeds the room's capacity, we will make this particular class hybrid. You will be notified before the first day of classes. You will have “A” weeks and “B” weeks. A Meeting ID & Password will be given to the class.</p>
                  </div> -->
                  <!-- <div class="contentblock contentformat contentlinks s w bc" style="text-align: justify;">
                  Masti offers 18-week adult and kids classes both online and in-studio.   
                  COVID-19 Response: Masti Dance Academy is still enrolling for in-person, virtual, or hybrid learning. We’re ready to customize a program with one-to-one or neighborhood group classes and personalized learning.  Connect with us to schedule a private "Meri Galli" group lesson.  
                  </div> -->
                  <div class="boxes boxes-inline-separate boxes-inline boxes-margins boxes-widths-equal boxes-layouts-text-text boxes-second-auto boxes-shading-light-color boxes-z-left boxes-separate boxes-shifted-no boxes-shadow boxes-shadow-partial boxes-same">
                     <div class="boxes-item boxes-left margin-normal boxes-has-limit shading-here shading-layers shading-light colors-light shading-opacity-100 shading-border-no shading-other-color shading-other-layers boxes-text">
                        <div class="boxes-content">
                           <div class="boxes-buffer">
                              <div class="boxes-holder shading-holder shading-holder-box">
                                 <h2 class="a b n bc"> BENEFITS OF BOLLYWOOD DANCING </h2>
                                 <div class="contentblock contentformat contentlinks n bc">
                                    <ul>
                                       <li>Increased flexibility</li>
                                       <li>Better balance and improved coordination</li>
                                       <li>Muscle development</li>
                                       <li>Provides an outlet for artistic expression</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="boxes-item boxes-right margin-normal boxes-has-limit shading-here shading-layers shading-color colors-color shading-opacity-100 shading-border-no shading-other-light shading-other-layers boxes-text">
                        <div class="boxes-content">
                           <div class="boxes-buffer">
                              <div class="boxes-holder shading-holder shading-holder-box">
                                 <div class="quote-box n">
                                    <div class="quote-mark">
                                       <p>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 50 50">
                                             <path d="M15.32,36.38a18.86,18.86,0,0,1-2.12-4.48,14.84,14.84,0,0,1-.7-4.45,14.63,14.63,0,0,1,2-7.34,21.78,21.78,0,0,1,5.89-6.48l3.5,2.07a1.93,1.93,0,0,1,.62.62,1.38,1.38,0,0,1,.2.7,1.69,1.69,0,0,1-.18.75,2.45,2.45,0,0,1-.43.61q-.39.43-.87,1.05a9.11,9.11,0,0,0-.91,1.46,10.57,10.57,0,0,0-.73,1.86,7.6,7.6,0,0,0-.31,2.2,9.41,9.41,0,0,0,.45,2.75,13.56,13.56,0,0,0,1.48,3.14A2.14,2.14,0,0,1,23.57,32a1.69,1.69,0,0,1-.43,1.14,2.85,2.85,0,0,1-1.18.79Zm12.78,0A19,19,0,0,1,26,31.89a14.84,14.84,0,0,1-.69-4.45,14.62,14.62,0,0,1,2-7.34,21.78,21.78,0,0,1,5.89-6.48l3.5,2.07a1.93,1.93,0,0,1,.62.62,1.38,1.38,0,0,1,.2.7,1.65,1.65,0,0,1-.18.75,2.37,2.37,0,0,1-.43.61q-.39.43-.87,1.05a9.32,9.32,0,0,0-.91,1.46,10.57,10.57,0,0,0-.73,1.86,7.6,7.6,0,0,0-.31,2.2,9.51,9.51,0,0,0,.45,2.75A13.56,13.56,0,0,0,36,30.84,2.14,2.14,0,0,1,36.36,32a1.69,1.69,0,0,1-.43,1.14,2.85,2.85,0,0,1-1.18.79Z"></path>
                                          </svg>
                                       </p>
                                    </div>
                                    <div class="quote-info">
                                       <p class="quote-by"><strong>Khushbu Jain</strong></p>
                                       <!-- <p class="quote-affiliation">Mother</p> -->
                                       <div class="quote-text">
                                          <p>
                                          The classes are very interactive for little kids. My daughter looks forward for the classes. They not only teach dance but the build the love for dance which I think is awesome! Thanks for the amazing classes!
                                          </p>
                                          <!-- <p>I love this studio!! The staff is one in a million.&nbsp; They all have been such a blessing to our family. My daughter has come so far because of the staff and teachers.</p> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <video width="320" height="240" controls>
                     <source src="https://drive.google.com/file/d/1TK-KAaKJIdz_OLA3ybFX9FvVUputpBaw/view" type="video/mp4">
                  </video>-->
                  <center>
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/opuWVrOMOMs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </center>
                  <!-- <iframe src="https://drive.google.com/file/d/1TK-KAaKJIdz_OLA3ybFX9FvVUputpBaw/view" width="640" height="480" allow="autoplay"></iframe>  -->
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('home.landing.footer')