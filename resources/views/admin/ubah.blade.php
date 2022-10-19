@extends('layout.layout')
@section('content')
<form action="/admin/update/{{$admin->id}}" method="POST">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id Admin</label>
    <input type="text" class="form-control" name="id_admin" value="{{$admin->id_admin}}
">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" value="{{$admin->username}}
">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" name="password" value="{{$admin->password}}
">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Admin Level</label>
    <input type="text" class="form-control" name="admin_level" value="{{$admin->admin_level}}
">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Admin Nama</label>
    <input type="text" class="form-control" name="admin_nama" value="{{$admin->admin_nama}}
">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Admin Status</label>
    <input type="text" class="form-control" name="admin_status" value="{{$admin->admin_status}}
">
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection