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
use App\JobRequirement;
use Illuminate\Support\Facades\Hash;
use App\Company;
use App\CandidateReview;


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
        // dd("ppppp");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd("kkkkkk");
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
        // dump($request->all());
        // $this->validate($request, [
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email|max:255|unique:users,email,'. $id,
        //     'mobile' => 'required|digits:10',
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);
        // dd($this->validate()); 
        $user = User::find($id);
        $data = $request->all();
        $user_date = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'education_id' => $data['education_id'],
            'designation' => $data['designation'],
            'years' => $data['years'],
            'country' => $data['country'],
            'state' => $data['state'],
            'city' => $data['city'],
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move("user/profile_img/", $fileName);
            $user_data['profile_image'] = $fileName;
        } else {
            $user_data['profile_image'] = $user->profile_image;
        }
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $fileName = time() . rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move("user/resume/", $fileName);
            $user_data['file'] = $fileName;
        } else {
            $user_data['file'] = $user->resume;
        }
        
        $update = $user->update($user_date);
        if ($update) {
            return redirect('user/home')->with('success', 'Great, Your Profile has been updated successfully :)');
        } else {
            return redirect()->back()->with('error', 'Oops, Something went wrong.Your Profile has not been updated.');
        }
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

    public function UpdatePassword(Request $request) {
        return view('user.auth.passwords.change');
    }

    public function changePassword(Request $request) {
        $this->validate($request, [
            'current' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);
        $user = User::find(Auth::id());

        if (!Hash::check($request->current, $user->password)) {

            return redirect()->back()->with('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('user/home')->with('success', 'Great, Your password has been changed successfully :)');
    }

    public function userSearch(Request $request)
    {
        $data = $request->all();
        // dump($data);
        $keywords = $data['keyword'];
        $category = $data['category'];
        $location = $data['location'];
       
        $currentDate = date('Y-m-d');
        
        $get_data = JobRequirement::with('company')->where('title','LIKE','%'. $keywords .'%')
                                    ->where( function($query) use ($location){
                                        $query->where('location','LIKE', '%' . $location .'%')
                                        ->orWhere('address','LIKE', '%' . $location .'%');
                                    })
                                    // ->where('location','LIKE', '%' . $location .'%')
                                    ->where('job_category','LIKE','%'. $category .'%')
                                    ->where('end_time', '>', $currentDate)
                                    ->orWhere('end_time', $currentDate)
                                    ->get();
        // dd($get_data);
        return view('user.job_list', ['data' => $get_data]);
        // dd($get_data);
    }

    public function MailSendMessage($id)
    {
        $user = Auth::user();
        $user = User::with('education')->where('id',$user->id)->get();
        // dd($user);
        $com_data = Company::where('id',$id)->first();
        // dd($com_data);
        $fromEmail = $user->email;
        $fromName = $user->first_name." ".$user->last_name;

        $data = [
            'user_name' => $fromName,
            'email' => $fromEmail,
            'contact' => $user->mobile,
            'gender' => $user->gender,
            'city' => $user->city,
            'state' => $user->state,
            'country' => $user->country,
            'designation' => $user->designation,
            'years' => $user->years,
            'education' => $user->education->field

        ];
        $subject = $fromName. "Apply For A Job";
        $to = $com_data->email;
        \Mail::send('msgMailSend', $data, function($message) use ($fromEmail, $fromName, $subject, $to) {
            $message->from($fromEmail, $fromName);
            $message->to($to);
            $message->subject($subject);
        });
    }

    public function ReviewForm($companyid, $job_id)
    {
        // dd($id);
        return view('user.company_review',['company_id' => $companyid, 'job_id' => $job_id]);
    }
    public function AddReview(Request $request)
    {
        $data = $request->all();
        $rate = $data['rate'];
        $user_id = $data['user_id'];
        $company_id = $data['company_id'];
        $job_id = $data['job_id'];
        $description = $data['description'];
        $review = CandidateReview::create($data);
        if ($review) {
            return redirect('user/home')->with('success', 'success!');
        } else {
            return redirect('user/home')->with('error', 'Error Accure.!!!');
        }
    }

    public function job()
    {
        return view('user.job_display');
    }

    public function companyProfile($id)
    {
        $company = Company::find($id);
        return view('user.company',['data' => $company]);
    }
    
}
