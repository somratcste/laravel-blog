<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

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

	public function getNewPost()
	{
		return view('admin.blog.create_post');
	}

	public function postNewPost(Request $request)
	{
		$this->validate($request , [
			'title' => 'required|max:120| unique:posts' ,
			'author' => 'required|max:80' ,
			'body' => 'required'
		]);

		$post = new Post();
		$post->title = $request['title'];
		$post->author = $request['author'];
		$post->body = $request['body'];
		$post->save();

		//Attaching Categories 
		
		return redirect()->route('admin.index')->with(['success' => 'Post Successfully Created !']);
	}


	public function editPost()
	{
		return view('admin.blog.edit_post');
	}  


}