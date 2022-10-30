<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
<title>Tragedi Halloween</title>
</head>
<body>
   <!-- UTAMA -->
    <div class="container">
   
<div class="card-group">
  <div class="card">
                 @foreach($postingan as $postingan)
    <div class="card-body">
        <h1 class="text-center">{{ $postingan->judul }}</h1>
      <h5 class="card-title"></h5>

      <p class="card-text">{{ $postingan->isi}}</p>
              @endforeach

    </div>
  </div>
</div>
<form action="/komentar/simpan" method="POST">
  @csrf
  <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" name="nama">
  </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Komentar</label>
      <input type="text" class="form-control" name="komentar">
</div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
   <!-- END UTAMA -->


   <!-- BODY -->

   
</body>
</html>