<link rel="icon" type="image/png" href="{{URL::asset('assets/images/favicon.png') }}"/>
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
/* .panel-heading .accordion-toggle.collapsed:after {
    font-family: Fontawesome;
    content: '\f078';
} */
.panel-heading .accordion-toggle:after {
    font-family:Fontawesome;
    content:'\f077';
    float: right;        /* adjust as needed */
    color: grey;         /* adjust as needed */
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
        How long does a Team Building Bollywood workshop last for?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      <p>This is totally up to you and how long you would like the teacher to be there for. They can vary from anything to 1 hour workshops to 3 hours.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        How many teachers do you provide?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
      <p>We provide one Bollywood teacher but can provide more if required but normally 30 participants is fine to one teacher. We can alternatively provide two teachers and they also do a Bollywood performance for you too.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        What can I expect from a Team Building Bollywood Workshop?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
      <p>Our focus on our bollywood workshops is to bring your team together in a fun atmosphere, our teacher will teach everyone specific bollywood moves and then we will separate into smaller teams to come up with more choreography and compete against each other.</p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        Where will the workshops take place?
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
      <p>We can come to your workplace if you have a large open space or if you have hired a venue, alternatively we can find a venue for you such as a studio or even in a private function room of a restaurant so you can enjoy an Indian meal afterwards.</p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
        How much does a Team Building Workshop cost and do we need to pay in advance?
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Prices start from $150, please enquire for a more detailed pricing structure. You just need to pay within a month of the invoice date.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
        What costumes will you provide?
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      We can provide Belly scarf’s for the participants to wear and we also supply Bindis.
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
        Where are you based and do you travel across the USA?
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      We are based in Dallas and have teachers travel from these areas across the USA, with travel costs paid for. 
      </p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
        Do you bring the Music?
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse">
      <div class="panel-body">
      <p>
      Yes, we will bring all the music with us and we can bring our speakers unless you have a music system already in place, if you have sourced the venue.
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