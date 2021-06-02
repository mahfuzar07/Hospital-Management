<?php

namespace App\Http\Controllers\Admin;

use App\Department;
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
         return Redirect()->back()->with('');


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
        return Redirect()->route('add.department');
    }

    public function delete($dep_id)
    {

        Department::find($dep_id)->delete();
        return Redirect()->back();
    }



    public function inactive($dep_id)
    {

        Department::find($dep_id)->update(['status' => 0]);
        return Redirect()->back();
    }



    public function active($dep_id)
    {

        Department::find($dep_id)->update(['status' => 1]);
        return Redirect()->back();
    }
}
