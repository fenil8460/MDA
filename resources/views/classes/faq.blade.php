<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master')
@include('home.landing.header')
@section('faculty')
<style type="text/css">
.collapse.show {
    position: inherit;
}
.accordion-toggle:before ;{content:'\f077';}
.panel-heading .accordion-toggle:after {
    font-family:Fontawesome;
    content:'\f077';
    float: right;        /* adjust as needed */
    color: grey;         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
  font-family:Fontawesome;
    content:'\f078';
}
   .hire-us{
   width: 130px;
    height: 40px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 600;
    margin-left:45%
  }
  .wedding_performance{
   margin-top: 35px;
  }
  .top-hire-us{
    background: #efefef;
    padding: 8px 20px 8px 20px;
    border-radius: 10px;
  }
  .contentformat h4 {
    font-size: 1.5rem !important;
}
.panel-title a:hover{
  box-shadow: unset !important;
  color: #007079 !important;
  text-decoration: unset !important
}
.panel-title a{
  box-shadow: unset !important;
  color: #00a9b7 !important;
}
  @media screen and (max-width: 1023px) {
 
  .hire-us{
    margin-left:25%
  }
  }
</style>
<div id="main">
   <div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
      <div class="section-padding">
      <header class="content-header">
         <h1>FAQ's</h1>
         <!-- <h2><a class="top-hire-us" href="https://docs.google.com/forms/d/1yZ0gJS-0uhv2k4XqZ38qXMvAIYmztGYx0nXf06-vDs8/edit?usp=sharing" target="blank">APPLY TODAY!</a></h2> -->
      </header>
   </div>
</div>
<div class="section-builder">
   <div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
      <div class="section-content">
         <div class="margins">
            <div class="container shading-holder colors-white">
             
            <div class="contentblock contentformat contentlinks s w bc">
            <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        I registered online, but did not hear back from anyone. What should I do?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      <p>Students who register online will start receiving emails from their dance teacher once classes have begun. Check your email to ensure you received a confirmation that your registration for Masti dance classes was successfully sent. If you did not get an automated email confirming your enrollment into our program, please email our registration director, Madhu mastidance2011@gmail.com </p>
      <p>
      If your dance class is beginning soon, you should come to class at its scheduled time. We would be happy to welcome you and take care of the email problem right away.
      </p>
      <p>
      If you need to speak with someone directly, please call us at 469-939-9550.  We will do everything we can to make sure you have your questions answered in a timely manner.
      </p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        What if I want a class that is full and waitlisted?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
      <p>If the class you would like to enroll in is full, please register for the waitlist. This will put you in line to be notified if space becomes available in the class. When a spot in the class becomes available we will contact you and confirm that you are still interested. You will not be charged tuition until a spot for your dancer is guaranteed.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        Do I have to participate in the dance recitals?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
      <p>All dancers are encouraged to participate, but recital participation is not required. All recital fees will be communicated prior to being charged. Because of this, Families will need to opt out of Recital before fees are charged. Dancers that choose not to participate will still be able to participate fully in their class and will still learn the recital dance. Any dancer that joins after this time will still be allowed to participate in recital, pending costume availability and may be subject to added fees.</p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        Can I take a free trial class before enrolling?
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
      <p>Yes! We offer a no obligation free trial week.  What that means is you can come and try as many classes as you want in a week, but when you sign up you do pay for the class you attended and are signing up for.    ! We highly encourage you to try a variety of classes at our studios to find the one that is perfect for you. Masti  has classes in many styles of dance – Bollywood, Indo-Contemporary, Hip-Hip, Semi-Classical, Bhangra, and even Bollywood Fitness. If you don’t know which class is right for you, try out as many as you can! Our students frequently find a new favorite class by trying something new each year.</p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
        How many songs do you teach per session?
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      We aim to complete a pre-determined set of choreography within a given session. Sometimes, this means that students learn one medley of four songs depending on the students’ ability to pick up. Our goal is to teach dance technique rather than number of songs, so we like to make sure students are comfortable with choreography before moving on. If you have specific questions regarding your class, please feel free to speak with your Madhu, Masti Director.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
        I want my child to participate in dance competitions. How can we start?
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      We are a primarily recreational dance school, however we do help students get ready for competition, if they show ability in class and parents want additional private lessons to help them get ready for competitions.   Reach out to mastidance2011@gmail.com for more details.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
        Where is your dance studio?
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Masti offers Indian dance classes at 3 studio locations in Dallas Metroplex Aria.   Our Dallas locations are:   Two Plano locations, and one Frisco Locations.   Due to Covid, classes have transitioned to be virtual over a Zoom call. We now offer In-person clases at Richwoods Academy in Frisco, Hathaway Academy of Ballet in Plano, KJ Dance in Frisco and Plano.  We are expanding into the Coppell Area as well.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
        Are your classes offered throughout the year?
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Yes! Our classes are in full session throughout the year with the exception of major holidays (Thanksgiving, Christmas, New Year, Independence Day, etc.) Our classes are broken down into 2 18-week sessions and a short summer session 6 weeks long.   
      </p>
      <p>
      Session 1 – September – February 18 weeks long session $320 fees for inperson and $200 for online 
      </p>
      <p>
      Session 2 – February - June 18 weeks long session $320 fees for inperson and $200 for online 
      </p>
      <p>
      Session 3 - July-August
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
        What is the correct time to enroll for Masti dance classes?
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      We are always accepting students into our classes as long as there is room! We have a “priority registration” period before each session begins where students can ensure they have a spot in class and also get an early bird discount on tuition. We normally do not turn down any new student who wants to join, so don’t hesitate to contact us when you are ready!
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
        Your session has already begun, and I missed a few classes. Can I still register?
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Yes! We don’t turn any students down, and we are always enrolling students into ALL studio locations. We will do our best to catch you up during class to ensure you know what you need to know. If you want to schedule private classes, we can arrange that with your instructor based on availability. Email mastidance2011@gmail.com if you feel you need to schedule a private session.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
        Who teaches the classes? What are his/her qualifications?
        </a>
      </h4>
    </div>
    <div id="collapseOne1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      All of our instructors are highly trained, maintain the utmost level of professionalism, and have been hand-selected. We keep our staff small to maintain quality. We also conduct reviews of our instructors at the end of each session, so we are always aware of what students and parents think of our teachers.  We post their bio/resume on our Facebook Page 
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTow1">
        What should I wear to class?
        </a>
      </h4>
    </div>
    <div id="collapseTow1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      While not mandatory, we encourage our students to wear Masti t-shirts to class with sweatpants, track pants, or leggings. It creates a sense of unity in the room. You receive Masti Tshirts when you register for classes. Most importantly, please dress comfortably (sweats, tights, t-shirt, etc.). We do not allow jeans, dresses, or any movement-restrictive clothing.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1">
        How do I know which class I belong in?
        </a>
      </h4>
    </div>
    <div id="collapseThree1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      If you are not sure which class to take, call us. Typically, we recommend that students take the class that corresponds to their age. We never hold students back and want to make sure they feel comfortable in any class they are in. Sometimes we move students into an older age group class, if we offer that, and if they are exceptional and need to be challenged, but that is very rare and not necessarily best for their social development.  
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour1">
        I’ve never taken a dance class before. Where should I start?
        </a>
      </h4>
    </div>
    <div id="collapseFour1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Not a problem! Many of the students are absolute beginners. Our goal is to make you into a confident dancer. That’s what our classes are for! Don’t hesitate to come visit our classes so you can see how we teach.  
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive1">
        If the timings for classes do not work for me, can you arrange another class time?
        </a>
      </h4>
    </div>
    <div id="collapseFive1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      We are always adding classes depending on the instructor and studio availability. If you do not see something that fits into your schedule, call or email us and we’ll try our best to set something up.  We would be happy to put together a new class with a minimum enrollment of 6 dancers. 
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix1">
        Is there a registration fee to enroll for Masti dance classes?
        </a>
      </h4>
    </div>
    <div id="collapseSix1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Yes, there is an one time registration fee of $20/family. This will cover you for until you are active in our system. 
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix1">
        What is the maximum number of students in each class?
        </a>
      </h4>
    </div>
    <div id="collapseSix1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      This maximum number of students in each class depends on the age group and level of class and current pandemic situation. Some of our classes have a max of 12 students, while some others may have up to 16 students. We usually do not have any class with more than 16 students so we can maintain quality and give each student attention.  Most of our classes also have two instructors each:  Lead instructor and Assistant Instructor.  It helps to have an extra set of hands with large class sizes.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven1">
        Can I observe a class before I register?
        </a>
      </h4>
    </div>
    <div id="collapseSeven1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      You can certainly come watch a class before you register, but we recommend actually taking free trial classes. Since dance is very interactive, you will only know if you like the class if you come in and try it out!
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight1">
        Do students perform in shows throughout the year?
        </a>
      </h4>
    </div>
    <div id="collapseEight1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Yes!  We participate in two major events:  India day, organized by Indian Association of North Texas around the end of January, beginning of February.  We also have our Masti Recital scheduled at the beginning of May.    All our students and crew dancers perform at the show. In addition to that, we perform at community events and competitions throughout the year. We do not require all students to perform at all the shows, but we have not had students who miss the opportunity to perform at our annual showcase.  However, we are navigating current landscape and holding off on doing a lot of community events.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine1">
        What happens if a student misses a class?
        </a>
      </h4>
    </div>
    <div id="collapseNine1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>Classes missed will not be made up, except those cancelled by the academy.  </p>
      <p>
      Fees will not be pro-rated or credited.  If we offer classes at other locations for the same age group, we would be happy to schedule a makeup class.  Our instructors strive their best to catch up dancers with missed choreography within class.  We also send home class recordings and short video practices for students to catch up on their own.   The best thing to do is talk to your Director and see what can be done.  Masti does not guarantee any make-up classes to students who miss them.   We do have online classes they can participate in, if you are travelling and can be offered as makeup. Please contact the director for makeup lessons (if offered for that age group)
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen1">
        What style of dance is taught in class?
        </a>
      </h4>
    </div>
    <div id="collapseTen1" class="panel-collapse collapse">
      <div class="panel-body">
      <p>We have a number of dance classes you can try. Our classes vary in styles taught, as our goal is to make each student as versatile as possible. On our schedule by location, each class has a specific title. Most classes are Bollywood, and since Bollywood is such a dynamic genre, students will learn many new techniques depending on the song being taught in class. You can expect influences of Indian folk, contemporary, classical, and hip-hop in class. 
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne2">
        Can I take more than one class per week?
        </a>
      </h4>
    </div>
    <div id="collapseOne2" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
        Currently we are offering only Sunday classes, but as we ease in and if we offer more classes, yes we would love our dancers to take more than one class.  Many of our students take classes at more than one location to give them variety.  We like to tailor your experience at Masti based on your goals. You can call and speak with our Director about which classes to take.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2">
        Can you Prorate for missed classes? 
        </a>
      </h4>
    </div>
    <div id="collapseTwo2" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      No, we do not prorate for missed classes.  Our dancers can take the lesson online or make up with other classes of similar age groups. 
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2">
        What is your refund policy?
        </a>
      </h4>
    </div>
    <div id="collapseThree2" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      No refunds or transfers after first day of class
      <br>
      $25 cancellation/transfer fee if notified 7 days before start date of class
      <br>
      Full Refund is issued for any request received more than 7 days before start date of class
      <br>
      All refunds/transfers will be processed after the 2nd week of class
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour2">
        Can I cancel in the middle of a semester?
        </a>
      </h4>
    </div>
    <div id="collapseFour2" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Only for medical emergencies with a doctors certificate, we will allow cancellation with a prorated fee refund, 
      <br>
      upto the 7th week of class
      <br>
      In the last 8 weeks of the semester , no cancellations will be allowed.
      <br>
      To cancel a class, please email mastidance2011@gmail.com.com
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive2">
        Class Cancellations
        </a>
      </h4>
    </div>
    <div id="collapseFive2" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      We reserve the right to cancel a particular class or batch at our discretion 
      <br>
      Due to any unavoidable circumstances the company may choose to replace the main instructor with a 
      <br>
      substitute instructor
      <br>
      Company also reserves the right to cancel a class and provide a make up class
      </p>
      </div>
    </div>
  </div>

</div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
@include('home.landing.footer')