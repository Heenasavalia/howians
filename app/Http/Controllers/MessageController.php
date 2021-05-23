<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    
    public function AllMessage()
    {
        $company_id = Auth::user()->id;
        //dump($company_id);
        // $customers = Message::where('status','Active')
        //     // ->where('client_id', $client_id)
        //     ->pluck("id");
        $company_message = Message::with('company','job','user')->where('company_id',$company_id)->get();
        // dd($company_message->job->title);
        return view('company.message.index',['company_message'=>$company_message]);
    }

    public function read_messages($id){
        $message = Message::with('company','job','user')->where('id',$id)->first();
        $message->update (['isread' => 1]);
        return view('company.message.view',['message'=>$message]);
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
        $message =Message::find($id);
        $message->delete();
        return response()->json(true);
    }
}
