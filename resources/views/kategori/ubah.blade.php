@extends('layout.layout')
@section('content')
<form action="/kategori/update/{{$kategori->id}}" method="POST">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id Kategori</label>
    <input type="text" class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori" value="{{$kategori->id_kategori}}
">
@error('id_kategori')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
<div class="form-group">
    <label for="exampleInputEmail1">Nama Kategori</label>
    <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" value="{{$kategori->nama_kategori}}
">
@error('nama_kategori')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  <button type="submit" class="btn btn-primary mb-4">Submit</button>
</form>


@endsection