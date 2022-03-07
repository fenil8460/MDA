<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
      @extends('home.landing.master')
      @include('home.landing.header')
      @section('faculty')
      <style type="text/css">
         .profiles-holder{float:right;}
         a:hover{text-decoration: none !important;}
         #more {display: none;}
         #more1 {display: none;}
         #more2 {display: none;}
      </style>
      <div id="main">
         <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
            <div class="section-padding">
               <header class="content-header">
                  <h1>Faculty</h1>
                  <h2>Meet Our Instructors and Office Staff Members</h2>
               </header>
            </div>
         </div>
         <div class="section-builder">
            <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
               <div class="section-content">
                  <div class="margins">
                     <div class="profiles">

                     <div class="profiles-item">
                           <div class="profiles-info" style="width: 40%;margin-right: 80px;margin-left: 80px;">
                              <div style="width:35%;float:left;margin: 10px;" >
                                  <img width="400" height="600" src="{{URL::asset('assets/images/Madhu Director.jpg') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw" style="border-radius: 200px; height: 150px; width: 150px;border: 8px solid  #b8b8b8;"  />
                              </div>
                            
                                <div>
                                  <h4 style='line-height: 1.5;'>MADHU</h4>
                                  <h6>Executive Director</h6>
                                  <p style="line-height: 25px;font-size: 15px;padding-top:10px;">Madhu connected the dots between her two passion in life: teaching children and dancing. While volunteering her time to teach kids dance, Madhu realized the passion she had in dancing as well, so she established Masti Dance Academy in 2011. Having taught for eight years in Plano independent school district as an elementary teacher, Madhu<span id="dot-more">...</span><span id='more'> realized her team’s importance as teachers and ensures that classes at Masti are based on self-worth, discipline and respect.<br>
                                  Her prolific career is a reflection of her values of growth; respect; remaining humble; inclusivity and professionalism. While Madhu began her dancing career as a self-taught dancer from watching movies and dance videos, it was seeking learning anywhere and everywhere that made her a professional. Her teachers are too numerous to count, but she has travelled through India learning from Terrence Lewis’s Academy in Mumbai to having grown up with Garba in Gujrat, and while she is helping her daughter pursue an acting career in Tollywood, she keeps polishing her skills by doing dance covers.</span>
                                </p>
                                </div>   
                                <center>
                                    <button class="read-more" style=" margin: 10px;padding: 10px;font-size: 12px;">Click to read more</button>
                                </center>
                                

                           </div>

                           <div class="profiles-info" style="width:35%;">
                              <div style="width:35%;float:left;margin: 10px;" >
                                  <img width="400" height="600" src="{{URL::asset('assets/images/Sasha.jpeg') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw" style="border-radius: 200px; height: 150px; width: 150px;border: 8px solid  #b8b8b8;"  />
                              </div>
                            
                                <div>
                                  <h4 style='line-height: 1.5;'>Sasha Singh</h4>
                                  <h6>Artistic Director</h6>
                                  <p style="line-height: 25px;font-size: 15px;padding-top:10px;">Sasha Singh, “Tollywood’s upcoming actress,” is the co-founder and artistic director of the premiere Bollywood Dance Company in the United States, Masti Dance Academy, located in Plano, Texas. Sasha’s unique dance style and choreography fuses a diverse repertoire<span id="dot-more1">...</span><span id='more1'> including Indian classical styles, such as Tollywood, Bhangra, and Folk. She also uses different western staples including Ballroom, Latin, Hip-hop, Contemporary, and Jazz.<br>
                                  Sasha is best known for her 6 years of choreography and dance covers with Actor Raviteja. She loves to devote time to her passion for dance, acting and modeling. She won the best dance award at Miss Asia Texas 2011, won the crown at Miss Asia Texas in 2013. She is always on the lookout to express herself through performing art. Sasha's previous film to hit the theatres was Appatlo Okadundevadu in the year 2016 and Edaina Jaragochu in 2019. She now has four films in post-production and will release in 2021.
                                </span>
                                </p>
                                  </div>    
                                  <center>
                                    <button class="read-more1" style=" margin: 10px;padding: 10px;font-size: 12px;">Click to read more</button>
                                </center>                         
                                

                           </div>
                          
                        </div>
                        
                        <div class="profiles-item">
                           <div class="profiles-info" style="width: 40%;margin-right: 80px;margin-left: 80px;">
                              <div style="width:35%;float:left;margin: 10px;" >
                                  <img width="400" height="600" src="{{URL::asset('assets/images/Sanya Peshwani.jpg') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw" style="border-radius: 200px; height: 150px; width: 150px;border: 8px solid  #b8b8b8;"  />
                              </div>
                            
                                <div>
                                  <h4 style='line-height: 1.5;'>Sanya Peshwani</h4>
                                  <h6>Co-Founder</h6>
                                  <p style="line-height: 25px;font-size: 15px;padding-top:10px;">Sanya is a co-founder of Masti Dance Academy.   While she helped establish the studio, Sanya received her Masters in Computer Science from University of Dallas at Texas.  She pursued an IT career and works now for Verizon as a project manager. As an artist Sanya explores poetry and movement.<span id="dot-more2">...</span>
                                  <span id='more2'>
                                   Sanya has been involved in Masti Dance Academy as a silent partner for over 5 years now.  In 2015, Sanya led and managed Masti single handedly, working very hands on with our teachers and students to ensure a great year full of growth.
                                  <br>
                                  Since then she has been lending her expertise in business management as Masti Dance Academy’s Business Administrator. 
                                  <br>
                                  She is no stranger to stage performing. She enjoys the performing arts as a dancer and choreographer herself! When you see Masti Recitals, odds are Sanya is running the show behind the scenes. </span>
                                </p>
                                </div>                             
                                
                                <center>
                                    <button class="read-more2" style=" margin: 10px;padding: 10px; font-size: 12px;">Click to read more</button>
                                </center>
                           </div>
                          
                        </div>

                        <!-- <div class="profiles-item">
                           <div class="profiles-info" >
                              <div class="profiles-image image-shadow f0"> <img width="400" height="600" src="{{URL::asset('assets/images/Director (2).jpg') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw"  /></div>
                           </div>
                           <div class="profiles-holder">
                              <div class="profiles-contact">
                                 <h3 class="profiles-name"> <span>Sasha Singh</span></h3>
                                 <p class="profiles-title">Artistic Director</p>
                              </div>
                              <div class="profiles-text contenttext contentformat">
                                 <p>Sasha Singh, “Tollywood’s upcoming actress,” is the co-founder and artistic director of the premiere Bollywood Dance Company in the United States, Masti Dance Academy, located in Plano, Texas. Sasha’s unique dance style and choreography fuses a diverse repertoire including Indian classical styles, such as Tollywood, Bhangra, and Folk. She also uses different western staples including Ballroom, Latin, Hip-hop, Contemporary, and Jazz.</p>
                                 <p>Sasha is best known for her 6 years of choreography and dance covers with Actor Raviteja. She loves to devote time to her passion for dance, acting and modeling. She won the best dance award at Miss Asia Texas 2011, won the crown at Miss Asia Texas in 2013. She is always on the lookout to express herself through performing art. Sasha's previous film to hit the theatres was Appatlo Okadundevadu in the year 2016 and Edaina Jaragochu in 2019. She now has four films in post-production and will release in 2021.</p>
                              </div>
                           </div>
                        </div>
                        <div class="profiles-item" style="margin-top:62px;">
                           <div class="profiles-info">
                              <div class="profiles-image image-shadow f0"> <img width="400" height="600" src="{{URL::asset('assets/images/Artistic Director.webp') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw"  /></div>
                           </div>
                           <div class="profiles-holder" >
                              <div class="profiles-contact">
                                 <h3 class="profiles-name"> <span>Sasha Singh</span></h3>
                                 <p class="profiles-title">Artistic Director</p>
                              </div>
                              <div class="profiles-text contenttext contentformat">
                                 <p>Sasha Singh, “Tollywood’s upcoming actress,” is the co-founder and artistic director of the premiere Bollywood Dance Company in the United States, Masti Dance Academy, located in Plano, Texas. Sasha’s unique dance style and choreography fuses a diverse repertoire including Indian classical styles, such as Tollywood, Bhangra, and Folk. She also uses different western staples including Ballroom, Latin, Hip-hop, Contemporary, and Jazz.</p>
                                 <p>Sasha is best known for her 6 years of choreography and dance covers with Actor Raviteja. She loves to devote time to her passion for dance, acting and modeling. She won the best dance award at Miss Asia Texas 2011, won the crown at Miss Asia Texas in 2013. She is always on the lookout to express herself through performing art. Sasha's previous film to hit the theatres was Appatlo Okadundevadu in the year 2016 and Edaina Jaragochu in 2019. She now has four films in post-production and will release in 2021.</p>
                              </div>
                           </div>
                        </div>
                        <div class="profiles-item" style="margin-top:62px;">
                           <div class="profiles-info">
                              <div class="profiles-image image-shadow f0"> <img width="400" height="600" src="{{URL::asset('assets/images/Sanya Peshwani.jpg') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw"  /></div>
                           </div>
                           <div class="profiles-holder" >
                              <div class="profiles-contact">
                                 <h3 class="profiles-name"> <span> Sanya Peshwani</span></h3>
                                 <p class="profiles-title">Co-Founder</p>
                              </div>
                              <div class="profiles-text contenttext contentformat">
                                 <p>Sanya is a co-founder of Masti Dance Academy.   While she helped establish the studio, Sanya received her Masters in Computer Science from University of Dallas at Texas.  She pursued an IT career and works now for Verizon as a project manager. As an artist Sanya explores poetry and movement.</p>
                                 <p>Sanya has been involved in Masti Dance Academy as a silent partner for over 5 years now.  In 2015, Sanya led and managed Masti single handedly, working very hands on with our teachers and students to ensure a great year full of growth.</p>
                                 <p>
                                 Since then she has been lending her expertise in business management as Masti Dance Academy’s Business Administrator. 
                                 </p>
                                 <p>
                                 She is no stranger to stage performing. She enjoys the performing arts as a dancer and choreographer herself! When you see Masti Recitals, odds are Sanya is running the show behind the scenes. 
                                 </p>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <h2 class="contenttext contentformat" id="test1"> <span style="font-weight: bolder;"><a href="https://uploads.knightlab.com/storymapjs/75a62286493b46ed5cc1a844fcaacc34/three-empowered-women/index.html"> Three Empowered Women</a> </span></h2>
                  </div>
               </div>
              <!--  <div class="profiles-info test" id="profile1">
                  <div class="profiles-image image-shadow f0"> <img width="400" height="600" src="{{URL::asset('assets/images/Instructors.webp') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw" /></div>
                  <div class="profiles-contact" style="margin-left: 0px;margin-top: 19px;">
                     <h3 class="profiles-name"> <span>Ashley Cassel</span></h3>
                     <p class="profiles-title">Office</p>
                  </div>
               </div>
               <div class="profiles-info test" style="width: 21%;margin-left: 16px;margin-bottom: 16px;">
                  <div class="profiles-image image-shadow f0"> <img width="400" height="600" src="{{URL::asset('assets/images/Instructors.webp') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw" /></div>
                  <div class="profiles-contact" style="margin-left: 0px;margin-top: 19px;">
                     <h3 class="profiles-name"> <span>Ashley Cassel</span></h3>
                     <p class="profiles-title">Office</p>
                  </div>
               </div>
               <div class="profiles-info test" style="width: 21%;margin-left: 16px;">
                  <div class="profiles-image image-shadow f0"> <img width="400" height="600" src="{{URL::asset('assets/images/Instructors.webp') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw" /></div>
                  <div class="profiles-contact" style="margin-left: 0px;margin-top: 19px;">
                     <h3 class="profiles-name"> <span>Ashley Cassel</span></h3>
                     <p class="profiles-title">Office</p>
                  </div>
               </div> -->
               <!-- <div class="profiles-info test" id="profile4">
                  <div class="profiles-image image-shadow f0"> <img width="400" height="600" src="{{URL::asset('assets/images/Instructors.webp') }}" class="attachment-portrait size-portrait" alt="" loading="lazy" sizes="(min-width: 1381px) 320px, (min-width: 921px) 25vw, (min-width: 601px) 50vw, 100vw" /></div>
                  <div class="profiles-contact" style="margin-left: 0px;margin-top: 19px;" id="lastimage">
                     <h3 class="profiles-name"> <span>Ashley Cassel</span></h3>
                     <p class="profiles-title">Office4</p>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </div>
   </div>
   <script>
       $('.read-more').click(function(){
           if($('#more').css('display') == 'none'){
            $('#more').css('display','inline')
            $('.read-more').text("Click to read less")
            $('#dot-more').hide()
           }else{
            $('#more').css('display','none')
             $('.read-more').text("Click to read more")
            $('#dot-more').show()
           }
      
       })

       $('.read-more1').click(function(){
           if($('#more1').css('display') == 'none'){
            $('#more1').css('display','inline')
            $('.read-more1').text("Click to read less")
            $('#dot-more1').hide()
           }else{
            $('#more1').css('display','none')
             $('.read-more1').text("Click to read more")
            $('#dot-more1').show()
           }
      
       })

       $('.read-more2').click(function(){
           if($('#more2').css('display') == 'none'){
            $('#more2').css('display','inline')
            $('.read-more2').text("Click to read less")
            $('#dot-more2').hide()
           }else{
            $('#more2').css('display','none')
             $('.read-more2').text("Click to read more")
            $('#dot-more2').show()
           }
      
       })
  
   </script>

   @include('home.landing.footer')