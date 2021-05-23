<?php

namespace App\Http\Controllers;

use App\User;
use App\CompanyGallery;
use App\CandidateReview;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyDataController extends Controller
{

    public function PhotoGallery(){
        // dd("yes");
        return view('company.image_gallery');
    }

    public function image_cut(request $request) {
        $company_id = $request->input("company_id");
//        dd($company_id);
        $file_data = $request->input('image');
        @list($type, $file_data) = explode(';', $file_data);
        @list(, $file_data) = explode(',', $file_data);
        $image = base64_decode($file_data);
        $f = finfo_open();
        $mime_type = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);
        $file_type = explode("/", $mime_type);
        $file_name = time() . rand(11111, 99999) . "." . $file_type[1]; //generating unique file name;
//        $file_name = time() . rand(11111, 99999) . '.png'; //generating unique file name;
//        dd($file_type);
        if ($file_data != "") { // storing image in storage/app/public Folder
            //Business
            $data["company_id"] = $company_id;
            $data["image"] = $file_name;
            //dd($data);
            $c_image = CompanyGallery::create($data);
            // dd($data);
            if ($c_image) {
//                if (env('APP_ENV') == "live" || env('APP_ENV') == null) {
//                    $p = Storage::disk('s3')->put('business_gallery/' . $file_name, $image, 'public');
//                }
                $path = public_path('company_gallery/' . $file_name);
                file_put_contents($path, $image);
                return "success";
            } else {
                return "error";
            }
        }
    }
    public function image_crop_gallary(request $request) {
        $company_Gallery = CompanyGallery::where("company_id", $request['company_id'])
            ->orderBy("created_at", "DESC")
            ->get();
//        dd($Business_Gallery);
        return response()->json($company_Gallery);
//        return view('client.business.image_crop',['business_id'=>$business_id]);
    }



    public function WatchReview(){
        return view('company.review');
    }
    public function GetAllReview(Request $request){
        $id = $request->all()['company_id'];
        $all_review = CandidateReview::with('user','job')->where('company_id', $id)->get();

        return Datatables::of($all_review)->make(true);
    }

    public function ReviewDetails($id){
//        dd($id);
        $review_details = CandidateReview::with('user','job')->where('id', $id)->first();
        return view('company.review_details',['review_details'=>$review_details]);
    }

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

    public function image_delete($id){
        $company_image=CompanyGallery::find($id);
        // dd($company_image);
        $company_image->delete();
        return response()->json(true);
    }
    
}
