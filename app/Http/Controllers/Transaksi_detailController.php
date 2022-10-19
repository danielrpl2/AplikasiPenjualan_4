<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TransaksiDetail;
use DB;
class Transaksi_detailController extends Controller
{
  public function index() {
    $transaksi_detail = DB::table('tbl_transaksi_detail')
    ->join('tbl_barang', 'tbl_barang.id_barang', '=', 'tbl_transaksi_detail.id_barang')
    ->where('id_transaksi_detail','id_transaksi_detail')
    ->get();
    return view('transaksi_detail.index',compact('transaksi_detail'));
  }

   public function tambah() {
    return view('transaksi_detail.tambah');
  }

  public function simpan(Request $request) 
  {
    $simpan = TransaksiDetail::create([
      'id_transaksi_detail' => $request->id_transaksi_detail,
      'id_barang' => $request->id_barang,
      'transaksi_jenis' => $request->transaksi_jenis,
      'transaksi_harga' => $request->transaksi_harga,
      'transaksi_jumlah' => $request->transaksi_jumlah,
      'transaksi_detail_status' => $request->transaksi_detail_status

    ]);
    echo $simpan->id_transaksi_detail;
    return redirect('transaksi_detail');
  }
  
  public function ubah($id)  {
    $transaksi_detail = TransaksiDetail::find($id);
    return view('transaksi_detail.ubah',compact(['transaksi_detail']));
  }

  public function update($id,  Request $request)
  {
    $transaksi_detail = TransaksiDetail::find($id);
    $transaksi_detail->update( $request->except('_token','_method'));
    return redirect('transaksi_detail');

  }

  public function hapus($id)
  {
    $hapus = TransaksiDetail::find($id);
    $hapus->delete();
    return redirect('transaksi_detail');
  }

}
