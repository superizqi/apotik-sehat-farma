<?php
session_start();
$_SESSION['status'] = 'login';

 ?>
<br><html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Menu Pengurus </title>
  </head>
  <body style="padding:150px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Apotik Sehat Farma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="container">
      <h1>Selamat Datang Di Halaman Menu Sebagai Admin Toko</h1>
      <br>
      <a href="tambah_produk"> <button type="button" class="btn btn-primary btn-md btn-block">Tambah Produk</button> </a>
      <br>
      <a href="lihat">  <button type="button" class="btn btn-primary btn-md btn-block">Lihat Produk</button> </a>
      <br>
      <a href="transaksi_admin"> <button type="button" class="btn btn-primary btn-md btn-block">Lihat Transaksi</button></a>
      <br>
      <a href="{{url('/')}}"> <button type="button" class="btn btn-primary btn-md btn-block">Logout</button></a>
      <!-- <form action="" method="get"> -->
        <!-- <button type="submit" class="btn btn-primary btn-md btn-block" name="btn_destroy">Log Out</button> -->
      <!-- </form> -->

    </div>
  </body>
</html>
