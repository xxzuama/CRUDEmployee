<br />
@foreach ($supplier as $supplierlist)
  {{ $supplierlist->supplier_id}}
  {{ $supplierlist->supplier_name}}
  {{ $supplierlist->supplier_address}}
  <a href="/supplier/{{ $supplierlist->supplier_id}}">show</a>

  <a href="/supplier/{{ $supplierlist->supplier_id}}/supplieredit">edit</a>

  <br />

<form action="/supplier/{{$supplierlist->supplier_id}}" method="post">
{{csrf_field ()}}
{{ method_field('DELETE')}}
<button>delete</button>
</form>
@endforeach

<a href="{{ url('Supplier/create') }}">Tambah data kuy</a>
