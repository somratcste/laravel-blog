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
			<div class="header">
				<a href="{{route('admin.blog.contact')}}"><button type="button" class="btn btn-primary">Show all Messages</button></a>
			</div>
 			<div class="post">
				@if(count($messages) == 0)
					<div class="post_body">
						<h4>No Messages.</h4>
					</div>
				@else
					<?php $i = 1 ; ?>
					@foreach ($messages as $message)
						<?php $i++; ?>
						<div class="post_body">
							<h4>{{ $message->subject }}</h4>
							<p class="author">{{ $message->sender }} | {{ $message->created_at }}</p>
							<a data-toggle="modal" data-target="#viewMessageModal<?php echo $i; ?>" href="">View </a> |
							<a data-toggle="modal" data-target="#delete<?php echo $i ; ?>" class="delete" href="">Delete</a>
							<!-- View Modal start -->
							<div class="modal fade" id="viewMessageModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">View Message</h4>
										</div>
										<div class="modal-body">
											{{ $message->body }}
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!--View  End Modal -->

							<!-- Delete Modal -->
							<div class="modal fade" id="delete<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Delete Message</h4>
										</div>
										<div class="modal-body">
											<form action="{{ route('admin.blog.message.delete')}} " method="get" class="form-inline">
												Do you want to delete this ?
												<input type="hidden" name="message_id" value="{{ $message->id}}">
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
											<button type="submit" class="btn btn-primary">Yes</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<!--End Delete Modal -->

						</div>
					@endforeach
				@endif

 			</div>
 		</div>
 	</div>
@endsection