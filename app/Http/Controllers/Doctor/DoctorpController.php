<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }



    public function index(){

        return view('doctor.dashboard');
    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
