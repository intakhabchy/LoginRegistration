<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('homepage.dashboard', ['useHeaderBg' => true]);
    }

    public function publisher_list()
    {
        return view('homepage.publisher_list');
    }
}
