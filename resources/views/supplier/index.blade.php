@foreach ($supplier as $supplierlist)
  {{ $supplierlist->supplier_id}}
  <p>{{ $supplierlist->supplier_name}}</p>
  <p>{{ $supplierlist->supplier_address}}</p>
  <br/>
@endforeach
 <a href="{{ ('/Supplier/create') }}">Kembali<a/>
