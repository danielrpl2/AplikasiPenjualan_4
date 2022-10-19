@extends('layout.layout')
@section('content')
<form action="/supplier/update/{{ $supplier->id }}" method="POST">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id Supplier</label>
    <input type="text" class="form-control" name="id_supplier" value="{{ $supplier->id_supplier }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Supplier Nama</label>
    <input type="text" class="form-control" name="supplier_nama" value="{{ $supplier->supplier_nama }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Supplier Alamat</label>
    <input type="text" class="form-control" name="supplier_alamat" value="{{ $supplier->supplier_alamat }}">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Supplier Phone</label>
    <input type="text" class="form-control" name="supplier_phone" value="{{ $supplier->supplier_phone }}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Supplier Status</label>
    <input type="text" class="form-control" name="supplier_status" value="{{ $supplier->supplier_status }}">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection