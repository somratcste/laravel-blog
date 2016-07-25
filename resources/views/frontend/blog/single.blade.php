@extends('layouts.master')

@section('title')
	{{ $post->title }}
@endsection
 
 @section('content')
	 <div class="col-md-9">
		<div class="post">
			<h4>{{ $post->title }}</h4>
			<p class="post_info">{{ $post->author }}  | {{ $post->created_at }}</p>
			<p class="post_des">{{ $post->body }}</p>
			<p class="post_info"> Category : {{ $post->category->name }} </p>
		</div>
	 </div>
	 <div class="col-md-3">
		 <div class="left_sidebar">
			 <h4>All Categories </h4>
			 @foreach ($categories as $category)
				 <a href="{{route('blog.index' , ['category' => $category->name])}}"><p class="left_sidebar_content">{{ $category->name }}</p></a>
			 @endforeach
		 </div>
	 </div>
 @endsection