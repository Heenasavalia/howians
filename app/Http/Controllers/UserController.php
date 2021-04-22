<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricingPalnFeture;
use App\PricingFetures;
use App\PricingPlans;
use DB;
use Illuminate\Support\Facades\Auth;
use App\UserSettings;
use Carbon\Carbon;
use App\User;
use App\Education;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        dd($id);
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
        dd($request->all(), $id);
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

    public function DiaplayPlans()
    {
        $plans = PricingPlans::with('fetures')->where('type','student')->where('status','Active')->get();
        // dd($plans);
             return view('user.plans',['plans'=>$plans]);
        // dd($studen_plans);
    }

    public function selectPlans(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $start_date = $data['start_time'];
        $end_date = $data['end_time'];
        $start_date = date('d-m-Y', strtotime($start_date));
        $end_date = date('d-m-Y', strtotime($end_date));
        $plan = $data['id'];

        $mytime = date('H:i:s');

        $start_date = date('d-m-Y', strtotime($start_date))." ".$mytime;
        $end_date = date('d-m-Y', strtotime($end_date))." ".$mytime;
        $user_data = [
            'user_id' => $user->id,
            'plan_id' => $plan,
            'is_select_plan' => 1,
            'start_time' => $start_date,
            'end_time' => $end_date
        ];

        $start_date = \Carbon\Carbon::parse($start_date)->format('Y-m-d H:i:s');
        $end_date = \Carbon\Carbon::parse($end_date)->format('Y-m-d H:i:s');
        $user_setting = UserSettings::where('user_id',$user->id)->first();
        if(empty($user_setting)){
            UserSettings::create([
                        'user_id' => $user->id,
                        'plan_id' => $plan,
                        'is_select_plan' => 1,
                        'start_time' => $start_date,
                        'end_time' => $end_date
                    ]);
        }else{
            $user_setting->update(['is_select_plan'=> 1,
                'plan_id' => $plan,
                'start_time'=> $start_date,
                'end_time'=>$end_date
            ]);
        }
    }

    public function profile($id)
    {
        $user = User::find($id);
        $education = Education::all();
        $country = DB::table('countries')->get();
        $user_setting = UserSettings::where('user_id',$user->id)->first();
        // dd($user_setting);
        return view('user.profile',['user'=>$user,'education' => $education, 'country' => $country]);
    }
}
