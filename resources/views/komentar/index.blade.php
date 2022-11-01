@extends('layout.layout')
@section('content')
<h4>Halaman Komentar</h4>
<button type="button" class="btn btn-primary"><a href="/komentar/tambah" class="text-dark">Tambah</a></button>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Judul Artikel</th>
      <th scope="col">Komentar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($komentar as $a )
    <tr>
     <td>{{ $a->nama }}</td>
     <td>{{ $a->judul_artikel }}</td>
     <td>{{ $a->komentar }}</td>
     <td>
      <a href="komentar/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
      <a href="komentar/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
     </td>
    </tr>
    @endforeach
 
@endsection