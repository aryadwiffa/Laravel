<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{
    function index()
    {
      $supplier = Supplier::get
      (['supplier_id',
      'supplier_name',
      'supplier_address']);
      //var_dump($supplier);
      return view
      ('supplier.index', compact('supplier'));
    }
    function create() {
      return view('supplier.create');
    }
    function store(Request $request)
    { $data = new Supplier();
      $data->supplier_id = $request->txt_id;
      $data->supplier_name = $request->txt_name;
      $data->supplier_address = $request->txt_address;
      $data->save();
      return redirect('Supplier');
    }
}
