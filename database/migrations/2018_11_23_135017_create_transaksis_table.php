<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $namaTabel = 'tr_transaksi';
        Schema::create($namaTabel, function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('produk_id');
            $table->string('total');
            $table->string('nama_penerima');
            $table->string('alamat_pengiriman');
            $table->string('nomor_telepon');
            $table->string('bukti_pembayaran');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('$namaTabel');
    }
}
