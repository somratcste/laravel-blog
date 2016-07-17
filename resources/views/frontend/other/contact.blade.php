@extends('layouts.master')

@section('title')
	Contact
@endsection
 
 @section('content')
 	<div class="col-md-12">
		<form action="" method="" class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Your Name</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Name">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-5">
				  <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Your Subject</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="subject" placeholder="Subject">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Your Message</label>
				<div class="col-sm-5">
				 <textarea name="message" class="form-control" rows="3" placeholder="Your message"></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-5">
				  <button type="submit" class="btn btn-primary pull-right">Submit</button>
				</div>
			</div>
		</form>
	</div>
 @endsection