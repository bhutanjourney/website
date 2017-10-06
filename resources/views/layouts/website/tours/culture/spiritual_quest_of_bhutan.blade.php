@extends('layouts.website.tours.individual_page_layout')
<div class="container">
	@section('title')
		Culture Tour
	@endsection
	@section('heading')
		<?php $tour_title = "SPIRITUAL QUEST OF BHUTAN";?>
		<p>{{$tour_title}}</p>
	@endsection
	@section('page_content')
		<div class="col-md-8">
			<img src="{{asset('assets/images/culture/spirit.jpg')}}" alt="culture tour" width="100%">
			<p>Taking off from the stunning valley of Paro through the western valleys of Wangdueand Punakha criss-crossing several high passes, the trip finally ends in the spiritual heartland of Bhutan; Bumthang. Visitors will have the opportunity to witness the role of religion in the daily lives of the Bhutanese people. The highlights include: Visits and circumambulation of Chortens (Stupas), temples, sacred caves and numerous other religious sites where the founders and propagators of Buddhism have left their indelible imprints. You can also get to attend religious discourses with spiritual leaders and monks to gain further insight.</p>
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
			  								<td>USD $ 2,653 per person</td>
			  								<td>USD $ 2203 per person</td>
			  							</tr>
			  							<tr>
			  								<td>USD $ 2563 per pax for 2 person</td>
			  								<td>USD $ 2113 per pax for 2 person</td>
			  							</tr>
			  							<tr>
			  								<td>USD $ 2293 per pax for 3 person above</td>
			  								<td>USD $ 1843 per pax for 3 person and above</td>
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
			  					<a href="#day1" data-toggle="collapse" data-parent="accordion">Day 1 [Paro-Thimphu]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse in" id="day1">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Arrive at Paro International Airport.</li>
			  						<li>Meet the representatives from our Company.</li>
			  						<li>Drive to Thimphu.</li>
			  					</ul>
			  					<p>Leisure excursion in Thimphu city.</p>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day2" data-toggle="collapse" data-parent="accordion">Day 2 [Thimphu]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day2">
			  				<div class="panel-body">
			  				<p>Visit following places of cultural interest:</p>
			  					<ul>
			  						<li>KuenselPhodrang (Buddha Statue).</li>
			  						<li>National Memorial Chorten (Stupa).</li>
			  						<li>Changangkha Monastery.</li>
			  						<li>Takin Enclosure.</li>
			  						<li>Tashi Cho Dzong-Fortress.</li>
			  						<li>Tango Monastery, Buddhist College.</li>
			  						<li>Chari Monastery meditation center.</li>
			  						<li>Archery.</li>
			  						<li>Handicrafts.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day3" data-toggle="collapse" data-parent="accordion">Day 3 [Thimphu-Punakha]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day3">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Punakha:Dochuala pass ( 3050m / 10,00ft).</li>
			  						<li>Visit Lobesa village and Chimi Lhakhang (Temple of fertility- DrulpaKunley, Divine Madman).</li>
			  						<li>Sightseeing over Pho chu and Mo chu.</li>
			  						<li>Visit PunakhaDzong and Khamsum Yulley Chorten.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day4" data-toggle="collapse" data-parent="accordion">Day 4 [Punakha-Trongsa]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day4">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Trongsa.</li>
			  						<li>En-route sightseeing: WangdueDzong.</li>
			  						<li>Beautiful sceneries of rural Bhutan, scattered settlement</li>
			  						<li>Pele La pass (3350m 11000ft).</li>
			  						<li>Jigme Singye Wangchuck National Park.</li>
			  						<li>Valley of Yak herders and Chendebji Chorten.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day5" data-toggle="collapse" data-parent="accordion">Day 5 [Trongsa-Bumthang]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day5">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Trongsa Dzong, Ta-Dzong (Tower of Trongsa), an elegant museum tasteful blend of tradition and modernity.</li>
			  						<li>Drive to Bumthang.</li>
			  						<li>En-route sightseeing: Yotong la pass (11,800ft), Chumey Valley, Yathra (Wooolen) weaving center at Zuney Village.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day6" data-toggle="collapse" data-parent="accordion">Day 6 [Bumthang]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day6">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Ideal place to explore on foot, Visit Jambay monastery, Kurjey Monastery and Tamshing Monastery.</li>
			  						<li>Karchu Dratsang to attend prayer ceremony.</li>
			  						<li>Farmhouse lunch.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day7" data-toggle="collapse" data-parent="accordion">Day 7 [Bumthang-Phobjikha]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day7">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Phobjikha via Trongsa, Beautiful landscape, virgin forest , Lawala Pass, Phobjikha Valley—Valley of Black Necked cranes, visit to GangteyGompa, Crane information Center, and Carpet factory.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day8" data-toggle="collapse" data-parent="accordion">Day 8 [Phobjikha-Paro]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day8">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Hike Eco Natural trail</li>
			  						<li>Drive to Paro via Wangdue – Thimphu over Dochula Pass.</li>
			  						<li>Visit SimtokhaDzong.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day9" data-toggle="collapse" data-parent="accordion">Day 9 [Paro]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day9">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Excursion hike to Taktshang (Tiger Nest) monastery</li>
			  						<li>Visit KyichuMonastery,ParoDzong, Ta-Dzong, Nationaal Museum.</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day10" data-toggle="collapse" data-parent="accordion">Day 10 [Departure]</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day10">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to airport for your destination flight.</li>
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


