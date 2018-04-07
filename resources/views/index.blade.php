@extends('layouts.master')
@section('content')



		

			<div class="slider-container light rev_slider_wrapper">
				<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500]}">
					<ul>
					@foreach($slider as $slide)
						<li data-transition="fade">

							<img src="{{$slide->image }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
							 data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-scalestart="150" data-scaleend="100" data-rotatestart="0"
							 data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="0" class="rev-slidebg">

							
						</li>
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
		<div class="col-lg-1-5 isotope-item brands">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/web-1.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Presentation</span>
								<span class="thumb-info-type">Brand</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item medias">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/web-2.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Porto Watch</span>
								<span class="thumb-info-type">Media</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item logos">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/web-4.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Identity</span>
								<span class="thumb-info-type">Logo</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item brands">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/web-5.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Watch Mockup</span>
								<span class="thumb-info-type">Brand</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item logos">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/web-6.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Three Bottles</span>
								<span class="thumb-info-type">Logo</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item brands">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/logo-1.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Company T-Shirt</span>
								<span class="thumb-info-type">Brand</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item websites">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/logo-4.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Mobile Mockup</span>
								<span class="thumb-info-type">Website</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item medias">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/logo-3.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Porto Label</span>
								<span class="thumb-info-type">Media</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item logos">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/logo-5.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Business Folders</span>
								<span class="thumb-info-type">Logo</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-lg-1-5 isotope-item websites">
			<div class="portfolio-item">
				<a href="portfolio-single-small-slider.html">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="img/portfolio/app-1.jpeg" class="img-fluid" alt="">
							<span class="thumb-info-title">
								<span class="thumb-info-inner text-1 line-height-xs pt-1">Tablet Screen</span>
								<span class="thumb-info-type">Website</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>

</div>

	@endsection
		