<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class DoctorController extends Controller
{
    public function add(){
        $departments = Department::latest()->get();
        $doctors = Doctor::latest()->get();
        return view('admin.doctor.add', compact('departments','doctors'));
    }

    public function doctorReg(Request $request)
    {
        $request -> validate([


                    'name' => 'required',
                    'email' => 'required|string|email|max:255|unique:doctors,email',
                    'institute' => 'required',
                    'qualification' => 'required',
                    'bmdc' => 'required',
                    'department_id' => 'required',
                    'fees' => 'required',
                    'birth' => 'required',
                    'nid' => 'required',
                    'phone' => 'required',
                    'address' => 'required',
                    'district' => 'required',
                    'avatar' =>'required|mimes:jpg,jpeg,png,gif',
                    'password' => 'required',

                ],[
                    'department_id|required' => 'Please Select Department',

                ]);

                $avatar = $request->file('avatar');
                $name_gen = hexdec(uniqid()) . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(250, 250)->save('uploads/documents/doctor/' . $name_gen);
                $img_url = 'uploads/documents/doctor/' . $name_gen;


        Doctor::insert([

                'name' => $request-> name,
                'email' => $request-> email,
                'institute' => $request-> institute,
                'qualification' => $request-> qualification,
                'bmdc' => $request-> bmdc,
                'department_id' => $request-> department_id,
                'fees' => $request-> fees,
                'birth' => $request-> birth,
                'nid' => $request-> nid,
                'phone' => $request-> phone,
                'address'=> $request-> address,
                'district' => $request-> district,
                'avatar' => $img_url,
                'password' => bcrypt($request['password']),
                'created_at' => Carbon::now()
                ]);

            return Redirect()->back();
    }
}
