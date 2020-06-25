<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function auth(Request $request){
        return view('auth');
    }
    
    public function vhod(Request $request){
        $user = User::where([['login',$request -> login], ['password',$request -> password]])->first();
        if(is_null($user)){
            return "Неверный логин или пароль";
        }
        Auth::login($user);
        return back -> withinput();
    }
    
    public function logout(){
        Auth::logout;
        return back -> withinput();
    };
}
