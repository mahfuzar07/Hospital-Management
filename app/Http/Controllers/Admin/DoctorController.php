<?php

namespace App\Http\Controllers\Admin;

use Brian2694\Toastr\Facades\Toastr;
use App\Department;
use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    public function add(){
        $departments = Department::latest()->get();
        $doctors = Doctor::latest()->get();
        return view('admin.doctor.add', compact('departments','doctors'));
    }
    public function show($doc_id){
        $departments = Department::latest()->get();
        $doctors= Doctor::find($doc_id);
        return view('admin.doctor.show', compact('departments','doctors'));
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
                    'avatar' =>'mimes:jpg,jpeg,png,gif',
                    'password' => 'required',

                ],[
                    'department_id|required' => 'Please Select Department',

                ]);


            $doctor = new Doctor();
            $doctor->name=$request->name;

            $doctor->email = $request-> email;
            $doctor->institute = $request-> institute;
            $doctor->qualification =$request-> qualification;
            $doctor->bmdc = $request-> bmdc;
            $doctor->department_id = $request-> department_id;
            $doctor->fees = $request-> fees;
            $doctor->birth = $request-> birth;
            $doctor->nid = $request-> nid;
            $doctor->phone = $request-> phone;
            $doctor->address= $request-> address;
            $doctor->district = $request-> district;
            $doctor->password = bcrypt($request['password']);
            $doctor->created_at = Carbon::now();
             if ($request->hasFile('avatar'))
                {
                    $file=$request->file('avatar');
                    $extention=$file->getClientOriginalExtension();
                    $filename= time().'.'.$extention;
                    $file->move('uploads/documents/doctor', $filename);
                    $doctor->avatar=$filename;
                }
                $doctor->save();

                Toastr::success('Doctor successfuly Added','Success');
                return Redirect()->back();
    }

    public function edit($doc_id){
        $departments = Department::latest()->get();
        $doctors= Doctor::find($doc_id);
        return view('admin.doctor.edit',compact('departments','doctors'));
    }


    public function updatedoc(Request $request)
    {
            $doc_id = $request->id;
            $doctor= Doctor::find($doc_id);
            $doctor->name = $request->name;
            $doctor->email = $request-> email;
            $doctor->institute = $request-> institute;
            $doctor->qualification =$request-> qualification;
            $doctor->bmdc = $request-> bmdc;
            $doctor->department_id = $request-> department_id;
            $doctor->fees = $request-> fees;
            $doctor->birth = $request-> birth;
            $doctor->nid = $request-> nid;
            $doctor->phone = $request-> phone;
            $doctor->address= $request-> address;
            $doctor->district = $request-> district;
            $doctor->password = bcrypt($request['password']);
            $doctor->updated_at = Carbon::now();
         if ($request->hasFile('avatar'))
            {
                $destination='uploads/documents/doctor/'. $doctor->avatar;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file=$request->file('avatar');
                $extention=$file->getClientOriginalExtension();
                $filename= time().'.'.$extention;
                $file->move('uploads/documents/doctor/', $filename);
                $doctor->avatar=$filename;
            }
                $doctor->update();
                Toastr::success('Doctor Information Update Succesfully');
                return Redirect()->route('add.doctor');
    }

    public function delete($doc_id)
    {

        Doctor::find($doc_id)->delete();
        Toastr::success('Doctor successfuly Deleted to Table List');
        return Redirect()->back();
    }
}
