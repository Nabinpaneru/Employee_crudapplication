<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Image;



class EmployeeController extends Controller
{
public  function index(){
    $employees=Employee::get();

    return view('employee.list',compact('employees'));

}

public  function create(){

    return view('employee.create');

}
public function store(Request $request) {
    $request->validate([
        'name'=> 'required',
        'email'=> 'required',
        'image'=> 'required|image|mimes:jpeg,jpg,png,gif',

    ]);
   
    $employee=new Employee;
    $image=time().'.'.$request->image->extension();
    $request->image->move(public_path('employee/'),$image);
    $employee->name=$request->name;
    $employee->email=$request->email;
    $employee->address=$request->address;
    $employee->image=$image;
    $employee->save();
    return redirect()->route('employee.index')->with('success','Employee added sucessfully');
   

}
public function edit ($id){
    $employee=Employee::find($id);
    return view('employee.edit',compact('employee'));

}   

public function update(Request $request,$id){

    $employee=Employee::find($id);
    $request->validate([
        'name'=> 'required',
        'email'=> 'required',
        
    ]);
    if($request->image){
        $image=time().'.'.$request->image->extension();
        $request->image->move(public_path('employee/'),$image);
        $employee->image=$image;
    }
    $employee->name=$request->name;
    $employee->email=$request->email;
    $employee->address=$request->address;
    $employee->save();
    return redirect()->route('employee.index')->with('success','Employee updated sucessfully');
   


}public function delete($id){
    $employee=Employee::find($id);
    $old_image=$employee->image;
    unlink(public_path('employee/'.$old_image));
    $employee->delete();
    return redirect()->back()->with('success','List deleted successfully');

}
}
