<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tr_produk';
    protected $fillable = ['id','nama','gambar','keterangan','harga','created_at','updated_at'];
}
