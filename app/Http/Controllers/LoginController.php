<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('login.loginPage');
    }

    public function registrationPage()
    {
        return view('login.registrationPage');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);        

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->intended(route('loginpage'))->with("error","Login details are not valid");
    }

    public function registrationPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);  

        $data['name'] = $request['name'];
        $data['email'] = $request['email'];
        $data['password'] = Hash::make($request['password']);
        $user = User::create($data);

        if(!$user)
        {
            return redirect()->intended(route('registrationpage'))->with("error","Try again");
        }
        return redirect()->intended(route('loginpage'))->with("success","Registration successful");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('loginpage'));
    }
}
