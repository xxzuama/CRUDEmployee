<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
  //buat fungsi baru untuk index
  function index(){
    $customer = Customer::get(['customer_id','name','address']);
    return view('index', compact('customer'));
  }

  function create() {
    return view('createcustomer');
  }

  public function store(Request $request){
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');

    echo $txtId."<br /> ".$txtName."<br /> ".$txtAddress;

    Customer::create([
      'customer_id' => $txtId,
      'name' => $txtName,
      'address' => $txtAddress
    ]);

    return redirect('/Customer');

  }

  public function show($id){
    echo "ember";
    echo $id;

    //select * from Customer where customer id=$id
    //$customer = Customer::where('customer_id', $id);

    //var_dump($customer);
    return view('customer/show',['customer' => Customer::where('customer_id',$id)]);
  }



}
