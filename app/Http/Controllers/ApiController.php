<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    public function countries() {
        $countries = DB::table("countries")->pluck("name", "id")->all();
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
        $cities = DB::table("cities")
                ->where("state_id", $state_id)
                ->pluck("name", "id");
        return response()->json($cities);
    }

    public function checkemail(Request $request) {
        $data = $request->all();
        // dd($data);
        $email = $data['email'];
        $user = User::where('email', $email)->first();
        if ($user != null) {
            return response()->json(false);
        } else {
            return response()->json(true);
        }
    }

    public function checkmobile(Request $request) {
        $data = $request->all();
        $user_mobile = $data['mobile'];
        $user = User::where('mobile', $user_mobile)->first();
        if ($user != null) {
            return response()->json(false);
        } else {
            return response()->json(true);
        }
    }

}
