@extends('layouts.admin_master')

@section('content')
 	<div class="row">
 		@include('includes.info-box')
 		<div class="col-md-6">
 			<div class="post">			
	 			<div class="header">
	 				<a href="{{ route('admin.blog.create_post') }}"><button type="button" class="btn btn-primary">New Post</button></a>
					<a href="{{ route('admin.blog.posts') }}"><button type="button" class="btn btn-primary">Show all Posts</button></a>
	 			</div>
	 			@if(count($posts) == 0)
	 				<div class="post_body">
		 				<h4>No Posts.</h4>
		 			</div>
		 		@else
					@foreach ($posts as $post)
						<div class="post_body">
			 				<h4>{{ $post->title }}</h4>
			 				<p class="author">{{ $post->author }} | {{ $post->created_at }}</p>
			 				<a href="{{ route('admin.blog.single' , ['post_id' => $post->id  , 'end' => 'admin']) }}">View Post</a> | 
			 				<a href="{{ route('admin.blog.post.edit' , ['post_id' => $post->id]) }}">Edit</a> | 
			 				<a class="delete" href="">Delete</a>
			 			</div>
					@endforeach
		 		@endif		
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