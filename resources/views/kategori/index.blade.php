@extends('layout.layout')
@section('content')
<h4>Halaman Kategori</h4>
<button type="button" class="btn btn-primary"><a href="/kategori/tambah" class="text-dark">Tambah</a></button>
<table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">Id Kategori</th>
        <th scope="col">Nama Kategori</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kategori as $a )
    <tr>
       <td>{{ $a->id_kategori }}</td>
       <td>{{ $a->nama_kategori }}</td>
       <td>
        <a href="kategori/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
        <a href="kategori/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
       </td>
    </tr>
    @endforeach
  </tbody>    
@endsection