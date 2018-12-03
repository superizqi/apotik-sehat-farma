<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
  protected $table = 'md_pembeli'; // ini sesuaikan dengan nama tabel yg di migration
  protected $fillable = ['id', 'username', 'password', 'nama', 'nomor_telepon', 'created_at', 'updated_at']; // ini sesuaikan dengan nama field yg ada di table
}
