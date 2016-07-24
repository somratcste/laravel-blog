<?php

namespace App\Http\Controllers;
use App\ContactMessage;
use App\Post;

class AdminController extends Controller 
{
	public function getIndex()
	{
        $messages = ContactMessage::orderBy('created_at' , 'desc')->take(3)->get();
		$posts = Post::orderBy('created_at', 'desc')->take(3)->get();
		return view('admin.index' , ['posts' => $posts , 'messages' => $messages]);
	}
	
}