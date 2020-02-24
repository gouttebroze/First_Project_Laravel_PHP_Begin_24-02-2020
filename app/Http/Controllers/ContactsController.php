<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
{
   //dd(\App\Contact::create ($request->all ()));
    return view('auth.contact');
}

    public function store(Request $request)
{
    $this->validate($request, [
        'email' => 'bail|required|email',
        'message' => 'bail|required|max:500'
    ]);
    //$contact = new \App\Contact;
    //$contact->email = $request->email;
    //$contact->message = $request->message;
    //$contact->save();
    return "Votre message a bien été envoyé, nous le traiterons dans les plus bref délais, Merci !";
}
}
