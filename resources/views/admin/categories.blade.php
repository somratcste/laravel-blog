@extends('layouts.admin_master')

@section('content')
 	<div class="row">
 		<div class="col-md-12">
			<div class="post">
				<div class="header">
					<form class="form-inline">
						<div class="form-group">
							<label for="exampleInputName2">Category Name</label>
							<input type="text" class="form-control" id="exampleInputName2" name="category_name" placeholder="category name">
						</div>
						<button type="submit" class="btn btn-primary">Create Category</button>
					</form>
				</div>
				<div class="post_body">
					<h4>Technology</h4>
					<a href="">Edit</a> | <a class="delete" href="">Delete</a>
				</div>
				<div class="post_body">
					<h4>Technology</h4>
					<a href="">Edit</a> | <a class="delete" href="">Delete</a>
				</div>
				<div class="post_body">
					<h4>Technology</h4>
					<a href="">Edit</a> | <a class="delete" href="">Delete</a>
				</div>
			</div>
		</div>
 	</div>
@endsection