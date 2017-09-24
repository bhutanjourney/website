@extends('layouts.website.tours.individual_page_layout')
<div class="container">
	@section('title')
		About Us
	@endsection
	@section('heading')
		<p>ABOUT US</p>
	@endsection
	@section('page_content')
		<div class="col-md-8">
			<p style="text-align: justify;">
				Bhutan Journeys was established in 2006 by a team of professionals, each of whom has many years of experience in the tourism and hospitality industries. Inspired by our mission to be “At Our Best For Travelers” we will make your visit to Bhutan a truly special one, every time. Our tour packages are designed in such a way that through them you experience the real tastes and treats that Bhutan has to offer. We also provide special interest trips for visitors wanting to immerse themselves in specific features of the wonderland called Bhutan. Our trips are led by a team of professional tour guides certified by the Tourism Council of Bhutan. Our tour guides have all the experience, personality, knowledge and expertise that are essential to deliver a warm and professional, approachable service to our customers. Bhutan Journeys can provide for all your travel needs including flight booking and processing of visas for individuals, small and large tour groups. At Bhutan Journeys, providing you with a world-class level of service is not just one of the things we do, it is our highest priority. The smiles and contentment of our clients as they bid us farewell, hoping to return soon, mean more to us than financial reward. All this is what inspires us to work ever harder for you in our aim for perfection.
			</p>
			<p>
				Discover Bhutan with Bhutan Journeys – assuring you of the experience of a lifetime.
			</p>
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


