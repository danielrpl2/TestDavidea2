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
    $request->validate([
      'id_post' => 'required',
      'judul' => 'required|min:20|max:50',
      'isi' => 'required',
      'tgl_post' => 'required',
  ], [
    'id_post.required' => 'ID Tidak Boleh Kosong!!',
    'judul.required' => 'Judul Tidak Boleh Kosong!!',
    'isi.required' => 'Isi Tidak Boleh Kosong!!',
    'tgl_post.required' => 'Tgl Tidak Boleh Kosong!!'
  ]);
  
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
    $request->validate([
      'id_post' => 'required',
      'judul' => 'required|min:20|max:50',
      'isi' => 'required',
      'tgl_post' => 'required',
  ]);
  
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
