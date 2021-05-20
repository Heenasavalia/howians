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
    public function faq()
    {
        return view('frontend.faq');
    }
    public function help()
    {
        return view('frontend.help');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
    public function privacy()
    {
        return view('frontend.privacy');
    }
}
