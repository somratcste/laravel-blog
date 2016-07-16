<?php

namespace App\Http\Controllers;

class ContactMessageController extends Controller
{
	public function getControllerIndex()
	{
		return view('frontend.other.contact');
	}
}