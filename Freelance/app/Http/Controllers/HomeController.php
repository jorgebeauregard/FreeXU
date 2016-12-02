<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use App\Category;
Use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function landing()
    {
        return view('landing', ['projects'=>Project::all()]);
    }
        
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['projects'=>Project::all(), 'name'=>Auth::user()->getName(), 'id'=> Auth::user()->getId()]);
    }

}
