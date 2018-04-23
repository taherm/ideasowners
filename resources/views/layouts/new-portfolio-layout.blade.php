@extends('layouts.master')
@section('content')



		

<div class="container">

					<h2>Our <strong>Portfolio</strong></h2>
                    <div class="row justify-content-around mb-5">
						<div class="col-sm-7">
							<h2>	{{$ser->title}}</h2>
							<p 	{!!$ser->description!!}</p>
							
						</div>
						<div class="col-sm-4 mt-4">
						<a href="{{url($ser->weblink)}}">		<img class="img-fluid mt-5" src="{{asset('uploads/'.$ser->image)}}" alt=""> </a>
						</div>
					</div>
                    </div>

@endsection
		