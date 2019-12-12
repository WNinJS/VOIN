<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function tryAuth(Request $request){

    $all = $request->all();
    //get login
    $login = $all['login'];
    //get password from $all
    $pass = $all['password'];

    $result = User::where('username', $login)->count();



    $currentUser = User::where('username', $login)->get();
    echo password_hash($pass, PASSWORD_DEFAULT)."-----".$currentUser[0]['password'];
    $role = User::where('username', $login)->where('password',$pass)->get();
    //cheking if there is a user with $login and $password 

    if ($result<1)
    { 
        return $this->error404();
    }
    else if (($role[0]['id_role'] == 1) && $result==1)
    {
        $request->session()->put('login',$login);
        return redirect('/adminpanel');
    }
    else{
        return $this->error404();
    }  
  }

  public function register(Request $request){
    try{
      $user = new User();
      $user->username = $request->login;
      $user->password = password_hash($request->password, PASSWORD_DEFAULT);
      $user->email = $request->email;
      $user->name = $request->firstName;
      $user->surname = $request->secondName;
      $user->phone = $request->phoneNumber;
      $user->save();
      return redirect('/login');
    }catch(Exception $e){
      return redirect()->back();
    }

  }

  private function error404(){
    return redirect()->back()->with('error','This user does not exist!');

  }
}
