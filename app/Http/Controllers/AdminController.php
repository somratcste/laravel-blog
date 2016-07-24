<?php

namespace App\Http\Controllers;
use App\ContactMessage;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller 
{
	public function getIndex()
	{
        $messages = ContactMessage::orderBy('created_at' , 'desc')->take(3)->get();
		$posts = Post::orderBy('created_at', 'desc')->take(3)->get();
		return view('admin.index' , ['posts' => $posts , 'messages' => $messages]);
	}

	public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::attempt(['email' => $request['email'] , 'password' => $request['password']]))
        {
            return redirect()->back()->with(['fail' => 'Invalid email or password !']);
        }

        return redirect()->route('admin.index');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('blog.index');
    }
	
}