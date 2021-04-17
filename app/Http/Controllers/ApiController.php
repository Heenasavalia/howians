<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
    }

    public function countries() {
        $countries = DB::table('countries')->pluck("name", "id")->all();
        return response()->json($countries);
    }

    public function states(Request $request) {
        $country = $request->all()['country'];
        $country_id = DB::table("countries")->where('name', $country)->pluck("id");
        $states = DB::table("states")
                ->where("country_id", $country_id);
        if (isset($request->all()['register']) && $request->all()['register'] == true) {
            $states = $states->where('status', 'Active');
        }
        $states = $states->pluck("name", "id");
        return response()->json($states);
    }

    public function cities(Request $request) {
        $state = $request->all()['state'];

        $state_id = DB::table("states")->where('name', $state)->pluck("id");
        //dd($state);
        $cities = DB::table("cities")
                ->where("state_id", $state_id)
                ->pluck("name", "id");
        return response()->json($cities);
    }
}
