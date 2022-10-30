@extends('layout.layout')
@section('content')
<form action="/postingan/update/{{$postingan->id}}" method="POST">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id postingan</label>
    <input type="text" class="form-control" name="id_post" value="{{$postingan->id_post}}
">
<div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" name="judul" value="{{$postingan->judul}}
">
<div class="form-group">
    <label for="exampleInputEmail1">Isi</label>
    <input type="text" class="form-control" name="isi" value="{{$postingan->isi}}
">
<div class="form-group">
    <label for="exampleInputEmail1">Tgl Post</label>
    <input type="date" class="form-control" name="tgl_post" value="{{$postingan->tgl_post}}
">
 
  <button type="submit" class="btn btn-primary mb-4">Submit</button>
</form>


@endsection