<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;

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
     * @return \Illuminate\View\View
     */
    public function student_index(){
        return view('student_dashboard');
    }
    public function admin_index(){
        return view('dashboard');
    }
    public function faculty_list(){
    return view('evalforms.faculty_list');
    }

}
