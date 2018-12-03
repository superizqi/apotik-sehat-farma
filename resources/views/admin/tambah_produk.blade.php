@extends('admin.app')
@section('content')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Tambah Produk</title>
</head>
<body style="padding: 120px;">
  <div class="container">
  <!-- Form Login -->
  <h1>Selamat Datang Di Halaman Tambah Produk</h1>
  <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" >
    </div>
    <div class="form-group">
      <label for="berkas">Gambar</label>
      <br>
      <input type="file" name="gambar" />
    </div>
    <div class="form-group">
      <label for="Isi">Keterangan</label>
      <input type="text" class="form-control" name="keterangan" placeholder="keterangan" >
    </div>
    <div class="form-group">
      <label for="Isi">Harga Produk</label>
      <input type="text" class="form-control" name="harga_produk" placeholder="Ex: 10000" >
    </div>
    <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>
  </form>

  <!-- <div class="w3-panel w3-card w3-yellow" style="width:300px; margin-top:50px"><a style="text-decoration:none" href="https://s.id/Modul5EA" target="_blank"><p>Modul 5 Application Architecture</p></a></div> -->
  <!-- <div class="w3-panel w3-card w3-red" style="width:300px; margin-top:20px"><a style="text-decoration:none" href="https://drive.google.com/file/d/1OOIqDKxp4HLB9H9NwA-VAbjm4pULY_74/view" target="_blank"><p>Tes Awal Modul 5</p></a></div> -->
  <!-- <div class="w3-panel w3-card w3-blue" style="width:300px; margin-top:20px"><a style="text-decoration:none" href="https://drive.google.com/file/d/1oP5_EYWX6u5cuVZ9HuvkexgShMi8xJdz/view" target="_blank"><p>Login</p></a></div>
  <div class="w3-panel w3-card w3-green" style="width:300px; margin-top:20px"><a style="text-decoration:none" href="https://drive.google.com/file/d/1giw0osra0iKes6O2asM5Z4ZiKnl-KwQc/view" target="_blank"><p>Daftar</p></a></div> -->

  </div>
</body>
</html>
@endsection

<!-- <html>
<head>
    <title>Upload File</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Pilih file: <input type="file" name="berkas" />
        <input type="submit" name="upload" value="upload" />
    </form>
</body>
</html> -->
