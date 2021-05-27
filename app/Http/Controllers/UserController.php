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
use File;
use App\ApplyCandidate;
use App\WorkExperience;
use App\Http\Helpers;


class UserController extends Controller
{

    public function welcome()
    {
        return view('user.home');
    }

    public function jobDetails(Request $request , $job_id){
        // dump('job here',$job_id);
        // dd();
      
        $job_details = JobRequirement::with('company')->where('unique_id',$job_id)->first();
        return view('user.job_detail',['job_details'=>$job_details]);
    }



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_posted_job = JobRequirement::with('company')->orderBy('id','DESC')->limit(6)->get();
        // dd($recent_posted_job);
        return view('user.home',['recent_posted_job'=>$recent_posted_job]);
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
        // dd($id);
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
        $com_daata = array();
        $com_daata['company_name'][] = '';
        $com_daata['start_time'] = '';
        $com_daata['end_time'] = '';
        $com_daata['company_add'] = '';
        // dd($com_daata);
        // $user_date = [
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'mobile' => $data['mobile'],
        //     'gender' => $data['gender'],
        //     'education_id' => $data['education_id'],
        //     'designation' => $data['designation'],
        //     'years' => $data['years'],
        //     'country' => $data['country'],
        //     'state' => $data['state'],
        //     'city' => $data['city'],
        //     'headline' => $data['headline'],
        //     'address' => $data['address'],
        //     'language_know' => $data['hidden-language_know'],
        //     'birth_date' => $data['birth_date'],
        // ];

        foreach($data['company_name'] as $com){
            // $com_daata['company_name'] = $com;
            array_push($com_daata['company_name'], $com);
        }
        dd($com_daata);
        foreach($data['start_time'] as $time){
            $com_daata = [
                'start_time' => $time
            ];
        }
        foreach($data['end_time'] as $time){
            $com_daata = [
                'end_time' => $time
            ];
        }
        foreach($data['company_add'] as $add){
            $com_daata = [
                'company_add' => $add
            ];
        }
        dd($com_daata);

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
        return view('user.plans',['plans'=>$plans]);
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
        $work_experience = WorkExperience::where('user_id',$user->id)->get();
        foreach($work_experience as $work){
            $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $work->start_time);
            $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $work->end_time);
            $get_diff = Helpers::getDifferntDay($to,$from);
            $work->years = (isset($get_diff['years']) && $get_diff['years'] != 0) ? round($get_diff['years']) : 0;
            $work->month = (isset($get_diff['month']) && $get_diff['month'] != 0) ? round($get_diff['month']) : 0;
            $work->days = (isset($get_diff['days']) && $get_diff['days'] != 0) ? round($get_diff['days']) : 0;
        }
        return view('user.profile',['user'=>$user,'education' => $education, 'country' => $country,'work_ex' => $work_experience]);
    }

    public function profileEdit()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        // dd($user);
        return view('user.profile_edit',['user'=>$user]);
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
        // dd($data);
        $keywords = (isset($data['keyword']) && $data['keyword'] != null) ? $data['keyword'] : null; //$data['keyword'];
        $category = (isset($data['category']) && $data['category'] != null) ? $data['category'] : null; //$data['category'];
        $location = (isset($data['location']) && $data['location'] != null) ? $data['location'] : null; //$data['location'];
       
        // dd($keywords);
        $currentDate = date('Y-m-d');

        // $get_data = JobRequirement::with('company')
        //             ->where('title','LIKE', $keywords .'%')
        //             ->where( function($query) use ($location){
        //                 $query->where('location','LIKE', '%' . $location .'%')
        //                 ->orWhere('address','LIKE', '%' . $location .'%');
        //             })
        //             ->where('job_category','LIKE','%'. $category .'%')
        //             ->where('end_time', '>=', $currentDate)
        //             ->paginate(10);
                    // ->get();

        $job_requirment = JobRequirement::where('title','LIKE', $keywords .'%')->pluck('id')->toArray();
        if($job_requirment != null){
            $job_requirment_data = JobRequirement::where('end_time', '>=', $currentDate)->whereIn('id',$job_requirment);
            if($category != null){
                $job_requirment_data = $job_requirment_data->where('job_category','LIKE','%'. $category .'%');
            }
            if($location != null){
                $job_requirment_data = $job_requirment_data->where( function($query) use ($location){
                                    $query->where('location','LIKE', '%' . $location .'%')
                                    ->orWhere('address','LIKE', '%' . $location .'%');
                                });
            }
            if($keywords != null){
                $job_requirment_data = $job_requirment_data->where('title','LIKE', $keywords .'%');
            }
            $job_requirment_data = $job_requirment_data->pluck('id')->toArray();
            // dump($job_requirment_data);
        }else{
            // $job_requirment_data = JobRequirement::where('end_time', '>=', $currentDate)->whereIn('id',$job_requirment);
            if($keywords != null){
                $company_data = Company::where('company_name','LIKE', $keywords .'%')->where('status','Active')->where('is_deleted',0)->pluck('id')->toArray();
            }
            $job_requirment_data = JobRequirement::where('end_time', '>=', $currentDate)->whereIn('company_id',$company_data);
            if($category != null){
                $job_requirment_data = $job_requirment_data->where('job_category','LIKE','%'. $category .'%');
            }
            if($location != null){
                $job_requirment_data = $job_requirment_data->where( function($query) use ($location){
                                    $query->where('location','LIKE', '%' . $location .'%')
                                    ->orWhere('address','LIKE', '%' . $location .'%');
                                });
            }
            $job_requirment_data = $job_requirment_data->pluck('id')->toArray();
            
        }
        
        $get_data = JobRequirement::with('company')->whereIn('id', $job_requirment_data)->paginate(10);
        // dd($get_data);
        return view('user.job', ['data' => $get_data]);
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

    public function applyJob($company_id, $job_id)
    {
        // dd($company_id);
        $user = Auth::user()->id;
        return view('user.job_apply_form',['user_id' => $user, 'company_id' => $company_id, 'job_id' => $job_id]);
    }

    public function applyJobForm(Request $request)
    {
        // dd($request->all());
        $this->validate($request, array(
            'resume' => 'required|mimes:doc,docx,pdf'
        ));

        $data = $request->all();
        $description = $data['description'];

        if ($request->hasFile('resume')) {
            $image = $request->file('resume');
            $fileName = time() . rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move("user/resume/", $fileName);
            $data['resume'] = $fileName;
        }
        
        $add = ApplyCandidate::create([
            'user_id' => $data['user_id'],
            'company_id' => $data['company_id'],
            'job_id' => $data['job_id'],
            'description' => $description,
            'resume' => $data['resume']
        ]);
        if ($add) {
            return redirect('user/home')->with('success', 'success!');
        } else {
            return redirect('user/home')->with('error', 'Error Accure.!!!');
        }

    }
    
}
