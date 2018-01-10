<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function contact(){
		return view('contact');
	}

	public function sendContact(request $request){
		$this-> validate($request, [
			'name'=> 'required',
			'email'=> 'required|email',
			'subject' => 'required|min:3',
			'message'=> 'required|min:10'
		]);

		return redirect('/');
	}
}
