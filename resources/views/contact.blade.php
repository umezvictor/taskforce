@extends('template')

@section('content')
@if(session('msgstatus'))
<div class="alert alert-success">
        {{ session('msgstatus') }}
    </div>
@endif

<div class="container" style="margin-bottom: 20px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 m-auto">
			<div class="contact-form">
				<h1>Contact Us</h1>
				<p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
				<form action="{{ url('contact') }}" method="post">
				{{ csrf_field() }}
					
				<div class="form-group">
						<label for="inputEmail">Email Address</label>
						<input type="email" class="form-control" name="email" required>
					</div>
						
							<div class="form-group">
								<label for="inputFirstName">Subject</label>
								<input type="text" class="form-control" name="subject" required>
							</div>
					
					<div class="form-group">
						<label for="inputMessage">Message</label>
						<textarea class="form-control" name="message" rows="5" required></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Send Message">
				</form>
			</div>
		</div>
	</div>
</div>

@stop