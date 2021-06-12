<?php

namespace App\Http\Controllers\User;

use App\Department;
use App\Doctor;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users = User::where('role_id',2)->count();
        $doctors = Doctor::where('status',1)->count();
        $departments = Department::latest()->get();
        return view('user.dashboard', compact('users','doctors','departments'));
    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
