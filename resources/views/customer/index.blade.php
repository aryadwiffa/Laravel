kerluar gk

@foreach ($customer as $customerlist)
  {{ $customerlist->customer_id}}
  <p style="color:#red;">{{ $customerlist->name}}</p>
  <p style="color:#green;">{{ $customerlist->address}}</p>
  <br/>
  <a href="/Customer/{{ $customerlist ->customer_id}}">Show</a>
  <a href="/Customer/{{ $customerlist ->customer_id}}/edit">Edit</a>
  <form action="/Customer/{{ $customerlist ->customer_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}<button>HAPUUUS</button>
  </form>
@endforeach
 <a href="{{ ('/Customer/create') }}">Kembali<a/>
