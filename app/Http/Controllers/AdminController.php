<?php

namespace App\Http\Controllers;

class AdminController extends Controller 
{
	public function getIndex()
	{
		return view('admin.index');
	}

	public function getCategories()
	{
		return view('admin.categories');
	}

	public function getPosts()
	{
		return view('admin.posts');
	}
}