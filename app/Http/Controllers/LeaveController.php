<?php

namespace App\Http\Controllers;

use App\Models\leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = leave::where('user_id',auth()->user()->id)->get();

        return view('leave.index',[
            'leaves' => $leaves,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leave.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $leave = new leave();
        $leave->user_id = auth()->user()->id;
        $leave->from = $request->from;
        $leave->to = $request->to;
        $leave->reason = $request->reason;
        $leave->save();
        
        return redirect('/leave');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(leave $leave)
    {

        $leave = leave::where('id',$leave->id)->first();

        return view('leave.edit',[
            'leave' => $leave,
        ]);   
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $leave = leave::findOrFail($id);
        $leave->from = $request->from;
        $leave->to = $request->to;
        $leave->reason = $request->reason;
        $leave->save();
        
        return redirect('/leave');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(leave $id)
    {
        $id->delete();
        
        return redirect('/leave');

    }
}
