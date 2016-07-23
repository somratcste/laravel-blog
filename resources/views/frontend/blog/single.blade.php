@extends('layouts.master')

@section('title')
	{{ $post->title }}
@endsection
 
 @section('content')
	<div class="post">
		<h4>{{ $post->title }}</h4>
		<p class="post_info">{{ $post->author }}  | {{ $post->created_at }}</p>
		<p class="post_des">{{ $post->body }}</p>
		<p class="post_info"> Category : {{ $post->name }} </p>
	</div>
 @endsection