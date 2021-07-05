<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Mail;

class ContactController extends Controller
{


    public function index(){
      return view('contact');
    }

    public function sendMail(request $request){
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required | email',
        'subject' => 'required',
        'message' => 'required'
      ]);

      contact::create($request->all());

      Mail::send('email',
      array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'user_message' => $request->get('message')
      ), function($message) use ($request){
        $message->from('leonard.bagiu@gmail.com');
        $message->to('leonard.bagiu@gmail.com')->subject($request->get('subject'));
      });

      return back()->with('success', 'Thank you for contacting me! I will get back as soon as I can.');

    }


}
