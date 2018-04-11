@extends('layouts.master')
@section('content')



		

			<div class="slider-container light rev_slider_wrapper">
				<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500]}">
					<ul>
					@foreach($slider as $slide)
				
					@if(strpos($slide->image, "youtube.com") == false)
						<li data-transition="fade">

							<img src="{{$slide->image }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
							 data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-scalestart="150" data-scaleend="100" data-rotatestart="0"
							 data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="0" class="rev-slidebg">

							
						</li>
					@else
						<li>
						<div class="tp-caption sft customout"
			data-x="center" data-hoffset="134"
			data-y="center" data-voffset="-6"
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="600"
			data-start="1000"
			data-easing="Power4.easeOut"
			data-endspeed="500"
			data-endeasing="Power4.easeOut"
			data-autoplay="true"
			data-autoplayonlyfirsttime="false"
			data-nextslideatend="true"
		>
			<iframe src='{{$slide->image}}' width='640' height='360'
			           style='width:640px;height:360px;'>
			</iframe>
			
		</div>

						</li>
						@endif
						@endforeach  
					</ul>
				</div>
			</div>

			<section class="section m-0">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2>Our
								<strong>Services</strong>
							</h2>
						</div>
					</div>
					<div class="row text-center text-md-left mt-4">
					@foreach($ser as $s)
						<div class="col-md-4">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-4">
									<img class="img-fluid mb-4" src="{{$s->icon}}" alt="">
								</div>
								<div class="col-lg-8">
									<h4 class="mb-1">{{$s->title}}</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<p>
										<a class="btn-flat btn-xs" href="{{ url('services/'.$s->id) }}">View More
											<i class="fa fa-arrow-right"></i>
										</a>
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>

			<div class="row text-center">
				<div class="col">
					<h2 class="mb-0 word-rotator-title mt-5">
						Our <strong>Portfolio</strong>
					</h2>
					<p class="lead mb-5">
						Check out what we have been doing
					</p>
				</div>
			</div>


			<div class="container">

<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
	
</ul>

<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
	<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
	@foreach($portfolio as $item)
		<div class="col-lg-4 isotope-item {{$item->tag}}">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="{{$item->image}}" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">{{$item->title}}</span>
								<span class="thumb-info-type">{{$item->tag}}</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		@endforeach
	</div>
</div>

</div>


<br>



				<div class="container">
					
							<h2 class="text-center">
								<strong>Instagram</strong>
							</h2>
							<div id="instafeed" style="display: flex; flex-Direction: row;"></div>
						
							
					
				</div>







	@endsection
		