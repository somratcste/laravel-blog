@extends('layouts.admin_master')
@section('content')
	<div class="row">
		<div class="post">			
			<div class="header">
				<a href=""><button type="button" class="btn btn-primary">Edit Post</button></a>
				<a href=""><button type="button" class="btn btn-primary">Delete Post</button></a>
			</div>
			<div class="post_body">
 				<h4>{{ $post->title }}</h4>
 				<p class="author">{{ $post->author }} | {{ $post->created_at }}</p>
 				<p class="post_des">{{ $post->body }}</p>
 			</div>
		</div>
@endsection