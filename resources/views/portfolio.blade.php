@extends('layouts.master')
@section('content')




<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Portfolio</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								
							</div>
						</div>
					</div>
				</section>

<div class="container">

<h2>Portfolio</h2>

<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
    
    <li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#" style="color:#bc6d14;"><b>Websites</b></a></li>
    <li class="nav-item" data-option-value=".app"><a class="nav-link" href="#" style="color:#bc6d14;"><b>Apps</b></a></li>
	<li class="nav-item" data-option-value=".feasibility"><a class="nav-link" href="#" style="color:#bc6d14;"><b>Feasibility Study</b></a></li>
    <li class="nav-item" data-option-value=".logos"><a class="nav-link" href="#" style="color:#bc6d14;"><b>Logos</b></a></li>
	<li class="nav-item" data-option-value=".video"><a class="nav-link" href="#" style="color:#bc6d14;"><b>Videos</b></a></li>
    <li class="nav-item" data-option-value=".graphic"><a class="nav-link" href="#" style="color:#bc6d14;"><b>Graphic Design</b></a></li>
</ul>

<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
	<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
	@foreach($portfolio as $item)
		<div class="col-lg-4 isotope-item {{$item->tag}}" id="{{$item->tag}}">
			<div class="portfolio-item">
				<a href="{{ url('portfolios/'.$item->id) }}">
					<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
						<span class="thumb-info-wrapper">
							<img src="{{asset('uploads/'.$item->image)}}" class="img-fluid" alt="">
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


@endsection