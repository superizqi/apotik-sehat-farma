@extends('layouts.app')
@section('content')

<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Edit Berita</title>
</head>
<body style="padding: 150px;">
<div class="container">
<!-- Form Login -->
<h1>Laman Transaksi</h1>
<?php
$kodeunik = rand(100,200);
$harga = $produk->harga + $kodeunik;
// $harga = 100;
 ?>
<h3> Silahkan Transfer Sejumlah
<br>Rp. {{ $harga }}
<br>ke Rekening Jenius
<br>078928673
A.N. Apotik Sehat Farma </h3>

<form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <!-- <label for="gambar_produk">Gambar</label> -->
    <!-- <a href="#"><img class="card-img-top" src="{{ asset('storage/app/public/' . $produk->gambar)}}" alt="jhj"></a> -->
    <td name='gambar'> <img src=" {{ asset('storage/app/public/'. $produk->gambar )}}" width='300px' alt='abc'></td>
  </div>
  <div class="form-group">
    <label for="nama_produk">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama }}" disabled></input>
  </div>
  <div class="form-group">
    <label for="harga_produk">Harga Produk</label>
    <input type="hidden" class="form-control" name="nampro" value="{{ $produk->nama }}"></input>
    <input type="hidden" class="form-control" name="harga_produk" value="{{ $harga }}"></input>
    <input type="number" class="form-control" name="" value="{{ $harga }}" disabled></input>
  </div>
  <div class="form-group">
    <label for="nama_penerima">Nama Penerima</label>
    <input type="text" class="form-control" name="nama_penerima" placeholder="Nama Penerima"  rows="5"></input>
  </div>
  <div class="form-group">
    <label for="nomor_telepon">Nomor Telepon</label>
    <div class="input-group-prepend">
          <div class="input-group-text">+62</div>
          <input type="number" class="form-control" name="nomor_telepon" placeholder="Ex: 81226269692"  rows="5"></input>
    </div>

  </div>
  <div class="form-group">
    <label for="alamat_penerima">Alamat Penerima</label>
    <input type="text" class="form-control" name="alamat_penerima" placeholder="Alamat Penerima"  rows="5"></input>
  </div>
  <div class="form-group">
    <label for="berkas">Bukti Transfer</label>
    <br>
    <input type="file" name="gambar" />
  </div>
  <button type="submit" class="btn btn-success" name="btn_submit">Lanjutkan Transaksi</button>
  <br>
</form>

</div>
</body>
</html>
</html>
<br>
<br>

@endsection
