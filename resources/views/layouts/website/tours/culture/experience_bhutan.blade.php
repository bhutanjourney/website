@extends('layouts.website.tours.individual_page_layout')
<div class="container">
	@section('title')
		Culture Tour
	@endsection
	@section('heading')
		<p>EXPERIENCE BHUTAN</p>
	@endsection
	@section('page_content')
		<div class="col-md-8">
			<img src="{{asset('assets/images/culture/culture.jpg')}}" alt="culture tour" width="100%">
			<p>This tour is designed for visitors with limited time but those who have high hopes and aspirations to experience Bhutan in a shortest possible way. The five days and four nights program covers visit to Paro and Thimphu Valleys. Highlight includes: Sacred Buddhist sites, beautiful landscape, villages, massive fortresses and meeting people.</p>
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
			  								<td>USD $ 1203 per person</td>
			  								<td>USD $ 1003 per person</td>
			  							</tr>
			  							<tr>
			  								<td>USD $ 1163 per pax for 2 person</td>
			  								<td>USD $ 963 per pax for 2 person</td>
			  							</tr>
			  							<tr>
			  								<td>USD $ 1043 per pax for 3 person and above</td>
			  								<td>USD $ 843 per pax for 3 person and above</td>
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
			  					<a href="#day1" data-toggle="collapse" data-parent="accordion">Day 1</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse in" id="day1">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Arrive at Paro International Airport</li>
			  						<li>Meet the representatives from our Company</li>
			  						<li>Drive to Thimphu</li>
			  					</ul>
			  					<p>Leisure excursion in Thimphu city</p>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day2" data-toggle="collapse" data-parent="accordion">Day 2</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day2">
			  				<div class="panel-body">
			  				<p>Visit following places of cultural interest:</p>
			  					<ul>
			  						<li>KuenselPhodrang (Buddha Statue)</li>
			  						<li>National Memorial Chorten (Stupa)</li>
			  						<li>Textile & Folk Heritage Museum</li>
			  						<li>Institute of Arts & Crafts</li>
			  						<li>Viewpoint of Thimphu Valley</li>
			  						<li>Takin Enclosure</li>
			  						<li>Tashi Cho Dzong-Fortress</li>
			  						<li>Traditional Paper Factory</li>
			  						<li>Archery</li>
			  						<li>Handicrafts</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day3" data-toggle="collapse" data-parent="accordion">Day 3</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day3">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Drive to Paro</li>
			  						<li>Visit Paro Ta-Dzong (National Museum), RinpongDzong, Farm House, Kyichu Monastery, DrukgyelDzong (ruined fortress)</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day4" data-toggle="collapse" data-parent="accordion">Day 4</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day4">
			  				<div class="panel-body">
			  					<ul>
			  						<li>Excursion hike to Taktshang (Tiger Nest) monestary</li>
			  						<li>Fare well dinner</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="panel panel-info">
			  			<div class="panel-heading">
			  				<div class="panel-title">
			  					<a href="#day5" data-toggle="collapse" data-parent="accordion">Day 5</a>
			  				</div>
			  			</div>
			  			<div class="panel-collapse collapse" id="day5">
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
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h3 class="modal-title" id="exampleModalLabel">Plan Your Trip!</h3>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="#">
		        	<div class="form-group">
		        		<label for="name">Name<span style="color: red;">*</span></label>
		        		<input type="text" class="form-control" name="name" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="email">Email Address<span style="color: red;">*</span></label>
		        		<input type="text" class="form-control" name="email" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="country">Country<span style="color: red;">*</span></label>
		        		<input type="text" class="form-control" name="country" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="heads">No of Heads<span style="color: red;">*</span></label>
		        		<input type="text" class="form-control" name="heads" required>
		        	</div>
		        	<div class="form-group">
		        		<label for="description">Any Requirements!</label>
		        		<textarea name="description" class="form-control" cols="30" rows="5"></textarea>
		        	</div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
	@endsection
</div>


