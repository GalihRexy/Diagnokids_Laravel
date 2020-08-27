<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	if (session()->has('email')) {
    		return view('home');
    	} else {
    		return redirect()->route('login')->with('alert-info', 'Silahkan login Terlebih dahulu...');
    	}
    }
}
