<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Category;

class CategoryController extends Controller 
{
	public function getCategoryIndex()
	{
		$categories = Category::orderBy('created_at' , 'desc')->paginate(5);
		return view('admin.blog.categories' , ['categories' => $categories]);
	}
}