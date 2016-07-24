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
			 				<p class="author">{{ $post->author }} | {{ $post->category->name }} | {{ $post->created_at }}</p>
			 				<a href="{{ route('admin.blog.single' , ['post_id' => $post->id  , 'end' => 'admin']) }}">View Post</a> | 
			 				<a href="{{ route('admin.blog.post.edit' , ['post_id' => $post->id]) }}">Edit</a> | 
			 				<a class="delete" href="{{ route('admin.blog.post.delete' , ['post_id' => $post->id ]) }}">Delete</a>
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
	 				<a data-toggle="modal" data-target="#viewMessageModal" href="">View </a> | <a class="delete" href="">Delete</a>
					<!-- Modal start -->
					<div class="modal fade" id="viewMessageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">View Message</h4>
								</div>
								<div class="modal-body">
									...
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
	 			</div>
 			</div>
 		</div>
 	</div>
@endsection