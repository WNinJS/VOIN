<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send(Request $request)
    {
        # code...
        $mail = $request->mail;
        $request->session()->put('mail', $mail);
        
        
        Mail::send('mail', ['name', 'Eduard'], function ($message){
            $message->to('voiceintercommunication@gmail.com', 'To Eduard')->subject('Email клиента');
            $message->from('voiceintercommunication@gmail.com','Eduard');
        });

        return redirect()->back();
    }
}
