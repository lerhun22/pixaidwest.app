<?php

namespace App\Http\Controllers;


use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;


class PageController extends Controller
{

	public function contact(){
		return view('contact');
	}

	public function sendContact(Request $request){

		$messages = [
			'email.required' => 'email est obligatoire.',
			'name.required' => 'Le nom est obligatoire.',
			'subject.required' => 'Le sujet du mail doit contenir au moins 3 lettres.',
			'message.required' => 'Le message du mail doit contenir au moins 10 lettres.',

		];

		$validator = Validator::make($request->all(), [
			'name'=> 'required',
			'email'=> 'required|email',
			'subject' => 'required|min:3',
			'message'=> 'required|min:10'
		], $messages);

		if ($validator->fails()) {
			return redirect('contact')
			->withErrors($validator)
			->withInput();
		}


		//$errors = $validator->errors();



	}
}
