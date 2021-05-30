<?php

namespace App\Http\Controllers;

use App\Company;
use App\PricingPlans;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers;
use App\JobRequirement;
use App\ApplyCandidate;


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
        $company = Auth::user();
        // dd($company);
        $total_add_job = JobRequirement::where('company_id', $company->id)->count();
        $all_candidate = ApplyCandidate::with(['company','job'])->where('company_id', $company->id)->get();
        $total_candidate = count($all_candidate);
        // dd($all_candidate);
        return view('company.home',['total_add_job'=>$total_add_job, 'total_candidate'=>$total_candidate,'all_candidate'=>$all_candidate]);
    }

    public function PlanSelection()
    {
        $today = \Carbon\Carbon::now()->toDateTimeString();

        // dd($today_date);
        $auth_company = Auth::user();
        $Company_plans = PricingPlans::with('fetures')->where('type', 'company')->where('status', 'Active')->get();

        if (Carbon::parse($auth_company->end_time)->gt(Carbon::now())) {
            $auth_company->plan_status = 'Active';
        } else {
            $auth_company->plan_status = 'Inactive';
        }
        return view('company.plan_selection', ['company_plans' => $Company_plans, 'company' => $auth_company]);

    }

    public function PlanUpdate($plan_id)
    {
        $today = \Carbon\Carbon::now()->toDateTimeString();
        $tomorrow = Carbon::tomorrow()->toDateTimeString();
        $today_date = $date_formate = \Carbon\Carbon::parse($today)->format('Y-m-d H:i:s'); //
        $auth_company = Auth::user();
        $setting_plan = $auth_company->update(['is_select_plan' => 1,
            'pricing_plan_id' => $plan_id,
            'start_time' => $today,
            'end_time' => $tomorrow
        ]);

        return Redirect()->back()->with('success', 'Now You Can Post A <a href="'. url('/company/job-requirement/create') .'"> Job Requirement</a>');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function update_password()
    {
        //dd('adt se mjbur');
        return view('company.change_password');
    }

    public function changePassword(Request $request)
    {
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
        return redirect('company/home')->with('Success', 'Great, Your password has been changed successfully :)');
    }

    public function registerData(Request $request)
    {
        dd($request);
        dd("yes right");
    }


    public function profile()
    {
        return view('company.profile');
    }

    public function update_profile(Request $request)
    {
        $company = Auth::user();
//        dd($company);
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'mobile' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);
        $data = $request->all();
//        dd($data);
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $data['profile_image'] = Helpers::upload_image($image, 'company_profile');
        } else {
            $data['profile_image'] = $company->profile_image;
        }
        // dd($data);

        $update = $company->update($data);
        //dd($update);
        if ($update) {
            return redirect('company/home')->with('success', 'Your profile has been updated');
        } else {
            return redirect()->back()->with('error', 'Oops, Something went wrong.Your Profile has not been updated.');
        }

    }
}
