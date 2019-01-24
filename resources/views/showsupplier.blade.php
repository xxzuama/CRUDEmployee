
@foreach ($supplier as $supplierlist)
  {{$supplierlist->supplier_id}}
  {{$supplierlist->supplier_name}}
  {{$supplierlist->supplier_address}}

<a href="{{$supplierlist->supplier_id}}supplieredit">edit</a>
<br />
@endforeach
<a href="{{url('supplier')}}">kembali</a>
