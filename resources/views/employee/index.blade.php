@foreach ($employee as $employeelist)
  {{ $employeelist->employee_id}}
  <p>{{ $employeelist->employee_name}}</p>
  <p>{{ $employeelist->employee_address}}</p>
  <p>{{ $employeelist->employee_phone_number}}</p>
  <br/>
  <a href="/Employee/{{ $employeelist ->employee_id}}">Show</a>
  <a href="/Employee/{{ $employeelist ->employee_id}}/edit">Edit</a>
  <form action="/Employee/{{ $employeelist ->employee_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}<button>HAPUUUS</button>
  </form>
@endforeach
 <a href="{{ ('/Employee/create') }}">Kembali<a/>
