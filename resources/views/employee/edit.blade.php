ini halaman edit
<br />
@foreach ($employee as $employeelist)
 <form action="{{ route('Employee.update', $employeelist->employee_id)}}" method="POST">
   {{ csrf_field() }}
        {{ method_field('PUT') }}
  <input type="text"
         name="txt_id"
         value="{{ $employeelist->employee_id}}"/> <br />

 <input type="text"
         name="txt_name"
         value="{{$employeelist->employee_name}}"/> <br />

 <input type="text"
         name="txt_address"
         value="{{ $employeelist->employee_address}}"/> <br />

         <input type="text"
         name="txt_phone"
         value="{{ $employeelist->employee_phone_number}}"/> <br />
@endforeach

<a href="{{url('Employee')}}"></a>

<br/>
  <input type="submit" name="sbm_save" id = "sbm_save" value="save" />
</form>
