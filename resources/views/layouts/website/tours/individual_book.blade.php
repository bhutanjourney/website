<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-title" id="exampleModalLabel">Book Your Trip!</h3>
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