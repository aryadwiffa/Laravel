<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller{
    function index() {
      $employee = Employee::get(['employee_id','employee_name','employee_address','employee_phone_number']);
      return view('employee.index', compact('employee'));
    }
    function create(){
      return view('employee.create');
    }
    function store(Request $request){
          $data = new Employee();
          $data->employee_id = $request->txt_id;
          $data->employee_name = $request->txt_name;
          $data->employee_address = $request->txt_address;
          $data->employee_phone_number = $request->txt_phone;
          $data->save();
          return redirect('Employee');
    }
    function show($id) {
    $employee = Employee::where('employee_id',$id)->get();
    return view('Employee/show',compact('employee'));
  }
    function edit($id) {
    $employee = Employee::where('employee_id',$id)->get();
    return view('Employee/edit',compact('employee'));
  }
    function update(Request $request, $id){
      $txtid = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      $txtPhone = $request->input('txt_phone');
      echo $txtid. "<br/>".$txtName. "<br/>".$txtAddress. "<br/>".$txtPhone;
      employee::where('employee_id',$id)->update([
        'employee_name'=>$txtName,
        'employee_address'=>$txtAddress,
        'employee_phone_number'=>$txtPhone
      ]);
      return redirect('/Employee');
    }
    function destroy($id) {
      $employee = Employee::where('employee_id', $id)->first();
      $employee->delete();
      return redirect('/Employee');
    }
}
