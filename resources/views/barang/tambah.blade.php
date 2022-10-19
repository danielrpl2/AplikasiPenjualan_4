     @extends('layout.layout')
@section('content')
   <form action="/barang/simpan" method="POST">
  @csrf
   <div class="form-group">
    <label for="exampleInputEmail1">Barang Kode</label>
    <input type="text" class="form-control" name="barang_kode">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Barang Nama</label>
    <input type="text" class="form-control" name="barang_nama">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Id Jenis</label>
     <select name="id_jenis" class="form-control">
        <option>Silahkan Pilih</option>
        @foreach ($jenis as $row)
        <option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Id Supplier</label>
    <select name="id_supplier" class="form-control">
        <option>Silahkan Pilih</option>
        @foreach ($supplier as $row)
        <option value="{{$row->id_supplier}}">{{$row->supplier_nama}}</option>
        @endforeach
    </select>

  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Harga Jual</label>
    <input type="text" class="form-control" name="harga_jual">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Barang Status</label>
    <input type="text" class="form-control" name="barang_status">
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection