<?php

namespace App\Http\Controllers;

class PostController extends Controller 
{
	public function getBlogIndex()
	{
		return view('frontend.blog.index');
	}

	public function getSinglePost($post_id , $end = 'frontend')
	{
		return view($end . 'blog.single');
	}

	public function getPosts()
	{
		return view('admin.posts');
	}

	public function createNewPost()
	{
		return view('admin.blog.create_post');
	}

	public function editPost()
	{
		return view('admin.blog.edit_post');
	}


}