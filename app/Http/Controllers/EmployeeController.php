<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(){
        return view ('employee');
    }

    public function store(Request $request){
        $employee = new Employee();

        $employee->name=$request->input('name');
        $employee->email=$request->input('email');
        $employee->post=$request->input('post');

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extension;
            $file->move('uploads/employee',$filename);
            $employee->image=$filename;
        }
        else{
            return $request;
            $employee->image='';

        }
        $employee->save();
        return redirect('view')->with('employee',$employee);
    }
    public function display(){
        $employees=Employee::all();
        return view('viewemployee')
        ->with('employees',$employees);
    }

    public function edit($id){

        $employees=Employee::find($id);
        return view('editemployee')
        ->with('employees',$employees);
    }
    public function update(Request $request, $id){

        $employee=Employee::find($id);
        
        $employee->name=$request->input('name');
        $employee->email=$request->input('email');
        $employee->post=$request->input('post');

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extension;
            $file->move('uploads/employee',$filename);
            $employee->image=$filename;
        }
        
        $employee->save();
        return redirect('view')->with('employee',$employee);
    }

    public function delete($id){
        $employees=Employee::find($id);
        $employees->delete();

        return redirect('view')->with('employees',$employees);


        
    }
}
