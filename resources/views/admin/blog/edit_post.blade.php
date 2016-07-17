@extends('layouts.admin_master')
 
 @section('content')
 	<div class="col-md-12">
 		<div class="header_info">
 			<h4>Update Post</h4>
 		</div>
 		
 		<form action="" method="" class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="post_title" placeholder="Title" value="This is a post">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Author</label>
				<div class="col-sm-5">
				  <input type="text" class="form-control" id="inputEmail3" name="author" placeholder="Author" value="Somrat">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Add Categories</label>
				<div class="col-sm-5">
					 <select class="form-control" name="categories">
						<option selected>Select Categories</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
					<button type="button" class="btn btn-primary">Add Category</button>
					<ul class="header_info">
						<li>Technolgy</li>
						<li>Food</li>
						<li>Sport</li>
					</ul>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-5">
				 <textarea name="description" class="form-control" rows="8" placeholder="Description">Computer Science And Telecommunication Engineering.</textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-5">
				  <button type="submit" class="btn btn-primary pull-right">Update</button>
				</div>
			</div>
		</form>
	</div>
 @endsection