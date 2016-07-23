@extends('layouts.admin_master')

@section('content')
 	<div class="row">
		<div class="post">
			<div class="header">
				<a href="{{ route('admin.blog.create_post') }}"><button type="button" class="btn btn-primary">New Post</button></a>
			</div>
			@if(count($posts) == 0)
	 				<div class="post_body">
		 				<h4>No Posts.</h4>
		 			</div>
		 		@else
					@foreach ($posts as $post)
						<div class="post_body">
			 				<h4>{{ $post->title }}</h4>
			 				<p class="author">{{ $post->author }} | {{ $post->category->name }} | {{ $post->created_at }}</p>
			 				<a href="{{ route('admin.blog.single' , ['post_id' => $post->id  , 'end' => 'admin']) }}">View Post</a> | 
			 				<a href="{{ route('admin.blog.post.edit' , ['post_id' => $post->id]) }}">Edit</a> | 
			 				<a class="delete" href="{{ route('admin.blog.post.delete' , ['post_id' => $post->id ]) }}">Delete</a>
			 			</div>
					@endforeach
		 		@endif
		</div>
 	</div>
@endsection