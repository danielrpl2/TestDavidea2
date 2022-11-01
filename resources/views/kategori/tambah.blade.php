@extends('layout.layout')
@section('content')
   <form action="/kategori/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Id Kategori</label>
      <input type="text" class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori">
      @error('id_kategori')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Kategori</label>
      <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori">
      @error('nama_kategori')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
 
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection