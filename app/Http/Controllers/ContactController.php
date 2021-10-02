<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('front.contact');
    }

    public function mailContactForm(Request $request)
    {

        $this->validate($request, [
      'name'     =>  'required',
      'subject'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);
        $data = [

        'name' => $request->get('name'),
        'subject' => $request->get('subject'),
        'email' => $request->get('email'),
        'message' => $request->get('message'),
        ];

        \Mail::to(env('RECIPIENT_EMAIL'))->send(new \App\Mail\ContactMail($data));

        return redirect()->back();
    }
}
