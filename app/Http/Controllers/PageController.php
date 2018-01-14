<?php

namespace App\Http\Controllers;


use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use App\Mail\ContactForm;
use Mail;

class PageController extends Controller
{

	public function contact(){
		return view('contact');
	}

	public function sendContact(Request $request){

		$postData = Input::all();

		$messages = [
			'email.required' => 'email est obligatoire.',
			'name.required' => 'Le nom est obligatoire.',
			'subject.required' => 'Le sujet du mail doit contenir au moins 3 lettres.',
			'message.required' => 'Le message du mail doit contenir au moins 10 lettres.',
		];

		$rules = [
			'name'=> 'required',
			'email'=> 'required|email',
			'subject' => 'required|min:3',
			'message'=> 'required|min:10',
		];

		$validator = Validator::make($postData, $rules, $messages);

		if ($validator->fails()) {
			return redirect('contact')
			->withErrors($validator)
			->withInput();
		}else{
			Mail::to('didier.flury@wanadoo.fr')->send( new ContactForm($request) );
		}

		return view('home');
	}
}
