<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricingPlans;
use App\PricingPalnFeture;
use App\PricingFetures;
use App\CompanySetting;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Redirect;



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
        $today = \Carbon\Carbon::now()->toDateTimeString();

        // dd($today_date);
        $auth_company =  Auth::user();
        $setting_plan = CompanySetting::select('company_id','is_select_plan','pricing_plan_id','start_time','end_time')->where('company_id',$auth_company->id)->first();
        $Company_plans = PricingPlans::with('fetures')->where('type','company')->where('status','Active')->get();

        if(Carbon::parse($setting_plan->end_time)->gt(Carbon::now())){
            $setting_plan->status = 'Active';
        }else{
            $setting_plan->status = 'Inactive';
        }
        return view('company.plan_selection',['company_plans' => $Company_plans,'setting_plan'=> $setting_plan]);

    }

    public function PlanUpdate($plan_id){
        $today = \Carbon\Carbon::now()->toDateTimeString();
        $tomorrow = Carbon::yesterday()->toDateTimeString();
        $today_date = $date_formate = \Carbon\Carbon::parse($today)->format('Y-m-d H:i:s'); //
        $auth_company =  Auth::user();
        $setting_plan = CompanySetting::where('company_id',$auth_company->id)->update(['is_select_plan'=> 1,
            'pricing_plan_id' => $plan_id,
            'start_time'=> $today,
            'end_time'=>$tomorrow
        ]);

        return Redirect()->back()->with(['message' => 'The Message']);
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
