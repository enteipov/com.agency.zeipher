<form name="contact-form" method="post" action="#">
	<legend><h4>Contact Form</h4></legend>
	<p>Feel free to contact us in regards to our services and pricing.</p>
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<label for="fname">First Name:</label>
			<input class="form-control" type="text" name="fname" placeholder="First Name" required>
		</div>
		<div class="col-sm-12 col-md-6">
			<label for="lname">Last Name:</label>
			<input class="form-control" type="text" name="lname" placeholder="Last Name" required>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<label for="email">Email:</label>
			<input class="form-control" type="email" name="email" placeholder="Email" required>
		</div>
		<div class="col-sm-12 col-md-6">
			<label for="bname">Business Name:</label>
			<input class="form-control" type="text" name="bname" placeholder="Business Name" required>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label for="message">Message:</label>
			<textarea class="form-control" type="textarea" name="message" placeholder="What do you want to say" required></textarea>
		</div>
	</div>
	<div class=" row">
		<div class="col-sm-12">
			<button class="btn btn-primary float-right" type="submit">Send</button>
		</div>
	</div>
</form>