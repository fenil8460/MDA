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
			<h1>Adolescents (Ages 12-19)</h1>
			<h2>Pre-Teens And Teenagers</h2>
		</header>
	</div>
</div>
<div class="section-builder">
	<div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
		<div class="section-content">
			<div class="margins">
				<div class="container shading-holder colors-white">
					<div class="contentblock contentformat contentlinks s w bc">
						<p>Teens classes are perfect for you to fall in love with the beautiful art of Bollywood dance or to further your experimentation in different dance styles. This is a dance class with a difference! We are interested in honing in on your natural potential, and want you to enhance our choreography with your personal style. Bollywood is all about expression, and we want you to express exactly who you are, or who you want to be. Come for fitness, to meet new people, to try something new, or because you just love performing. Our teens class consistently wow audiences throughout the year with their complex and energetic showcases.</p>
						<p>
						If you aren’t sure which class your child should take based on their age and skill level, call our studio and we will be happy to help you find the right fit for your child.</p>
					</div>
				</div>
				<nav class="navigation site-navigation">
               <div class="site-navigation-pages"><a href="/elementary-aged" rel="prev"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i> Elementary Aged(6-11) </a><a class="site-navigation-alt" href="/classes-by-ages">Back</a><a href="/free-trial-class" rel="next">Free Trial Class <i class="fas fa-arrow-circle-right" aria-hidden="true"></i></a></div>
            </nav>
			</div>
		</div>
	</div>
</div>
<div>
@include('home.landing.footer')