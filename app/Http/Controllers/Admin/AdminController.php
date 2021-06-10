<?php

namespace App\Http\Controllers\Admin;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $users = User::where('role_id',2)->count();
        $doctors = Doctor::where('status',1)->count();
        return view('admin.dashboard',compact('users','doctors'));
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function alluser()
    {
        $users = User::latest()->get();
        return view('admin.alluser',compact('users'));
    }
    public function deleteu($user_id)
    {

        User::find($user_id)->delete();
        Toastr::success('User successfuly Deleted');
        return Redirect()->back();
    }
}
