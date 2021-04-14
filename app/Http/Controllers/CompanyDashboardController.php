<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricingPlans;
use App\PricingPalnFeture;
use App\PricingFetures;
use App\CompanySetting;
use Illuminate\Support\Facades\Auth;


class CompanyDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('hello');
        return view('company.dashboard');
    }

    public function PlanSelection(){
        $auth_company =  Auth::user();
        $setting_plan = CompanySetting::select('company_id','is_select_plan','pricing_plan_id','start_time','end_time')->where('company_id',$auth_company->id)->first();
        // dd($auth_company);
        $Company_plans = PricingPlans::with('fetures')->where('type','company')->where('status','Active')->get();
        return view('company.plan_selection',['company_plans' => $Company_plans,'plan_setting'=> $setting_plan]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
