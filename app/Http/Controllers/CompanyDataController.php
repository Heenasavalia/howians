<?php

namespace App\Http\Controllers;

use App\User;
use App\CandidateReview;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyDataController extends Controller
{

    public function PhotoGallery(){
        dd("yes");
        return view('company.business.image_gallery', ['business_id' => $business_id]);
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
}
