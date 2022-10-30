<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Postingan;
use DB;
class PostinganController extends Controller
{
  public function index()
  {
    $postingan = DB::table('tbl_postingan')
    ->get();
    return view('postingan.index',compact('postingan'));
  }

  public function tambah() {
    return view('postingan.tambah');
  }

  public function simpan(Request $request)
  {
    $simpan = Postingan::create([
      'id_post' => $request->id_post,
      'judul' => $request->judul,
      'isi' => $request->isi,
      'tgl_post' => $request->tgl_post

    ]);
    return redirect('postingan');
  }

  public function ubah($id) {
    $postingan = Postingan::find($id);
    return view('postingan.ubah',compact(['postingan']));
  }
  
  public function update($id,  Request $request)
  {
    $postingan = Postingan::find($id);
    $postingan->update( $request->except('_token','_method'));
    return redirect('postingan');

  }

  public function hapus($id)
  {
    $hapus = Postingan::find($id);
    $hapus->delete();
    return redirect('postingan');
  }

}
