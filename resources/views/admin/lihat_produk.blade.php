@extends('admin.app')
@section('content')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Lihat Produk </title>
  </head>
  <body class="container">
    <br>
    <h1>Lihat Produk</h1>
    <br>
    <table class="table table-hover">
 <thead>
   <tr>
     <!-- ID NAMA PRODUK NAMA PENERIMA ALAMAT NOMOR TELEPON BUKTI PEMBAYARAN STATUS -->
     <th>No</th>
     <th>Nama Produk</th>
     <th>Gambar</th>
     <th>Keterangan</th>
     <th>Harga</th>
     <th>Aksi</th>

   </tr>
 </thead>
     <tbody>
       <?php $i = 0; ?>
       @foreach($daftar_produk as $produk)
            <?php
            $i = $i + 1;
             ?>
             <tr>
             <td> <?php echo $i; ?></td>
             <td> {{ $produk->nama }} </td>
             <td> <img class="card-img-top" src="{{ asset('storage/app/public/' . $produk->gambar)}}" alt="Namanya Gambar" width="42pt" > </td>
             <td> {{ $produk->keterangan }} </td>
             <td> Rp. {{ $produk->harga }}</td>
             <td><?php $id = $produk->gambar; ?>
             <a onclick="return confirm('Yakin Mau Dihapus ?')" href="{{ route('hapus', $produk->id) }}" class="btn btn-primary btn-block" style="font-color:white;">Hapus</a></td>
           </tr>
       @endforeach
        </tbody>
    </table>
  </body>
</html>
@endsection
