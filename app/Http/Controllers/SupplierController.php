<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
  //buat fungsi baru untuk index
  function index(){
    //echo "asoy geboyyy";
    $supplier = Supplier::get(['supplier_id','supplier_name','supplier_address']);

    return view('supplier',compact('supplier'));
  }

  function create() {
    return view('createsupplier');
  }

  public function store(Request $request){
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');

    Supplier::create([
      'supplier_id' => $txtId,
      'supplier_name' => $txtName,
      'supplier_address' => $txtAddress
    ]);

    return redirect('/Supplier');

  }

  public function show($id){
    //echo "aodjwado";
    $supplier = supplier::where('supplier_id', $id)->get();
    return view('showsupplier', compact('supplier'));
  }
  public function edit($id){
    $supplier = supplier::where('supplier_id',$id)->get();
    return view('editsupplier', compact('supplier'));
  }
  public function update(Request $request, $id){
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');

    supplier::where('supplier_id', $id)->update([
      'supplier_name' => $txtName,
      'supplier_address' => $txtAddress
    ]);
    return redict('/supplier');
  }
  public function destroy($id){
    $supplier = supplier::where('supplier_id', $id)->first();
    $supplier = delete();
    return redirect('/supplier');
  }
}
