  @extends('layout.layout')
@section('content')
      <form action="/jenis/simpan" method="POST">
  @csrf
   <div class="form-group">
    <label for="exampleInputEmail1">Jenis Nama</label>
    <input type="text" class="form-control" name="jenis_nama">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Jenis Status</label>
    <input type="text" class="form-control" name="jenis_status">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection