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


}