@foreach ($employee as $employeelist)
  {{ $employeelist->employee_id}}
  <p>{{ $employeelist->employee_name}}</p>
  <p>{{ $employeelist->employee_address}}</p>
  <p>{{ $employeelist->employee_phone_number}}</p>
  <br/>
@endforeach
 <a href="{{ ('/Employee/') }}">Kembali<a/>
