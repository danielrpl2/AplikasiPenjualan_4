   @extends('layout.layout')
@section('content')
   <form action="/admin/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" name="username">
  </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="text" class="form-control" name="password">
  </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Admin Level</label>
      <input type="text" class="form-control" name="admin_level">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Admin Nama</label>
      <input type="text" class="form-control" name="admin_nama">
  </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Admin Status</label>
      <input type="text" class="form-control" name="admin_status">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection