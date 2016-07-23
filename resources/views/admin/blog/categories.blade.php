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
				@foreach ($categories as $category)
					<div class="post_body">
					<h4>{{ $category->name }}</h4>
					<a href="">Edit</a> | <a class="delete" href="">Delete</a>
				</div>
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