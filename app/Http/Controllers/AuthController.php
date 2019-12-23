<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function login(Request $request){

    //получаем пользователья по логину из БД
    $user = User::where('username',$request->login)->first();

    //Если такого пользователя не существет, возвращаем ошибку 
    if(!$user){
      return $this->error404();
    }
    //Сверяем пароль с формы с захешированным паролем пользователя
    if(Hash::check($request->password,$user->password)){
      if($user->role === 'admin'){
        $request->session()->put('login',$request->login);
        $request->session()->put('user', $user);
        return redirect('/adminpanel');
      }else if($user->role === 'user'){
        $request->session()->put('login',$request->login);
        $request->session()->put('user', $user);
        return redirect('/');
      }

    }else{
    	return $this->error404();
    }
  }
  //Рег
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
  public function logout(Request $request){
    $request->session()->flush();
    return redirect()->back();
  }

  private function error404(){
    return redirect()->back()->with('error','There is no user with this cridetials!');

  }
}
