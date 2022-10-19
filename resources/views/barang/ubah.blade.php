@extends('layout.layout')
@section('content')
<form action="/barang/update/{{$barang->id}}" method="POST">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id Barang</label>
    <input type="text" class="form-control" name="id_barang" value="{{ $barang->id_barang }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Barang Kode</label>
    <input type="text" class="form-control" name="barang_kode" value="{{ $barang->barang_kode }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Barang Nama</label>
    <input type="text" class="form-control" name="barang_nama" value="{{ $barang->barang_nama }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Id Jenis</label>
    <input type="text" class="form-control" name="id_jenis" value="{{ $barang->id_jenis }}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Id Supplier</label>
    <input type="text" class="form-control" name="id_supplier" value="{{ $barang->id_supplier }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Harga Jual</label>
    <input type="text" class="form-control" name="harga_jual" value="{{ $barang->harga_jual }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Barang Status</label>
    <input type="text" class="form-control" name="barang_status" value="{{ $barang->barang_status }}">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection