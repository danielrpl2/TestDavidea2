@extends('layout.layout')
@section('content')
<form action="/komentar/update/{{$komentar->id}}" method="POST">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" name="nama" value="{{$komentar->nama}}
">  
<div class="form-group">
    <label for="exampleInputEmail1">Judul Artikel</label>
    <input type="text" class="form-control" name="judul_artikel" value="{{$komentar->judul_artikel}}
">
<div class="form-group">
    <label for="exampleInputEmail1">Komentari</label>
    <input type="text" class="form-control" name="komentar" value="{{$komentar->komentar}}
">
 
  <button type="submit" class="btn btn-primary mb-4">Submit</button>
</form>


@endsection