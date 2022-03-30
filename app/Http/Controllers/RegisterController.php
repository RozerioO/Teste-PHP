<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required','email'=>'required|Unique:App\Models\User,email','password'=>'required|min:8|max:16']);
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        Auth::attempt($request->only('email','password'));

        return redirect('/home');
    }

}
