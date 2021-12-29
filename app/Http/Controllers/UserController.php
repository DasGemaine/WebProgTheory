<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $register = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|between:5,20'
        ]);
        

        $register['role'] = 'Member';
        $register['password'] = Hash::make($register['password']);

        User::create($register);

        $request->session()->flash('success_register', 'Registration Successfull! Please Login');

        return redirect('/login');
    }


    public function login(Request $request){
        $login = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',  
        ]);

        $tokenexpired = 60;

        $remember = $request['remember'];

        if($remember){
            if(Auth::attempt($login, true)){
                $request->session()->regenerate();
                Cookie::queue('email', $login['email'], $tokenexpired);
                Cookie::queue('password', $login['password'], $tokenexpired);
             
                return redirect()->intended('/');
            }
                return back()->with('loginError', 'login Failed!');
        }else{
            if(Auth::attempt($login)){
                $request->session()->regenerate();
                Cookie::queue('email', $login['email'], -$tokenexpired);
                Cookie::queue('password', $login['password'], -$tokenexpired);
             
                return redirect()->intended('/');
            }
                return back()->with('loginError', 'login Failed!');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}


