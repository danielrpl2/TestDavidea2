@extends('layout.layout')
@section('content')
<form action="/postingan/update/{{$postingan->id}}" method="POST">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Id postingan</label>
    <input type="text" class="form-control" name="id_post" value="{{$postingan->id_post}}
">
      @error('id_post')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
<div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul',$postingan->judul) }}
">
      @error('judul')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
<div class="form-group">
    <label for="exampleInputEmail1">Isi</label>
    <input type="text" class="form-control" name="isi" value="{{$postingan->isi}}
">
      @error('isi')
      <div class="valid-feedback">{{ $message }}</div>
      @enderror
<div class="form-group">
    <label for="exampleInputEmail1">Tgl Post</label>
    <input type="date" class="form-control" name="tgl_post" value="{{$postingan->tgl_post}}
">
      @error('tgl_post')
      <div class="valid-feedback">{{ $message }}</div>
      @enderror
  <button type="submit" class="btn btn-primary mb-4">Submit</button>
</form>


@endsection