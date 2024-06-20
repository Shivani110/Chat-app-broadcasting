<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $password = Hash::make($request->password);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->save();

        return back()->with('success','You have registered successfully');
    }

    public function loginUser(Request $request){
        $user = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($user)){            
            return redirect('/');
        }else{
            return back()->with('error','Wrong credentials please try again');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/login')->with('success','Logout successfully');
    }
}
