@extends('layouts.admin_master')

@section('content')
 	<div class="row">
 		@include('includes.info-box')
 		<div class="col-md-6">
 			<div class="post">			
	 			<div class="header">
	 				<a href="{{ route('admin.blog.create_post') }}"><button type="button" class="btn btn-primary">New Post</button></a>
					<button type="button" class="btn btn-primary">Show all Posts</button>
	 			</div>
	 			<div class="post_body">
	 				<h4>This is a new post</h4>
	 				<p class="author">Somrat | 2016-12-06 07:20:25</p>
	 				<a href="">View Post</a> | <a href="{{ route('admin.blog.edit_post') }}">Edit</a> | <a class="delete" href="">Delete</a>
	 			</div>
	 			<div class="post_body">
	 				<h4>This is a new post</h4>
	 				<p class="author">Somrat | 2016-12-06 07:20:25</p>
	 				<a href="">View Post</a> | <a href="">Edit</a> | <a class="delete" href="">Delete</a>
	 			</div>
	 			<div class="post_body">
	 				<h4>This is a new post</h4>
	 				<p class="author">Somrat | 2016-12-06 07:20:25</p>
	 				<a href="">View Post</a> | <a href="">Edit</a> | <a class="delete" href="">Delete</a>
	 			</div>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="post">
	 			<div class="header">
					<button type="button" class="btn btn-primary">Show all Messages</button>
	 			</div>
	 			<div class="post_body">
	 				<h4>A Test Mail</h4>
	 				<p class="author"> Sender : G. M. Somrat | 2016-12-06 07:20:25</p>
	 				<a href="">View </a> | <a class="delete" href="">Delete</a>
	 			</div>
 			</div>
 		</div>
 	</div>
@endsection