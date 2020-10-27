<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageWasReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
       $message = request()->validate([
           'name' => 'required',
           'email' => 'required|email',
           'subject' => 'required',
           'content' => 'required|min:3',
       ],[
           'name.required' => 'I need your name'
       ]);

       event(new MessageWasReceived($message));
       return back()->with('status','We received your message, we will answer you in less than 24 hours');
    }
}
