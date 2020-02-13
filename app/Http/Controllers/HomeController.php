<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            //if admin user
            return redirect()->route('backend.dashboard');
        }
        return view('frontend.welcome');
    }
}
