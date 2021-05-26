<?php

namespace App\Http\Controllers;
use App\JobRequirement;

class FrontendController extends Controller
{
    public function home()
    {
        $recent_posted_job = JobRequirement::with('company')->orderBy('id','DESC')->limit(6)->get();
        return view('welcome',['recent_posted_job'=>$recent_posted_job]);
    }

    public function landing()
    {
        return view('landing');
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
