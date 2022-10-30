@extends('layout.layout')
@section('content')
   <form action="/komentar/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" name="nama">
  </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Judul Artikel</label>
      <input type="text" class="form-control" name="judul_artikel">
  </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Komentar</label>
      <input type="text" class="form-control" name="komentar">
</div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection