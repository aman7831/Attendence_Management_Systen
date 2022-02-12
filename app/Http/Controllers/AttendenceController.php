<?php

namespace App\Http\Controllers;

use App\Models\attendence;

use Illuminate\Http\Request;


class AttendenceController extends Controller
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
    public function create()
    {
    $prev = attendence::where('user_id',auth()->user()->id)->first();
    if($prev){
        $prev_date = $prev->created_at->toDateString('Y-m-d');
        $date = now()->toDateString('Y-m-d');
        
        if($prev_date != $date)
        { 
            $attendence = new attendence();
            $attendence->user_id = auth()->user()->id;
            $attendence->present= 1;
            $attendence->save();
        }
    }
    else{
        $attendence = new attendence();
        $attendence->user_id = auth()->user()->id;
        $attendence->present= 1;
        $attendence->save();
    }
      return redirect('/home');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(attendence $attendence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(attendence $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(attendence $attendence)
    {
        //
    }
}
