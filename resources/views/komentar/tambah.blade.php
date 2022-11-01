@extends('layout.layout')
@section('content')
   <form action="/komentar/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
      @error('nama')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Judul Artikel</label>
      <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror" name="judul_artikel">
      @error('judul_artikel')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Komentar</label>
      <input type="text" class="form-control @error('komentar') is-invalid @enderror" name="komentar">
      @error('komentar')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
</div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection