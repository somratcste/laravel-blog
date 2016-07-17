@extends('layouts.admin_master')

@section('content')
 	<div class="row">
		<div class="post">
			<div class="header">
				<a href="{{ route('admin.create_post') }}"><button type="button" class="btn btn-primary">New Post</button></a>
			</div>
			<div class="post_body">
				<h4>This is a new post</h4>
				<p class="author">Somrat | 2016-12-06 07:20:25</p>
				<a href="">View Post</a> | <a href="{{ route('admin.edit_post') }}">Edit</a> | <a class="delete" href="">Delete</a>
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
@endsection