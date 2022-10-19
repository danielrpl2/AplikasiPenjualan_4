@extends('layout.layout')
@section('content')
<form action="/transaksi/update/{{ $transaksi->id }}" method="POST">
	@csrf
  @method('put')
   <div class="form-group">
    <label for="exampleInputEmail1">Id Admin</label>
    <input type="text" class="form-control" name="id_admin" value="{{ $transaksi->id_admin }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Transaksi</label>
    <input type="date" class="form-control" name="transaksi_tanggal " value="{{ $transaksi->transaksi_tanggal }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Transaksi No Nota</label>
    <input type="text" class="form-control" name="transaksi_nonota" value="{{ $transaksi->transaksi_nonota }}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Transaksi Stataus</label>
    <input type="text" class="form-control" name="transaksi_status" value="{{ $transaksi->transaksi_status }}">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection