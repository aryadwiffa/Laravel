<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    function index()
    {
      $customer = Customer::get(['customer_id','name','address']);
      //var_dump($customer);
      return view('customer.index', compact('customer'));
    }

    function create()
    {
      //echo "telo";
      return view('customer.create');
    }

    function store(Request $request)
    {
          $data = new Customer();
          $data->customer_id = $request->txt_id;
          $data->name = $request->txt_name;
          $data->address = $request->txt_address;
          $data->save();

          return redirect('Customer');
    }
    function show($id) {
    //  return view('Customer/show',
    // ['Customer' => Customer ::where('customer_id',$id)])
    $customer = Customer::where('customer_id',$id)->get();
    return view('Customer/show',compact('customer'));
  }

    function edit($id) {
    //  return view('Customer/edit',
    //['Customer' => Custome::where('customer_id',$id)])
    $customer = Customer::where('customer_id',$id)->get();
    return view('Customer/edit',compact('customer'));
  }

    function update(Request $request, $id)
    {
      $txtid = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      echo $txtid. "<br/>".$txtName. "<br />".$txtAddress;
      customer::where('customer_id',$id)->update([
        'name'=>$txtName,
        'address'=>$txtAddress
      ]);
      return redirect('/Customer');
    }

    function destroy($id) {
      $customer = Customer::where('customer_id', $id)->first();
      $customer->delete();
      return redirect('/Customer');
    }
}
