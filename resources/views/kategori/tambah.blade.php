@extends('layout.layout')
@section('content')
   <form action="/kategori/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Id Kategori</label>
      <input type="text" class="form-control" name="id_kategori">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Kategori</label>
      <input type="text" class="form-control" name="nama_kategori">
    </div>
 
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection