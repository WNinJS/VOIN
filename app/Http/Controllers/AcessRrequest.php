<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class AcessRrequest extends Controller
  {
    public function getAccess(Request $request, $id){ 

      $filesArray = $request->file('docs');

      $path1 = $filesArray[0]->store('files','public');
      $path2 = $filesArray[1]->store('files','public');

      $user = User::where('username', $request->session()->get('user')['username'])->first();
      $user->map = $path1;
      $user->doc = $path2;
      $user->type ='pending';
      $user->save();

      return back()->with('success', 'Data Your files has been successfully added');
    }
    
    public function verifyUser(Request $request, $id){
      $user = User::where('id', $id)->first();
      $user->type = 'verified';
      $user->save();
      
      return redirect()->back();
    }
  }
