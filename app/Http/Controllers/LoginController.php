<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
