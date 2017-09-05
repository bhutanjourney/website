@extends('layouts.website.page_layout')
@section('title')
Culture Tour
@endsection
@section('content')
	<div class="container">
		<div class="panel panel-info">
	        <div class="panel-heading" style="text-align: center"><h1>CULTURE TOUR</h1></div>
	            <div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<a href="{{route('experience_bhutan')}}">
								<img class="img-round" src="{{asset('assets/images/culture/culture.jpg')}}" alt=""  width="300px">
							</a>
						</div>
						<div class="col-md-4">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/culture/culture.jpg')}}" alt="" width="300px">
							</a>
						</div>
						<div class="col-md-4">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/culture/culture.jpg')}}" alt="" width="300px">
							</a>
						</div>
					</div>
					<br>
					<br>
					<br>
					<div class="row">
						<div class="col-md-4">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/culture/culture.jpg')}}" alt=""  width="300px">
							</a>
						</div>
						<div class="col-md-4">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/culture/culture.jpg')}}" alt="" width="300px">
							</a>
						</div>
						<div class="col-md-4">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/culture/culture.jpg')}}" alt="" width="300px">
							</a>
						</div>
					</div>
				</div>
		</div>
	</div>
@endsection