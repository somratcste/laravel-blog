@extends('layouts.master')

@section('title')
	{{ $post->title }}
@endsection
 
 @section('content')
	<div class="post">
		<h4>{{ $post->title }}</h4>
		<p class="post_info">{{ $post->author }} {{ $post->name }} | {{ $post->created_at }}</p>
		<p class="post_des">{{ $post->body }}</p>
	</div>
 @endsection