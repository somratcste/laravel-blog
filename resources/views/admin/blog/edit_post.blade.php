@extends('layouts.admin_master')
 
 @section('content')
 	<div class="col-md-12">
 		<div class="header_info">
 			<h4>Update Post</h4>
 		</div>
 		@include('includes.info-box')
 		<form action="{{ route('admin.blog.post.update') }}" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="Title" value="{{ Request::old('title') ? Request::old('title') : isset($post) ? $post->title : '' }} ">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Author</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="author" placeholder="Author" value="{{ Request::old('author') ? Request::old('author') : isset($post) ? $post->author : '' }} ">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Add Categories</label>
				<div class="col-sm-5">
					 <select class="form-control" name="category">
						<option selected>Select Categories</option>
						
						@foreach ($categories as $category)
							<option value="{{ $category->id}}" {{ $post->category_id == $category->id ? 'selected'  : '' }}> {{ $category->name }}</option>
						@endforeach
					</select>
					
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-5">
				 <textarea name="body" class="form-control" rows="8" placeholder="Description">{{ Request::old('body') ? Request::old('body') : isset($post) ? $post->body : '' }} </textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-5">
				  <button type="submit" class="btn btn-primary pull-right">Update</button>
				  <input type="hidden" name="_token" value="{{ Session::token() }}">
				  <input type="hidden" name="post_id" value="{{ $post->id }}">
				</div>
			</div>
		</form>
	</div>
 @endsection