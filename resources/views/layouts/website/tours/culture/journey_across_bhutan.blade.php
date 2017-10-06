@extends('layouts.website.tours.individual_page_layout')
<div class="container">
	@section('title')
		Culture Tour
	@endsection
	@section('heading')
		<?php $tour_title = "JOURNEY ACROSS BHUTAN";?>
		<p>{{$tour_title}}</p>
	@endsection
	@section('page_content')
		<div class="col-md-8">
			<img src="{{asset('assets/images/culture/journey-across-bhutan.jpg')}}" alt="culture tour" width="100%">
			<p>This 15 days overland journey across Bhutan combines the best cultural and natural aspects of eastern, central and western Bhutan. It gives an opportunity to discover the lesser known areas of far east and the notable sights of central and west. The journey takes visitors from GuwhatiAirport (Assam, India) through Samdrupjongkhar(eastern gateway to Bhutan) traversing rugged terrain of the east(Samdrupjongkar, Tashigang, Tashiyangtsi, Mongar) and gentle valleys of central and western Bhutan(Trongsa, Bumthang,Wangdue, Punakha, Thimphu, Paro). It takes over six major passes and covers a distance of about 900 kilometers/ 535 miles.</p>
			<button class="btn btn-warning" style="float:right;" data-toggle="modal" data-target="#individual_book">Book Now!</button>
			{{-- Tabs --}}
			<div>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item active">
				    <a class="nav-link active" id="trip_overview-tab" data-toggle="tab" href="#trip_overview" role="tab" aria-controls="trip_overview" aria-expanded="true">Trip Overview</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail">Detailed Itinerary</a>
				  </li>
				</ul>
			</div>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade in active" id="trip_overview" role="tabpanel" aria-labelledby="trip_overview-tab">
			  	<table class="table table-bordered">
			  		<thead>
			  			<tr>
			  				<th>SEASON</th>
			  				<th>YEAR ROUND</th>
			  			</tr>
			  		</thead>
			  		<tbody>
			  			<tr>
			  				<td>BASE <BR/><BR/><BR/> PRICE</td>
			  				<td>
			  					<table class="table table-bordered">
			  						<thead>
			  							<tr>
			  								<th>HIGH SEASON</th>
			  								<th>LEAN SEASON</th>
			  							</tr>
			  						</thead>
			  						<tbody>
			  							<tr>
			  								<td>USD $ 4103 per person</td>
			  								<td>USD $ 3403 per person</td>
			  							</tr>
			  							<tr>
			  								<td>USD $ 3963 per pax for 2 person</td>
			  								<td>USD $ 3263 pax for 2 person</td>
			  							</tr>
			  							<tr>
			  								<td>USD $ 3543 per pax for 3 person and above</td>
			  								<td>USD $ 2843 per pax for 3 person and above</td>
			  							</tr>
			  						</tbody>
			  					</table>
			  				</td>
			  			</tr>
			  		</tbody>
			  	</table>
			  	<p>An additional charge may apply depending on your choice of the hotel s and requirement of other specific services. Above price includes royalty to government, visa fee, accommodation, transportation, meals, guide, and other applicable fees and excludes the cost of your air ticket.</p>
			  </div>
			  <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab" style="margin: 0;">
			  	<div class="panel-group" id="accordion">
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day1" data-toggle="collapse" data-parent="accordion">Day 1 [Guwahati-Samdrupjongkhar]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse in" id="day1">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Arrive at Guwahati Airport.</li>
			  						<li>Meet the representatives from our Company.</li>
			  						<li>Drive through Indian plain to Samdrupjongkhar.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day2" data-toggle="collapse" data-parent="accordion">Day 2 [Samdrupjongkhar-Trashigang]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day2">
			  				<div class="panel-body">
			  				<p>Visit following places of cultural interest:</p>
			  					<ul>
			  						<li>Drive to Trashigang.</li>
			  						<li>En-route visit to Dewathang, Warmbong, Kaling Textile center, and Sherutse College.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day3" data-toggle="collapse" data-parent="accordion">Day 3 [Trashigang-Trashiyangtse]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day3">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Morning: visit to Trashigang Dzong, Drive to Trashiyangtse, visit GomKora, and Doksum village.</li>
			  						<li>Continue your drive to TashiYangtse.</li>
			  						<li>Evening leisure.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day4" data-toggle="collapse" data-parent="accordion">Day 4 [Trashiyangtse]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day4">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Morning visit ChortenKora.</li>
			  						<li>Visit Institute of art and craft.</li>
			  						<li>Afternoon visit Bumdeling National Park information center, national park center and walk through town</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day5" data-toggle="collapse" data-parent="accordion">Day 5 [Trashiyangtse-Mongar]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day5">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Dramitsi monastery.</li>
			  						<li>Afternoon, drive to Mongar.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day6" data-toggle="collapse" data-parent="accordion">Day 6 [Mongar-Lhuentse-Mongar]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day6">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Lhuntse.</li>
			  						<li>En-route drive or walk to visit Khoma Village, famous for Bhutanese textile.</li>
			  						<li>Drive back to Mongar or camping can be arranged.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day7" data-toggle="collapse" data-parent="accordion">Day 7 [Mongar-Ura]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day7">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Ura, Sengor village, Via Thrumshing la pass(3750 m/12, 4000 ft).</li>
			  						<li>Drive to Ura village.</li>
			  						<li>Night halt Farm house.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day8" data-toggle="collapse" data-parent="accordion">Day 8 [Ura-Bumthang]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day8">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Morning visit Ura Monastery, drive to visit Sombrong village.</li>
			  						<li>Drive to Jakar, Bumthang.</li>
			  						<li>Eveving at leisure.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day9" data-toggle="collapse" data-parent="accordion">Day 9 [Bumthang]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day9">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Ideal place to explore on foot, Visit Jambay monastery, Kurjey Monastery and Tamshing Monastery.</li>
			  						<li>KarchuDratsang to attend prayer ceremony.</li>
			  						<li>Farmhouse lunch.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day10" data-toggle="collapse" data-parent="accordion">Day 10 [Bumthang-Trongsa]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day10">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Morning drive to Trongsa.</li>
			  						<li>En-route visit Yathra/woolen weaving center.</li>
			  						<li>Sightseeing at Yotongla pass.</li>
			  						<li>Visit Trongsa Dzong and Tower of Trongsa,Museum.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day11" data-toggle="collapse" data-parent="accordion">Day 11 [Trongsa-Phobjikha-Punakha]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day11">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Phobjikha via Beautiful landscape and virgin forest.</li>
			  						<li>Lawala Pass, Phobjikha Valley, Black Necked cranes and Gangtey Gompa.</li>
			  						<li>Visit Crane information Center.</li>
			  						<li>Drive to Punakha.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day12" data-toggle="collapse" data-parent="accordion">Day 12 [Punakha-Thimphu]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day12">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to visit Punakha Dzong, hike to Chimilhakhang (fertility Temple)/Divine madman</li>
			  						<li>Drive to Thimphu over Dochula pass</li>
			  						<li>Descend to Thimphu.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day13" data-toggle="collapse" data-parent="accordion">Day 13 [Thimphu-Paro]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day13">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Morning visit Kuenselphodrang (169ft Statue) and National Memorial chorten.</li>
			  						<li>Takin Enclosure</li>
			  						<li>Walk through main street of Thimphu</li>
			  						<li>Drive to Paro</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day14" data-toggle="collapse" data-parent="accordion">Day 14 [Paro]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day14">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Excursion hike to Taktshang (Tiger Nest) monastery/ Kyichu Monastery, Paro Dzong and Tak Dzong, Nationaal Museum.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day15" data-toggle="collapse" data-parent="accordion">Day 15 [Departure]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day15">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to airport for your destination flight</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<h3>CULTURE</h3>
				<a href="{{route('culture_tour')}}" target="_blank">
					<img src="{{asset('assets/images/culture/culture.jpg')}}" alt="Image of culture" width="90%">
				</a>
			</div>
			<div class="row">
				<h3>FESTIVAL</h3>
				<a href="{{route('festival_tour')}}" target="_blank"><img src="{{asset('assets/images/festival/festival.jpg')}}" alt="Festival Image" width="90%"></a>
			</div>
			<div class="row">
				<h3>NATURE</h3>
				<a href="{{route('nature_tour')}}" target="_blank"><img src="{{asset('assets/images/nature/nature.jpg')}}" alt="Nature Image" width="90%"></a>
			</div>
			<div class="row">
				<h3>TREKKING</h3>
				<a href="{{route('trekking_tour')}}" target="_blank"><img src="{{asset('assets/images/trekking/trekking.jpg')}}" alt="Trekking Image" width="90%"></a>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="individual_book" tabindex="-1" role="dialog" aria-labelledby="BookIndividualTour" aria-hidden="true">
		  @include('layouts.website.tours.individual_book')
		</div>
	@endsection
</div>


