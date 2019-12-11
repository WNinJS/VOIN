<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send(Request $request)
    {
        # code...
        $all = $request->all();
        $email = $all['email'];
        $request->session()->put('mail', $email);    
        try 
        {
            $mail = Mail::send('mail', ['name', 'Eduard'], function ($message){
                $message->to('voiceintercommunication@gmail.com', 'To Eduard')->subject('Email клиента');
                $message->from('voiceintercommunication@gmail.com','Eduard');
            });

            return response()->json(['succes'=>'Your mail has successfully sent!']);

        }
        catch(Exception $e)
        {
            return $e;
        }




        return redirect()->back();
    }
}
