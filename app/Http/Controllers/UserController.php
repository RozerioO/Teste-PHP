<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pages.userpage', compact('users'));
    }

    public function authenticate(Request $request)
    {
       if (!Auth::attempt($request->only(['email','password'])))
       {
           return redirect()->back()->withErrors();
       }
       return redirect('/home');
    }

    public function show(Request $id)
    {
        $users=User::find($id);
        return view('pages.edituser', compact('users'));
    }

    public function edit(Request $request, $id)
    {
        $request->validate(['name'=>'required','email'=>'required|Unique:App\Models\User,email','password'=>'required|min:8|max:16']);
        $data = $request->only('name','email','password');
        $data['password'] = Hash::make($data['password']);
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();

        return redirect('/user');
    }
    public function destroy(Request $request)
    {

        User::destroy($request -> get("id"));

        return redirect('/user');
    }


}
