@extends('layouts.master')

@section('title')
	Blog-Home
@endsection
 
 @section('content')
 	<div class="col-md-9">
		@if(!empty(Request::Segment(1)))
			<section class="alert alert-info">
				Category : {{$category->name }} - View All Posts.
			</section>
		@endif
	 	@foreach ($posts as $post)
	 		<div class="post">
				<h4>{{ $post->title }}</h4>
				<p class="post_info">{{ $post->author }} | {{ $post->created_at }}</p>
				<p class="post_des">{{ $post->body }}</p>
				<p class="post_info"> Category : {{ $post->category->name or 'No Data' }} </p>
				<a class="read_more" href="{{ route('blog.single' , ['post_id' => $post->id  , 'end' => 'frontend']) }}">Read more</a>
			</div>
	 	@endforeach
		<section>
		<nav>
			<ul class="pager">
			  	@if($posts->currentPage() !== 1)
			    	<li class="previous"><a href="{{ $posts->previousPageUrl() }}"><span aria-hidden="true">&larr;</span> Older</a></li>
			    @endif
			    @if($posts->currentPage() !== $posts->lastPage() && $posts->hasPages())
			    	<li class="next"><a href="{{ $posts->nextPageUrl() }}">Newer <span aria-hidden="true">&rarr;</span></a></li>
			    @endif
			</ul>
		</nav>
		</section>
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