@extends('layout.layout')
@section('content')
<form action="/komentar/update/{{$komentar->id}}" method="POST">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$komentar->nama}}
">  
      @error('nama')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
<div class="form-group">
    <label for="exampleInputEmail1">Judul Artikel</label>
    <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror" name="judul_artikel" value="{{$komentar->judul_artikel}}
">
      @error('judul_artikel')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

<div class="form-group">
    <label for="exampleInputEmail1">Komentari</label>
    <input type="text" class="form-control @error('komentar') is-invalid @enderror" name="komentar" value="{{$komentar->komentar}}
">
      @error('komentar')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  <button type="submit" class="btn btn-primary mb-4">Submit</button>
</form>


@endsection