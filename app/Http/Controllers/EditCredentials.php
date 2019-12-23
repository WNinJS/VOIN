<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EditCredentials extends Controller
{
    public function editName(Request $request)
    {
    	$name = $request->session()->get('user')->username;
    	try{
    		$user = User::where('username',$name)->first();
    		$user->name = $request->new_name;
    		$user->save();
    		$changedUser = User::where('username',$request->session()->get('user')->name)->first();
    		$request->session()->get('user')->name = $changedUser->name;
			return redirect('/');

    	}catch(Exception $e){
    		return 'Error';
    	}
    }

    public function editSurname(Request $request)
    {
    	$name = $request->session()->get('user')->username;
    	try{
    		$user = User::where('username',$name)->first();
    		$user->surname = $request->new_surname;
    		$user->save();
    		$changedUser = User::where('username',$request->session()->get('user')->username)->first();
    		$request->session()->get('user')->surname = $changedUser->surname;
			return redirect('/');

    	}catch(Exception $e){
    		return 'Error';
    	}
    }

    public function editUsername(Request $request)
    {
    	$name = $request->session()->get('user')->username;
    	try{
    		$user = User::where('username',$name)->first();
    		$user->username = $request->new_username;
    		$user->save();
    		$changedUser = User::where('username',$request->new_username)->first();
    		$request->session()->get('user')->username = $changedUser->username;
			return redirect('/');

    	}catch(Exception $e){
    		return 'Error';
    	}
    }


    public function editPassword(Request $request)
    {
    	$name = $request->session()->get('user')->username;
    	try{
    		$user = User::where('username',$name)->first();
    		$user->password = password_hash($request->new_password, PASSWORD_DEFAULT);
    		$user->save();
			return redirect('/');

    	}catch(Exception $e){
    		return 'Error';
    	}
    }


    public function editNumber(Request $request)
    {
    	$name = $request->session()->get('user')->username;
    	try{
    		$user = User::where('username',$name)->first();
    		$user->phone = $request->new_phone;
    		$user->save();
    		$changedUser = User::where('username',$request->session()->get('user')->username)->first();
    		$request->session()->get('user')->phone = $changedUser->phone;
			return redirect('/');

    	}catch(Exception $e){
    		return 'Error';
    	}
    }


    public function editEmail(Request $request)
    {
    	$name = $request->session()->get('user')->username;
    	try{
    		$user = User::where('username',$name)->first();
    		$user->email = $request->new_email_;
    		$user->save();
    		$changedUser = User::where('username',$request->session()->get('user')->username)->first();
    		$request->session()->get('user')->email = $changedUser->email;
			return redirect('/');

    	}catch(Exception $e){
    		return 'Error';
    	}
    }
}
