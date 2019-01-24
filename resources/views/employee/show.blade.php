

@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}}</br>
{{ $employeelist->employee_name}}</br>
{{ $employeelist->employee_address}}</br>
{{ $employeelist->employee_phone_number}}</br>
<a href="/Employee/{{ $employeelist->employee_id}}">show</a>
<br/>
<a href="/Employee/{{$employeelist->employee_id}}/edit">edit</a>
<form action="/Employee/{{$employeelist->employee_id}}" method="post">{{csrf_field()}}
{{method_field('DELETE')}}<button>X</button></form> 
@endforeach

<a href="{{ url('Employee/create')}}">Tambah info</a>