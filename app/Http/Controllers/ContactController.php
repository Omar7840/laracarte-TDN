<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageMailMarkdown;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){

        $message = Contact::create($request->all());

        $mailabale = new  ContactMessageMailMarkdown($message);
        Mail::to('admin@gmail.com')->send($mailabale);

        Flashy::success('Message');

        return redirect()->route('home');

    }
}
