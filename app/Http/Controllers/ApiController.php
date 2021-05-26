<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Education;

class ApiController extends Controller
{
    public function education(Request $request){
        $data = $request->all();
        $education = Education::orderBy('field','ASC')->get();
        // if(isset($data['query']) && $data['query'] != null){
        //     $education = $education->where('field','LIKE','%'. $data['query'] .'%');
        // }
        // $education = $education;
        return response()->json($education);
    }

    public function categories(Request $request){
        $data = $request->all();
        $categories = Category::orderBy('name','ASC')->get();
        // if(isset($data['query']) && $data['query'] != null){
        //     $categories = $categories->where('name','LIKE','%'. $data['query'] .'%');
        // }
        // $categories = $categories->orderBy('name','ASC')->get();
        return response()->json($categories);
    }

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

    // public function categories(Request $request)
    // {
    //     // dd($request->all());
    //     $cat = $request['query'];
    //     $get = Category::where('name','LIKE',$cat.'%')->get();
    //     return response()->json($get);
    // }

    public function LocationFind(Request $request)
    {
        $all_data = [];
        $data = [];
        $location = $request['query'];
        $get_c = DB::table("countries")->where('name','LIKE',$location.'%')->pluck('name')->toArray();
        if($get_c != null){
        array_push($all_data, $get_c);
        }
        $get_s = DB::table("states")->where('name','LIKE',$location.'%')->pluck('name')->toArray();
        if($get_s != null){
        array_push($all_data, $get_s);
        }
        $get_ci = DB::table("cities")->where('name','LIKE',$location.'%')->pluck('name')->toArray();
        if($get_ci != null){
        array_push($all_data, $get_ci);
        }


        foreach($all_data as $data){
            foreach($data as $d){
                // dump($d);
                array_push($data, $d);
            }
        }
    //    dd($data);

        return response()->json($data);
    }

    public function search(Request $request)
    {
        $search = $request->get('query');
        $data = [];
        if ($search != NULL) {
            
        }
    }

}
