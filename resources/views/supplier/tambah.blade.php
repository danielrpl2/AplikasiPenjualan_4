     @extends('layout.layout')
@section('content')

   <form action="/supplier/simpan" method="POST">
  @csrf
   <div class="form-group">
    <label for="exampleInputEmail1">Supplier Nama</label>
    <input type="text" class="form-control" name="supplier_nama">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Supplier Alamat</label>
    <input type="text" class="form-control" name="supplier_alamat">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Supplier Phone</label>
    <input type="text" class="form-control" name="supplier_phone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Supplier Status</label>
    <input type="text" class="form-control" name="supplier_status">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection