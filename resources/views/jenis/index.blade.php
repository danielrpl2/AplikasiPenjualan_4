@extends('layout.layout')
@section('content')
<h4>Halaman Jenis</h4>
<button type="button" class="btn btn-primary"><a href="/jenis/tambah" class="text-dark">Tambah</a></button>

   <table border="1" class="table table-dark" id="table1">
  <thead>
    <tr>
      <th scope="col">Id Jenis</th>
      <th scope="col">Jenis Nama</th>
      <th scope="col">Jenis Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($jenis as $a )
    <tr>
     <td>{{ $a->id_jenis }}</td>
     <td>{{ $a->jenis_nama }}</td>
     <td>{{ $a->jenis_status }}</td>
     <td>
      <a href="jenis/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
      <a href="jenis/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
     </td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection