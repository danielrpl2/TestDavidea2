@extends('layout.layout')
@section('content')
<h4>Halaman postingan</h4>

<button type="button" class="btn btn-primary"><a href="/postingan/tambah" class="text-dark">Tambah</a></button>
    <tr>
        <th scope="col">id_post</th>
        <th scope="col">judul</th>
        <th scope="col">isi</th>
        <th scope="col">tgl_post</th>
        <th scope="col">Action</th>
    </tr>
 
  <tbody>
    @foreach ($postingan as $a )
    <tr>
       <td>{{ $a->id_post }}</td>
       <td>{{ $a->judul }}</td>
       <td>{{ $a->isi }}</td>
       <td>{{ $a->tgl_post }}</td>
       <td>
        <a href="postingan/ubah/{{ $a->id }}" class="btn btn-warning">Edit</a>
        <a href="postingan/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
       </td>
    </tr>
    @endforeach
  </tbody>    
@endsection
