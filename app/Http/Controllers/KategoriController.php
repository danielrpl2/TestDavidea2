<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;
use DB;
class KategoriController extends Controller
{
  public function index()
  {
    $kategori = DB::table('tbl_kategori')
    ->get();
    return view('kategori.index',compact('kategori'));
  }
  /*untuk menampilkan data ke wbsite*/
  public function indexHome()
  {
    $kategori = DB::table('tbl_kategori')
    ->get();
    $postingan = DB::table('tbl_postingan')
    ->get();
    return view('home',compact('kategori','postingan'));
  }
  /*end*/

  public function tambah() {
    return view('kategori.tambah');
  }

  public function simpan(Request $request)
  {
    $request->validate([
      'id_kategori' => 'required',
      'nama_kategori' => 'required',
  ], [
    'id_kategori.required' => 'ID Kategori Tidak Boleh Kosong!!',
    'nama_kategori.required' => 'Nama Kategori Tidak Boleh Kosong!!'
  ]);
    $simpan = Kategori::create([
      'id_kategori' => $request->id_kategori,
      'nama_kategori' => $request->nama_kategori

    ]);
    return redirect('kategori');
  }

  public function ubah($id) {
    $kategori = Kategori::find($id);
    return view('kategori.ubah',compact(['kategori']));
  }
  
  public function update($id,  Request $request)
  {
    $request->validate([
      'id_kategori' => 'required',
      'nama_kategori' => 'required',
  ]);
    $kategori = Kategori::find($id);
    $kategori->update( $request->except('_token','_method'));
    return redirect('kategori');

  }

  public function hapus($id)
  {
    $hapus = Kategori::find($id);
    $hapus->delete();
    return redirect('kategori');
  }

}
