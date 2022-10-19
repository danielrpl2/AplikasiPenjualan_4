@extends('layout.layout')
@section('content')
<form action="/transaksi_detail/update/{{ $transaksi_detail->id }}" method="POST">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id Transaksi Detail</label>
    <input type="text" class="form-control" name="id_transaksi_detail">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Id Transaksi</label>
    <input type="text" class="form-control" name="id_transaksi">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Id Barang</label>
    <input type="text" class="form-control" name="id_barang">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Transaksi Jenis</label>
    <input type="text" class="form-control" name="transaksi_jenis">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Transaksi Harga</label>
    <input type="text" class="form-control" name="transaksi_harga">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Transaksi Jumlah</label>
    <input type="text" class="form-control" name="transaksi_jumlah">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Transaksi Detail Status</label>
    <input type="text" class="form-control" name="transaksi_detail_status">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection