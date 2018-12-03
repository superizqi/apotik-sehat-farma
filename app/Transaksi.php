<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'tr_transaksi';
    protected $fillable = ['id','user_id','produk_id','total','nama_penerima','alamat_pengiriman','nomor_telepon','bukti_pembayaran','status','created_at','updated_at'];
}
