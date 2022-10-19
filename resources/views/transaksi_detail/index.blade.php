@extends('layout.layout')
@section('content')
<h4>Halaman Transaksi Detail</h4>
<button type="button" class="btn btn-primary"><a href="/transaksi_detail/tambah" class="text-dark">Tambah</a></button>
   <table border="1" class="table table-dark" id="table1">
  <thead>
    <tr>
      <th scope="col"> Id Transaksi Detail</th>
      <th scope="col">Id Transaksi</th>
      <th scope="col">Id Barang</th>
      <th scope="col">Transaksi Jenis</th>
      <th scope="col">Transaksi Harga</th>
      <th scope="col">Transaksi Jumlah</th>
      <th scope="col">Transaksi Detail Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transaksi_detail as $a )
    <tr>
     <td>{{ $a->id_transaksi_detail }}</td>
     <td>{{ $a->id_transaksi }}</td>
     <td>{{ $a->barang_nama  }}</td>
     <td>{{ $a->transaksi_jenis }}</td>
     <td>{{ $a->transaksi_harga }}</td>
     <td>{{ $a->transaksi_jumlah }}</td>
     <td>{{ $a->transaksi_detail_status }}</td>
     <td>
      <a href="transaksi_detail/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
      <a href="transaksi_detail/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
     </td>
    </tr>
    @endforeach
  </tbody>   
@endsection