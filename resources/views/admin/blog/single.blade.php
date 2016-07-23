@extends('layouts.admin_master')
@section('content')
	<div class="row">
		<div class="post">			
			<div class="header">
				<a href="{{ route('admin.blog.post.edit' , ['post_id' => $post->id]) }}"><button type="button" class="btn btn-primary">Edit Post</button></a>
				<a href="{{ route('admin.blog.post.delete' , ['post_id' => $post->id ]) }}"><button type="button" class="btn btn-primary">Delete Post</button></a>
			</div>
			<div class="post_body">
 				<h4>{{ $post->title }}</h4>
 				<p class="author">{{ $post->author }} | {{ $post->created_at }}</p>
 				<p class="post_des">{{ $post->body }}</p>
 				<p class="author">{{ $post->category->name }}</p>
 			</div>
		</div>
@endsection