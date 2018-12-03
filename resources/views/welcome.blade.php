<!DOCTYPE html>
@extends('layouts.app')
@section("content")
<?php
session_start();
session_destroy();
?>
<div class="row">
  <!-- /.col-lg-3 -->
  <div class="col-lg">
    <br>
    <center><h1>Daftar Produk Yang Dijual</h1></center>
    <br>
    <div class="row">
      @foreach($daftar_produk as $produk)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <!-- <?php $src = "storage/app/".$produk->gambar; ?> -->
              <a href="#"><img class="card-img-top" src="{{ asset('storage/app/public/' . $produk->gambar)}}" alt="jhj"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ $produk->nama }}</a>
                </h4>
                <h5>Rp. {{ $produk->harga }}</h5>
                <p class="card-text">{{ $produk->keterangan }}</p>
              </div>
              <div class="card-footer">
                <?php $id = $produk->gambar; ?>
                <a href="{{ route('beli.show', $produk->id) }}" class="btn btn-primary btn-block" style="font-color:white;">Beli</a>
                <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
              </div>
            </div>
          </div>
      @endforeach
      <br>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.col-lg-9 -->
</div>
{{$daftar_produk->links()}}
<!-- /.row -->
@endsection("content")
