@extends('layout.layout')
@section('content')
   <form action="/postingan/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">id_post</label>
      <input type="text" name="id_post" class="form-control @error('id_post') is-invalid @enderror">
      @error('id_post')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">judul</label>
      <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">
      @error('judul')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">isi</label>
      <input type="text" name="isi" class="form-control @error('isi') is-invalid @enderror">
      @error('isi')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">tgl_post</label>
      <input type="date" name="tgl_post" class="form-control @error('tgl_post') is-invalid @enderror">
      @error('tgl_post')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
 
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection