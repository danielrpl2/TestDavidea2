@extends('layout.layout')
@section('content')
<form action="/kategori/update/{{$kategori->id}}" method="POST">
	@csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id Kategori</label>
    <input type="text" class="form-control" name="id_kategori" value="{{$kategori->id_kategori}}
">
<div class="form-group">
    <label for="exampleInputEmail1">Nama Kategori</label>
    <input type="text" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}
">
 
  <button type="submit" class="btn btn-primary mb-4">Submit</button>
</form>


@endsection