@extends('layout.layout')
@section('content')
   <form action="/postingan/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">id_post</label>
      <input type="text" class="form-control" name="id_post">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">judul</label>
      <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">isi</label>
      <input type="text" class="form-control" name="isi">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">tgl_post</label>
      <input type="date" class="form-control" name="tgl_post">
    </div>
 
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection