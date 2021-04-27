<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;
use App\Models\Models\Message;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function contact(){
        return view('layouts.contact');
    }

    public function store(ContactRequest $request){
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        $mailable = new ContactMessageCreated($message);
        Mail::to('hw_kribaa@esi.dz')->send($mailable);
        
        flashy('Nous vous répondrons dans les plus bref délais !');

        return redirect()->route('contact_path');
    }
}
