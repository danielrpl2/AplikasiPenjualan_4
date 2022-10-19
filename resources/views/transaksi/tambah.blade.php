    @extends('layout.layout')
@section('content')
  <form action="/transaksi/simpan" method="POST">
  @csrf
   <div class="form-group">
    <label for="exampleInputEmail1">Id Admin</label>
    <input type="text" class="form-control" name="id_admin">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Transaksi</label>
    <input type="date" class="form-control" name="transaksi_tanggal">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Transaksi No Nota</label>
    <input type="text" class="form-control" name="transaksi_nonota">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Transaksi Stataus</label>
    <input type="text" class="form-control" name="transaksi_status">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Id Barang</label>
      <select name="id_barang">
        <option>Silahkan Pilih</option>
        @foreach($barang as $row)
        <option value="{{$row->id_barang}}">{{$row->barang_nama}}</option>
        @endforeach
      </select>
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