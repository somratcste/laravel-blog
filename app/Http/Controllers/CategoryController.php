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

	public function postCreateCategory(Request $request)
	{
		$this->validate($request , [
			'name' => 'required|unique:categories'
		]);
		$category = new Category();
		$category->name = $request['name'];
		if($category->save())
		{
			return redirect()->route('admin.blog.categories')->with(['success' => 'Category Created Successfully ! ']);
		}
		return redirect()->route('admin.blog.categories')->with(['success' => 'Category Created Successfully ! ']);
	}

	public function categoryUpdate(Request $request) 
	{
		$this->validate($request , [
			'name' => 'required|max:120' ,
		]);

		$post = Category::find($request['category_id']);
		$post->name = $request['name'];
		$post->update();
		return redirect()->route('admin.blog.categories')->with(['success' => 'Category Updated Successfully ! ']);

	}
}