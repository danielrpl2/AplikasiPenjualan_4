@extends('layout.layout')
@section('content')
<h4>Halaman Transaksi</h4>
<button type="button" class="btn btn-primary"><a href="/transaksi/tambah" class="text-dark">Tambah</a></button>
   <table border="1" class="table table-dark" id="table1">
  <thead>
    <tr>
      <th scope="col">Id Transaksi</th>
      <th scope="col">Id Admin</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">Transaksi No Nota</th>
      <th scope="col">Transaksi Stataus</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transaksi as $a )
    <tr>
       <td>{{ $a->id_transaksi }}</td>
       <td>{{ $a->id_admin }}</td>
       <td>{{ $a->transaksi_tanggal }}</td>
       <td>{{ $a->transaksi_nonota }}</td>
       <td>{{ $a->transaksi_status}}</td>
       <td>
        <a href="transaksi_detail/detail/{{ $a->id_transaksi }}" class="btn btn-success">Detail</a>
        <a href="transaksi/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
        <a href="transaksi/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
       </td>
    </tr>
    @endforeach
  </tbody>
@endsection