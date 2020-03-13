<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store()
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        Mail::to(request('email'))
            ->queue(new Contact('Cars'));

        return redirect('/contact')->with('message', 'Email Sent Successfully! ');
    }

}
