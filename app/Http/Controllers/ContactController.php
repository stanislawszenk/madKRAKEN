<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function create(){
        return view('contact/contact');
    }
public function store(ContactFormRequest $request)
{

    \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ),
 function($message)
    {
        $message->from('contact@madkraken-esc.com');
        $message->to('contact@madkraken-esc.com', 'Admin')->subject('madKRAKEN Contact');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

}
}
