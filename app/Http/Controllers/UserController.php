<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricingPalnFeture;
use App\PricingFetures;
use App\PricingPlans;
use DB;

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

    public function DiaplayPlans()
    {
        $studen_plans = PricingPlans::join('pricing_paln_fetures', 'pricing_plans.id', '=', 'pricing_paln_fetures.pricing_plan_id')
             ->join('pricing_fetures', 'pricing_paln_fetures.pricing_feture_id', '=', 'pricing_fetures.id')
             ->select('pricing_plans.id as price_id','pricing_plans.name as plan_name','pricing_plans.price','pricing_plans.type','pricing_plans.status','pricing_fetures.id as feature_id','pricing_fetures.name','pricing_paln_fetures.id as price_feature_id','pricing_paln_fetures.pricing_plan_id','pricing_paln_fetures.pricing_feture_id')
             ->where('type', 'student')
             ->where('status', 'Active')
            //  ->groupBy('pricing_plans.id')
             ->get();
        dd($studen_plans);
    }
}
