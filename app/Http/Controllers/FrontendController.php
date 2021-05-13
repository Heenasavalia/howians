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
        return view('user.job');
    }
    public function job_detail()
    {
        return view('user.job_detail_backup');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
