@extends('layout.layout')
@section('content')
<h4>Halaman Admin</h4>
<button type="button" class="btn btn-primary"><a href="/admin/tambah" class="text-dark">Tambah</a></button>
   <table border="1" class="table table-dark" id="table1">
  <thead>
    <tr>
        <th scope="col">Id Admin</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Admin Level</th>
        <th scope="col">Admin Nama</th>
        <th scope="col">Admin Status</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($admin as $a )
    <tr>
       <td>{{ $a->id_admin }}</td>
       <td>{{ $a->username }}</td>
       <td>{{ $a->password }}</td>
       <td>{{ $a->admin_level }}</td>
       <td>{{ $a->admin_nama }}</td>
       <td>{{ $a->admin_status }}</td>
       <td>
        <a href="admin/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
        <a href="admin/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
       </td>
    </tr>
    @endforeach
  </tbody>    
@endsection