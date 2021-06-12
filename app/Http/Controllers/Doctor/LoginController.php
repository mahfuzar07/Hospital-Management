<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function loginFrom()
    {
        try {
            return view('doctor.login');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function doctorLogin(Request $request)
    {
        $rules = array(
            'email'    => 'required|',
            'password' => 'required|',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            echo "Error";
            return Redirect::to('/doctor/login')
                ->withErrors($validator) //
                ->withInput($request->all());
        } else {
            $responsedata = array(
                'email'     => $request->email,
                'password'  => $request->password,
            );

            if (Auth::guard('doctor')->attempt($responsedata)) {

                return Redirect(route('doctor.dashboard'));
            } else {
                Session::flash('message', 'Email OR Password not matched');
                return Redirect::to('doctor/login');
            }
        }
    }

    // public function  logout()
    // {
    //     Auth::guard('doctor')->logout();
    //     session_destory();
    //     return redirect()->route('doctor.login');
    // }
}
