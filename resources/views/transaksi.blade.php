@extends('layouts.app')
@section('content')


 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title> Lihat Berita </title>
   </head>
   <body style="padding:150px;">
     <div class="container">
       <h1>Daftar Transaksimu</h1>
       <br>
       <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama Produk</th>
        <th>Total</th>
        <th>Nama Penerima</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Bukti Pembayaran</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($daftar_transaksi as $transaksi)
          <tr>
            <td> {{ $transaksi->produk_id }} </td>
            <td> Rp. {{ $transaksi->total }} </td>
            <td> {{ $transaksi->nama_penerima }} </td>
            <td> {{ $transaksi->alamat_pengiriman }} </td>
            <td> {{ $transaksi->nomor_telepon }} </td>
            <td> <img class="card-img-top" src="{{ asset('storage/app/public/' . $transaksi->bukti_pembayaran) }}" alt="jhj"> </td>
            <td> {{ $transaksi->status }} </td>

          </tr>
      @endforeach
    </tbody>
  </table>



     </div>
   </body>
 </html>


@endsection
