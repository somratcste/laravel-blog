@extends('layouts.master')

@section('title')
	Blog-Home
@endsection
 
 @section('content')
 	@foreach ($posts as $post)
 		<div class="post">
			<h4>{{ $post->title }}</h4>
			<p class="post_info">{{ $post->author }} | {{ $post->created_at }}</p>
			<p class="post_des">{{ $post->body }}</p>
			<a class="read_more" href="">Read more</a>
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
 @endsection