<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Supplier;
use DB;
class SupplierController extends Controller
{
  public function index()
  {
    $supplier = DB::table('tbl_supplier')
    ->get();
    return view('supplier.index',compact('supplier'));
  }

    public function tambah() {
    return view('supplier.tambah');
  }
  
  public function simpan(Request $request)
  {
    $simpan = Supplier::create([
      'id_supplier' => $request->id_supplier,
      'supplier_nama' => $request->supplier_nama,
      'supplier_alamat' => $request->supplier_alamat,
      'supplier_phone' => $request->supplier_phone,
      'supplier_status' => $request->supplier_status

    ]);
    echo $simpan->id_supplier;
    return redirect('supplier');
  }
  public function ubah($id)
  {
    $supplier = Supplier::find($id);
    return view('supplier.ubah',compact(['supplier']));
  }
  public function update($id,  Request $request)
  {
    $supplier = Supplier::find($id);
    $supplier->update( $request->except('_token','_method'));
    return redirect('supplier');

  }

  public function hapus($id)
  {
    $hapus = Supplier::find($id);
    $hapus->delete();
    return redirect('supplier');
  }

}
