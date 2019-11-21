<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Access\Response;

class AuthController extends Controller
{
    public function tryAuth(Request $request){
        
        $all = $request->all();
        
        //get login
        $login = $all['login'];

        //get password from $all

        $pass = $all['password'];
        $result = User::where('username', $login)->where('password',$pass)->count();
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
    private function error404(){
        return redirect()->back()->with('error','This user does not exist!');

    }
}
