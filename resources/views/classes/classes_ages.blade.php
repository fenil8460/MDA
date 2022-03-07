<script type="text/javascript" src="{{ URL::asset('assets/js/loader.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<body onload="myFunction()">
   <div style="display:none;" id="myDiv" class="animate-bottom">
@extends('home.landing.master') 
@include('home.landing.header') 
@section('faculty')
<style type="text/css">
	.items-header{text-align: center;}
</style>
<div id="main">
	<div class="section section-noflow section-header shading-layers shading-full shading-gradient-alt colors-color header-bg shading-background-img">
		<div class="section-padding">
			<header class="content-header">
				<h1>Classes by Ages</h1>
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
							<p>Interested in signing you or your child up for a dance class, but not sure which class is the right one? We make it easy by grouping all of our classes by age. Whether your child is a pre-schooler, elementary-aged, or an adolescent, we have the perfect dance class for them! Looking for an adult class? We have that too!</p>
							<p  class="buttons-group c" ><a class="button" href="../free-trial-class" style="color: black;text-transform: none;text-decoration-line: none; " target="_blank" rel="noopener">Try a free dance class today!</a>
							</p>
						</div>
					</div>
					<div class="items-item" data-show="on-scroll" >
						<div class="items-holder">
							<a class="items-link" href="Crazy-Cuties4-6">
								<div class="items-image f0">
									<img width="900" height="600" src="{{URL::asset('assets/images/Age group 4 to 6.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw">
								</div>
								<div class="items-content">
									<div class="items-info">
										<h3 class="items-header">
										Crazy Cuties (Ages 4-6)</h3>
										<div class="items-text">
											
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="items-item" data-show="on-scroll">
						<div class="items-holder">
							<a class="items-link" href="elementary-aged">
								<div class="items-image f0">
									<img width="900" height="600" src="{{URL::asset('assets/images/Ages 8 to 10.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" >
								</div>
								<div class="items-content">
									<div class="items-info">
										<h3 class="items-header">Elementary Aged (Ages 6-11)</h3>
										<div class="items-text">
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="items-item" data-show="on-scroll">
						<div class="items-holder">
							<a class="items-link" href="../../elementary/adolescent">
								<div class="items-image f0">
									<img width="900" height="600" src="{{URL::asset('assets/images/Ages 14 to 16 (4).webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" >
								</div>
								<div class="items-content">
									<div class="items-info">
										<h3 class="items-header">Adolescents (Ages 12-19)</h3>
										<div class="items-text">
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="items-item" data-show="on-scroll">
						<div class="items-holder">
							<a class="items-link" href="../../free-trial-class">
								<div class="items-image f0">
									<img width="900" height="600" src="{{URL::asset('assets/images/Instill Love of Dance.webp') }}" class="attachment-item-large size-item-large" alt="" loading="lazy" sizes="(min-width: 1381px) 650px, (min-width: 481px) 50vw, 100vw" >
								</div>
								<div class="items-content">
									<div class="items-info">
										<h3 class="items-header">Free Trial Class</h3>
										<div class="items-text">
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@include('home.landing.footer')