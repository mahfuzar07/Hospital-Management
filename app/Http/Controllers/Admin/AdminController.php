<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $users = User::where('role_id',2)->count();
        return view('admin.dashboard',compact('users'));
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
}
