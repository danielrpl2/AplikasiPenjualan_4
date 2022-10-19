@extends('layout.layout')
@section('content')
<h4>Halaman Barang</h4>

<button type="button" class="btn btn-primary"><a href="/barang/tambah" class="text-dark">Tambah</a></button>
   <table border="1" class="table table-dark" id="table1">
      <thead>
          <tr>
            <th scope="col">Id Barang</th>
            <th scope="col">Barang Kode</th>
            <th scope="col">Barang Nama</th>
            <th scope="col">Id Jenis</th>
            <th scope="col">Id Supplier</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Barang Status</th>
            <th scope="col">Action</th>
          </tr>
      </thead>
<tbody>
    @foreach ($barang as $a )
      <tr>
         <td>{{ $a->id_barang }}</td>
         <td>{{ $a->barang_kode }}</td>
         <td>{{ $a->barang_nama }}</td>
         <td>{{ $a->jenis_nama }}</td>
         <td>{{ $a->supplier_nama }}</td>
         <td>{{ $a->harga_jual }}</td>
         <td>{{ $a->barang_status }}</td>
         <td>
              <a href="barang/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
              <a href="barang/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
         </td>
      </tr>
    @endforeach
  </tbody>


      
@endsection