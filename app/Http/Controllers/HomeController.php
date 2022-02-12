<?php

namespace App\Http\Controllers;
use App\Models\attendence;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prev = attendence::where('user_id',auth()->user()->id)->first();
        if($prev){

            $prev_date = $prev->created_at->toDateString('Y-m-d');
            
            $date = now()->toDateString('Y-m-d');
            if($prev_date == $date)
            { 
                $clocked_in =$prev->created_at->toDateString('Y-m-d');
                
            }
            
        }
            return view('home',[
                'clocked_in' => $clocked_in ?? NULL,
            ]);
    }
}
