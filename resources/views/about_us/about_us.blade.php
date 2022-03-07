 <script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
      @extends('home.landing.master')
      @include('home.landing.header')
      @section('about_us')
      <!-- <style type="text/css">
         .shading-background-img{background-image: url('/../../../assets/images/shutterstock_152763107.webp');}
         .shading-gradient-alt:before{background-image: -webkit-linear-gradient(top, rgba(69,44,130,0.5) -100%, rgba(69,44,130,1) 330%)!important;
        }

      </style> -->
      <div id="main">
         <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
            <div class="section-padding">
            <header class="content-header">
               <h1>About  Us</h1>
               <!-- <h2 style="font-style: italic;">Your Fun is Our Business!</h2> -->
            </header>
            
         </div>
      </div>
      <div class="section-builder">
         <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
            <div class="section-content">
               <div class="margins">
                  <div class="container shading-holder colors-white">
                     <div class="contentblock contentformat contentlinks s w bc">
                        <p>Our experienced faculty are passionate and trained to create an atmosphere of joy,
                        acceptance, and dedication within our dance studio. We make it easy for students to
                        discover their potential and be expectant for growth in classes. Our dance program caters to
                        every age group from toddlers to seniors and every age in between. Through 12 years of
                        teaching dance, our students have grown in dance and performance skills, self-confidence,
                        physical health, self-motivation, and collaboration skills. We also share our love of dance
                        through special events like summer dance camps, wedding dance classes, holiday
                        happenings and more!
                        </p>
                     </div>
                     <h3 class="a b c s w bc"> Our History</h3>
                     <div class="contentblock contentformat contentlinks s w bc">
                        <p>Our dance studio began in 2009 in our home on Sunflower Lane in Plano. Madhu started
                        teaching a few family friends dance to participate in India Day events. She soon realized that
                        she could combine her passion for dance with her love for teaching and provide the same
                        opportunities for our community needed to dance.</p>
                        <p>While continuing to teach at Plano Isd, Haun Elementary, by 2012 she was able to bring staff
                        on board and move into a studio at Hathaway Academy of Ballet. That small team now grew
                        into a team of 12 instructors and an amazing administrative staff!</p>
                        <p>As we continue to dance our way into our next season, we love to reflect upon the experiences and accomplishments that have defined us for more than 12 years and welcome the excitement of many more seasons to come!</p>
                        <p>Sasha, Masti’s co-founder and Madhu’s daughter is now an upcoming actor in the Telugu Film Industry. She also teaches at Masti. Madhu continues to nourish and balance her life while taking care of Masti with utmost care and love.</p>
                        <p>To nurture as well as teach and encourage children of all levels to uplift by giving children feedback to assess what needs work while also acknowledging their positive progress. To create classroom leaders and role models, so that children have a framework of peer support To motivate our students in class with excellent teaching, and support them (while out of the studio) with online practice and technique videos.</p>
                     </div>
                  </div>
               </div>   
            </div>
         </div>
 @include('home.landing.footer')