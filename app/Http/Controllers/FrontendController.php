<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function job()
    {
        return view('frontend.job');
    }
}
