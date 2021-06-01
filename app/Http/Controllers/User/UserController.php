<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
