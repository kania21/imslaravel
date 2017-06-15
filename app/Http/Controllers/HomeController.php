<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function Home(Request $request)
    {
    	return view('pages.home');
    }

    public function Signup(Request $request)
    {
    	return view('pages.signup');
    }

    public function Topic(Request $request)
    {
    	return view('pages.topic');
    }
    public function Unit(Request $request)
    {
        return view('pages.unit');
    }
}
