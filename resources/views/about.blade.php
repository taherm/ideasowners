@extends('layouts.master') @section('content')



<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a>
					</li>
					<li class="active">About Us</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>About Us</h1>
			</div>
		</div>
	</div>
</section>

<div class="container">

	<div class="row">
		<div class="col">
			<h2 class="word-rotator-title">
				The New Way to
				<strong>
					<span class="word-rotator" data-plugin-options="{'delay': 2000}">
						<span class="word-rotator-items">
							<span>success.</span>
							<span>advance.</span>
							<span>progress.</span>
						</span>
					</span>
				</strong>
			</h2>
		</div>
	</div>
	<div class="row align-items-center">
		<div class="col-lg-10">
			<p class="lead">
				<span class="alternative-font">Ideas Owners</span>
			</p>
			<p style="font-size:16px">is a leading creative Media agency, Websites & Mobile Apps Development based in Kuwait. We provide marketing solutions
				to small & large Companies. We Aimed to client satisfaction by providing the best solutions to the clients.
			</p>
		</div>

	</div>





	<div class="row mt-1">
		<div class="col-lg-10">
			<h3 class="heading-primary">
				<strong>Who</strong> We Are</h3>
			<p>
				<span class="alternative-font">What differentiates us</span>
			</p>
			<p style="font-size:18px"> What differentiates us our ability to understand the clients' business well and design varieties of marketing solutions
				that exactly suite clients needs whether it's increase in sales or Awareness Campaigns. We work hard to identify the
				client requirements which help us create an effective campaigns and Projects.</p>
		</div>

	</div>


	<div class="row align-items-center">
		<div class="col-lg-2 col-sm-6">
			<a href="https://play.google.com/store/search?q=ideasowners&c=apps">
				<img src="{{asset('uploads/playstore.png')}}" style="width:150px;height:60px" />
			</a>
		</div>
		<div class="col-lg-2 col-sm-6">
			<a href="https://itunes.apple.com/kw/developer/mubarak-esmail/id825622925?mt=8">
				<img src="{{asset('uploads/appstore.jpeg')}}" style="width:150px;height:60px" />
			</a>

		</div>
	</div>






	@endsection