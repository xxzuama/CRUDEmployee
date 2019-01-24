
<br/>
@foreach ($supplier as $supplierlist)
  <form action="{{ route('supplier.update', $supplierlist->supplier_id)}}" method="POST">
    {{csrf_field ()}}
    {{method_field("PUT")}}
    <input type="text" name="txt_name" value="{{$supplierlist->supplier_name}}"> <br /><br />
    <input type="text" name="txt_address" value="{{$supplierlist->supplier_address}}"> <br />

@endforeach
<br />
<button type="submit" >save</button>

<a href="{{url('supplier')}}">kembali</a>    
