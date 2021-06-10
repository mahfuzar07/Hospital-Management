<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function add(){
        $departments = Department::latest()->get();
        return view('admin.department.add',compact('departments'));
    }
    public function storedep(Request $request)
    {
        $request->validate([

            'department_name' => 'required|unique:departments,department_name'

        ]);

        Department::insert([
            'department_name' => $request->department_name,
            'created_at' => Carbon::now()
        ]);

        Toastr::success('Department Create Succesfull', 'success');


        return Redirect()->back();


    }
    public function edit($dep_id){

        $departments= Department::find($dep_id);
        return view('admin.department.edit',compact('departments'));
    }


    public function updatedep(Request $request)
    {
        $dep_id = $request->id;

        Department::find($dep_id)->update([
            'department_name' => $request->department_name,
            'updated_at' => Carbon::now()

        ]);
        Toastr::success('Department Update Succesfull');
        return Redirect()->route('add.department');
    }

    public function delete($dep_id)
    {

        Department::find($dep_id)->delete();
        Toastr::success('Department successfuly Deleted');
        return Redirect()->back();
    }



    public function inactive($dep_id)
    {

        Department::find($dep_id)->update(['status' => 0]);
        Toastr::warning('Department Deactiveted','Deactive');
        return Redirect()->back();
    }



    public function active($dep_id)
    {

        Department::find($dep_id)->update(['status' => 1]);
        Toastr::success('Department Activeted','Active');
        return Redirect()->back();
    }
}
