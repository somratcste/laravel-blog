@extends('layouts.master')

@section('title')
	Contact
@endsection
 
 @section('content')
 	<div class="col-md-12">
		@include('includes.info-box')
		<form action="{{route('contact.send')}}" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Your Name</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Name" value="{{Request::old('name')}}">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-5">
				  <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="{{Request::old('email')}}">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Your Subject</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="subject" placeholder="Subject" value="{{Request::old('subject')}}">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Your Message</label>
				<div class="col-sm-5">
				 <textarea name="message" class="form-control" rows="3" placeholder="Your message">{{Request::old('message')}}</textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-5">
				  <button type="submit" class="btn btn-primary pull-right">Submit</button>
					<input type="hidden" name="_token" value="{{ Session::token() }}">
				</div>
			</div>
		</form>
	</div>
 @endsection