<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
<h1 style="color: black;text-align: center;">Halaman Komentar</h1>
  

<div class="container">
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
  </div>


  <div class="card">
  <div class="card-body">
<table>
  <tbody border="">
    @foreach ($komentar as $a )
    <tr>
   <td> Nama : {{ $a->nama }}</td>
    <tr> 
      <tr>  
      </tr>
    </tr>
   <td> Judul Artikel : {{ $a->judul_artikel }}</td>
     <tr> 
      <tr>  
      </tr>
    </tr>
     <td>Komentar: {{ $a->komentar }}</td>
    </tr>
    @endforeach
  </tbody>
 </table>
  </div>
</div>