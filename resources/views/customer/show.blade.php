kerluar gk

@foreach ($customer as $customerlist)
  {{ $customerlist->customer_id}}
  <p style="color:#red;">{{ $customerlist->name}}</p>
  <p style="color:#green;">{{ $customerlist->address}}</p>
  <br/>
  <a href="/Customer/{{ $customerlist ->customer_id}}">Show</a>
@endforeach
 <a href="{{ ('/Customer/') }}">Kembali<a/>
