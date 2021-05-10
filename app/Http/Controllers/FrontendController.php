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
    public function job_detail()
    {
        return view('frontend.job_detail');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
