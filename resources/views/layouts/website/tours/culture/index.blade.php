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
							<a href="{{route('experience_bhutan')}}" target="_blank">
								<img class="img-round" src="{{asset('assets/images/culture/culture.jpg')}}" alt=""  width="300px">
							</a>
							<div class="caption">
								<h5>EXPERIENCE BHUTAN (4 NIGHTS / 5 DAYS)</h5>
							</div>
						</div>
						<div class="col-md-4">
							<a href="{{route('essence_of_bhutan')}}" target="_blank">
								<img class="img-round" src="{{asset('assets/images/culture/essence-of-bhtuan.jpg')}}" alt="" width="300px">
							</a>
							<div class="caption">
								<h5>ESSENCE OF BHUTAN (6 NIGHTS / 7 DAYS)</h5>
							</div>
						</div>
						<div class="col-md-4">
							<a href="{{route('spiritual_quest_of_bhutan')}}" target="_blank">
								<img class="img-round" src="{{asset('assets/images/culture/spirit.jpg')}}" alt="" width="300px">
							</a>
							<div class="caption">
								<h5>SPIRITUAL QUEST OF BHUTAN (9 NIGHTS / 10 DAYS)</h5>
							</div>
						</div>
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col-md-4">
							<a href="{{route('legend_of_central_bhutan')}}" target="_blank">
								<img class="img-round" src="{{asset('assets/images/culture/spiritual-quest.jpg')}}" alt=""  width="300px">
							</a>
							<div class="caption">
								<h5>THE LEGEND OF CENTRAL BHUTAN (11 NIGHTS / 12 DAYS)</h5>
							</div>
						</div>
						<div class="col-md-4">
							<a href="{{route('cultural_prelude_to_bhutan')}}" target="_blank">
								<img class="img-round" src="{{asset('assets/images/culture/culutural-prelude.jpg')}}" alt="" width="300px">
							</a>
							<div class="caption">
								<h5>CULTURAL PRELUDE TO BHUTAN (13 NIGHTS / 14 DAYS)</h5>
							</div>
						</div>
						<div class="col-md-4">
							<a href="{{route('journey_across_bhutan')}}" target="_blank">
								<img class="img-round" src="{{asset('assets/images/culture/journey-across-bhutan.jpg')}}" alt="" width="300px">
							</a>
							<div class="caption">
								<h5>JOURNEY ACROSS BHUTAN (14 NIGHTS / 15 DAYS)</h5>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
@endsection