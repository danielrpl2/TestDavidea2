<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Komentar;
use DB;
class KomentarController extends Controller
{
  public function index()
  {
    $komentar = DB::table('tbl_komen')
    ->get();
    return view('komentar.index',compact('komentar'));
  }
    public function komentarpublic()
  {
    $komentar = DB::table('tbl_komen')
    ->get();
    return view('komentar.komentarpublic',compact('komentar'));
  }

  public function tambah() {
    return view('komentar.tambah');
  }

  public function simpan(Request $request)
  {
    $simpan = Komentar::create([
      'nama' => $request->nama,
      'komentar' => $request->komentar

    ]);
    return redirect('komentar');
  }

  public function ubah($id) {
    $komentar = Komentar::find($id);
    return view('komentar.ubah',compact(['komentar']));
  }
  
  public function update($id,  Request $request)
  {
    $komentar = Komentar::find($id);
    $komentar->update( $request->except('_token','_method'));
    return redirect('komentar');

  }

  public function hapus($id)
  {
    $hapus = Komentar::find($id);
    $hapus->delete();
    return redirect('komentar');
  }

}
