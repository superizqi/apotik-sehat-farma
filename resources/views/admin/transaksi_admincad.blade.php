@extends('admin.app')
@section('content')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Daftar Transaksi </title>
  </head>
  <body>
   <table class="table table-hover">
   <thead>
     <tr>
       <th>No</th>
       <th>Nama Produk</th>
       <th>Nama Pemesan</th>
       <th>Alamat</th>
       <th>Nomor Telepon</th>
       <th>Total Pembayaran</th>
       <th>Bukti Pembayaran</th>
       <th>Status</th>
       <th>Aksi</th>
     </tr>
   </thead>
   <tbody>
     <?php $i = 0; ?>
     @foreach($daftar_transaksi as $transaksi)
          <?php $i = $i + 1; ?>
           <tr>
           <td> <?php echo $i; ?></td>
           <td> {{ $transaksi->produk_id }}</td>
           <td> {{ $transaksi->nama_penerima }}</td>
           <td> {{ $transaksi->alamat_pengiriman }}</td>
           <td> {{ $transaksi->nomor_telepon }}</td>
           <td> Rp. {{ $transaksi->total }}</td>
           <td> <img class="card-img-top" src="{{ asset('storage/app/public/' . $transaksi->bukti_pembayaran)}}" alt="Namanya Gambar" height="200" width="42" > </td>
           <td> {{ $transaksi->status }}</td>
           <td>
           <td><?php $id = $transaksi->id; ?>
           <a onclick="return confirm('Yakin Mau Ditolak ?')" href="{{ route('hapustransaksi', $transaksi->id) }}" class="btn btn-primary btn-block" style="font-color:white;">Tolak Pesanan</a>
           <br>
           <a href="{{ route('konfirmasitransaksi', $transaksi->id) }}" class="btn btn-primary btn-block" style="font-color:white;">Konfirmasi</a>
           </td>
           <br>
           <br>
         </tr>
     @endforeach
    </tbody>
   </table>
  </body>
</html>
@endsection
