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
use App\Company;
use Hash;

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
        // $setting_plan = CompanySetting::select('company_id','is_select_plan','pricing_plan_id','start_time','end_time')->where('company_id',$auth_company->id)->first();
        $Company_plans = PricingPlans::with('fetures')->where('type','company')->where('status','Active')->get();

        if(Carbon::parse($auth_company->end_time)->gt(Carbon::now())){
            $auth_company->plan_status = 'Active';
        }else{
            $auth_company->plan_status = 'Inactive';
        }
        return view('company.plan_selection',['company_plans' => $Company_plans,'company'=> $auth_company]);

    }

    public function PlanUpdate($plan_id){
        $today = \Carbon\Carbon::now()->toDateTimeString();
        $tomorrow = Carbon::tomorrow()->toDateTimeString();
        $today_date = $date_formate = \Carbon\Carbon::parse($today)->format('Y-m-d H:i:s'); //
        $auth_company =  Auth::user();
        $setting_plan = $auth_company->update(['is_select_plan'=> 1,
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

    public function update_password(){
        //dd('adt se mjbur');
        return view('company.change_password');
    }
    public function changePassword(Request $request) {
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required',
            'new_confirm_password' => 'same:new_password',
        ]);
        //dd($request);
        $company = Company::find(Auth::id());
        if (!Hash::check($request->current_password, $company->password)) {
           return redirect()->back()->with('error', 'Current password does not match!');
        }
        $company->password = Hash::make($request->new_password);
        $company->save();
        return redirect('company/dashboard')->with('Success', 'Great, Your password has been changed successfully :)');
   }
}
