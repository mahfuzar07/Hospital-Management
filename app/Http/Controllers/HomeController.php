<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        $users = User::where('role_id',2)->count();
        $doctors = Doctor::where('status',1)->count();
        $departments = Department::latest()->get();
        return view('welcome', compact('users','doctors','departments'));
    }
    public function ap()
    {
        return view('pages.appoinment');
    }
    public function doctorlist()
    {
        $doctors = Doctor::where('status',1)->latest()->get();
        return view('pages.doctorlist',compact('doctors'));
    }
    public function service()
    {
        return view('pages.service');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
