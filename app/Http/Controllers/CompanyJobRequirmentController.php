<?php

namespace App\Http\Controllers;

use App\ApplyCandidate;
use App\JobRequirement;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\DataTables;
use App\InterviewScheduling;

class CompanyJobRequirmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.job_requirement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //   dd($data);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'education' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'number_of_vacancy' => 'required',
            'minimum_salary' => 'required',
            'maximum_salary' => 'required',
            'gender' => 'required',
            //    'start_time' => 'required',
            //    'end_time' => 'required',
            'job_type' => 'required',
            'address' => 'required',
            'pincode' => 'required',
            'require_skill' => 'required',
        ]);
        //   dd($data);
        $unique_id = mt_rand(10000000, 99999999);
        $time_scedule = null;
        $data['unique_id'] = $unique_id;

        $data['company_id'] = Auth::user()->id;
        $data['gender'] = implode(",", $data['gender']);
        $data['job_type'] = implode(",", $data['job_type']);
        // $data['work_experiance_type'] = implode(",", $data['work_experiance_type']);
        $data['require_skill'] = implode(",", $data['require_skill']);
//        dd($data);
        if (isset($data['time_schedule']) && $data['time_schedule'] != null) {
            $time_scedule= $data['time_schedule'];
            unset($data['time_schedule']);
        }
        $job_create = JobRequirement::create($data);
        if($time_scedule != null){
            foreach($time_scedule as $scheduling){
                $scheduling_data['company_id'] = $job_create->company_id;
                $scheduling_data['job_requirement_id'] = $job_create->id;
                $scheduling_data['interview_time'] = date_format(date_create($scheduling),'Y-m-d H:i:s');
                // dd($scheduling_data);
            InterviewScheduling::create($scheduling_data);
            }   
        }

        if ($job_create) {
            return redirect('company/my-post-job-list')->with('success', 'Job require created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }

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
        $job = JobRequirement::find($id);
        $job->delete();
        return response()->json(true);
    }

//    public function JobList(){
    //        return view('company.joblist');
    //    }
    //
    //    public function getjoblist(Request $request){
    //        $all_job = JobCategory::all();
    //        return Datatables::of($all_job)->make(true);
    ////        return Datatables::of(JobRequirement::with('company')->where('company_id', $id)->get())->make(true);
    //    }
    //    public function view_user($id){
    //        dump("right");
    //        dd($id);
    //        return view('company.joblist');
    //    }

    public function JobUser()
    {
        return view('company.joblist');
    }

    public function getjobuserlist(Request $request)
    {
//        dump($request);
        $id = $request->all()['company_id'];
//        dump($id);
        $all_job = JobRequirement::where('company_id', $id)->get();
//        $count_candidate = ApplyCandidate::where('job_id',2)->get();
        //        dd(count($count_candidate));
        return Datatables::of($all_job)->make(true);
//        return Datatables::of(JobRequirement::with('company')->where('company_id', $id)->get())->make(true);
    }

    public function ShowUsers($id)
    {
//        dump($id);
        $get_users = ApplyCandidate::with('user', 'job')->where('job_id', $id)->get();
//        dd($get_users);
        //        dd($get_user->user->first_name);
        return view('company.apply_user_details', ['get_users' => $get_users]);
    }

    public function UserProfile($id)
    {
//        dump('wel-come user profile');
        //        dump($id);
        $user = User::with('education')->where('id', $id)->first();
//        dump($user->resume);
        //        dd();
        return view('company.user_profile', ['id' => $id, 'user' => $user]);
    }

    public function DownloadResume($resume)
    {
        $file = public_path() . "/user/resume/" . $resume;
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, 'resume.pdf', $headers);
    }

}
