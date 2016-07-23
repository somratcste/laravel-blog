@extends('layouts.admin_master')

@section('content')
 	<div class="row">
 		<div class="col-md-12">
 		@include('includes.info-box')
			<div class="post">
				<div class="header">
					<form action="{{ route('admin.blog.category.create') }}" method="post" class="form-inline">
						<div class="form-group">
							<label for="exampleInputName2">Category Name</label>
							<input type="text" class="form-control" id="exampleInputName2" name="name" id="name" placeholder="category name">
						</div>
						<button type="submit" class="btn btn-primary">Create Category</button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">

					</form>
				</div>
				<?php $i=1; ?>
				@foreach ($categories as $category)
				<?php $i++; ?>
					<div class="post_body">
					<h4>{{ $category->name }}</h4>
					<a data-toggle="modal" data-target="#editCategory<?php echo $i ; ?>" href="">Edit</a> | 
					<a data-toggle="modal" data-target="#deleteCategory<?php echo $i ; ?>" class="delete" href="">Delete</a>
					</div>


					<!-- Edit Modal -->
					<div class="modal fade" id="editCategory<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
					      </div>
					      <div class="modal-body">
					      		<form action="{{ route('admin.blog.category.update') }}" method="post" class="form-inline">
					       		<input type="text" class="form-control" id="exampleInputName2" name="name" id="name" value="{{ $category->name }}">
					       		<input type="hidden" name="_token" value="{{Session::token()}}">
					       		<input type="hidden" name="category_id" value="{{ $category->id}}">

					       		
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>
					      </form>
					    </div>
					  </div>
					</div>
					<!--End Edit Modal -->

					<!-- Delete Modal -->
					<div class="modal fade" id="deleteCategory<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
					      </div>
					      <div class="modal-body">
					      		<form action="{{ route('admin.blog.category.delete') }}" method="get" class="form-inline">
					       		Do you want to delete this ?
					       		<input type="hidden" name="category_id" value="{{ $category->id}}">		
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


				@endforeach
			</div>
			<section>
			<nav>
				<ul class="pager">
				  	@if($categories->currentPage() !== 1)
				    	<li class="previous"><a href="{{ $categories->previousPageUrl() }}"><span aria-hidden="true">&larr;</span> Older</a></li>
				    @endif
				    @if($categories->currentPage() !== $categories->lastPage() && $categories->hasPages())
				    	<li class="next"><a href="{{ $categories->nextPageUrl() }}">Newer <span aria-hidden="true">&rarr;</span></a></li>
				    @endif
				</ul>
			</nav>
			</section>
		</div>
 	</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		var _token = "{{ Session::token() }}"
	</script>
	<script type="text/javascript" src="{{ asset('src/js/categories.js') }}"></script>
@endsection