<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Contact;
use Illuminate\Support\Facades\Mail;
use Laracasts\Flash\Flash;

class ContactController extends Controller {

    public function getContact()
    {

        return view('contact');
    }

    public function saveContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        Mail::send(
            'contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('kingsoulpower@gmail.com');
            }
        );

        Flash::success('Votre mail a été envoyé avec succès, nous vous répondrons sous peu !');
        return redirect(route('contact'));
    }
}