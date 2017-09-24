@extends('layouts.website.page_layout')
@section('title')
Nature Tour
@endsection
@section('content')
	<div class="container">
		<div class="panel panel-info">
	        <div class="panel-heading" style="text-align: center"><h1>NATURE TOUR</h1></div>
	            <div class="panel-body">
	            	<p>Bhutan has been recognized as one of 10 global centres for environmental conservation because of its amazing diversity of flora and fauna. Bhutan is one of the leading countries in the world for prioritising the protection of the environment while pursuing developmental activities. The change in altitude from the high elevations in the north of Bhutan to the plains in the south is ever more impressive. The altitude declines, from approximately 7,500 meters to 200 meters above sea level, within a distance of less than 175 km giving you a general idea of the topography of Bhutan. Bhutan has been described as a natural paradise because of the level of rich and pristine biodiversity. Even as the world mourns the loss of fragile ecosystems, this small Himalayan kingdom is emerging as an example to the international community, with more than 72 percent of its land still covered by forest.  Much of this precious landscape is protected and designated as national parks, abounding with a great variety of rare plants and wildlife species. This tour offers you the opportunity to explore and experience the diverse sights of the country, taking adventure walks and interacting with local people.</p>
					<div class="row">
						<div class="col-md-3">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/nature/omnibus.jpg')}}" alt=""  width="250px">
							</a>
							<div class="caption">
								<h5>BHUTAN OMNIBUS (7 NIGHTS / 8 DAYS)</h5>
							</div>
						</div>
						<div class="col-md-3">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/nature/bird.jpg')}}" alt="" width="250px">
							</a>
							<div class="caption">
								<h5>BIRD WATCHING (14 NIGHTS/15 DAYS)</h5>
							</div>
						</div>
						<div class="col-md-3">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/nature/walk1.jpg')}}" alt="" width="250px">
							</a>
							<div class="caption">
								<h5>WALKING (8 NIGHTS / 9 DAYS)</h5>
							</div>
						</div>
						<div class="col-md-3">
							<a href="#">
								<img class="img-round" src="{{asset('assets/images/nature/nature.jpg')}}" alt="" width="250px">
							</a>
							<div class="caption">
								<h5>MOUNTAIN BIKE (8 NIGHTS / 9 DAYS)</h5>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
@endsection