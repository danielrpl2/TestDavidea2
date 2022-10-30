<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Postingan;
use App\Models\Komentar;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     /*untuk menampilkan data ke wbsite*/
  public function indexHome()
  {
    $kategori = DB::table('tbl_kategori')
    ->get();
    $postingan = DB::table('tbl_postingan')
    ->get();
    $komentar = DB::table('tbl_komen')
    ->get();
    return view('home',compact('kategori','postingan','komentar'));
  }
  /*end*/
   public function indexTewas()
  {
    $kategori = DB::table('tbl_kategori')
    ->get();
    $postingan = DB::table('tbl_postingan')
    ->get();
    return view('berita/tewas',compact('kategori','postingan'));
  }
    public function indexJember()
  {
    $kategori = DB::table('tbl_kategori')
    ->get();
    $postingan = DB::table('tbl_postingan')
    ->get();
    return view('berita/jember',compact('kategori','postingan'));
  }
}
