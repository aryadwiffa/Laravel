ini create
<form method="POST" action="{{ route('Employee.store') }}">
  {{csrf_field()}}
  <input type="text" name="txt_id" /><br/>
  <input type="text" name="txt_name" /><br/>
  <input type="text" name="txt_address" /><br/>
  <input type="text" name="txt_phone" /><br/>
  <input type="submit" name="sbm_save" id="sbm_save" value="save"/>
</form>
