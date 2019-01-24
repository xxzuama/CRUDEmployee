<br />
@foreach ($customer as $customerlist)
  {{ $customerlist->customer_id}}
  {{ $customerlist->name}}
  {{ $customerlist->address}}
  <a href="
  /Customer/{{ $customerlist->customer_id }}">show</a>
  <br />
@endforeach

<a href="{{ url('Customer/create') }}">Tambah data kuy</a>
