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
			<h1>Free Trial Class</h1>
			<h2>TRY A DANCE CLASS FOR FREE!</h2>
		</header>
	</div>
</div>
<div class="section-builder">
	<div class="section section-general section-padding section-noflow section-1 shading-none colors-white">
		<div class="section-content">
			<div class="margins">
				<div class="container shading-holder colors-white">
					<div class="contentblock contentformat contentlinks s w bc">
						<p>Not sure which dance class to sign up for during the upcoming dance season? Join us for a free dance class during our regular session.</p>
						<p>
						This is the perfect time to find out if dance is for you or to help your child discover a new style of dance. Our dance instructors are happy to answer any questions you or your child may have and make sure you feel right at home in our studio.</p>
						<p>
						Students may wear comfortable clothing that is easy to move in and join the fun for free!</p>
					</div>
				</div>
				 <!-- <nav class="navigation site-navigation">
               <div class="site-navigation-pages"><a href="/elementary/adolescent" rel="prev"><i class="fas fa-arrow-circle-left" aria-hidden="true"></i>Adolescents(12-19) </a><a class="site-navigation-alt" href="/classes-by-ages">Back</a></div>
            </nav> -->
			</div>
		</div>
	</div>
</div>


<div>
@include('home.landing.footer')