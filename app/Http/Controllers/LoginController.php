<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view('Pages.Login_Register.login');
    }

    public function login(Request $request)
    {
        $request->validate(['password'=>'required|min:8'],['email'=>'required']);
        if (!Auth::attempt($request->only(['email','password'])))
        {
           return redirect() ->back() ->withErrors('Usuário ou Senha Incorretos');
        }
        return redirect('/home');
    }
}
