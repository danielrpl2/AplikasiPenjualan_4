@extends('layout.layout')
@section('content')
<h4>Halaman Supplier</h4>

<button type="button" class="btn btn-primary"><a href="/supplier/tambah" class="text-dark">Tambah</a></button>

   <table border="1" class="table table-dark" id="table1">
  <thead>
    <tr>
      <th scope="col">Id Supplier</th>
      <th scope="col">Supplier Nama</th>
      <th scope="col">Supplier Alamat</th>
      <th scope="col">Supplier Phone</th>
      <th scope="col">Supplier Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($supplier as $a )
    <tr>
     <td>{{ $a->id_supplier }}</td>
     <td>{{ $a->supplier_nama }}</td>
     <td>{{ $a->supplier_alamat }}</td>
     <td>{{ $a->supplier_phone }}</td>
     <td>{{ $a->supplier_status }}</td>
     <td>
      <a href="supplier/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
      <a href="supplier/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
     </td>
    </tr>
    @endforeach
  </tbody>


      
@endsection