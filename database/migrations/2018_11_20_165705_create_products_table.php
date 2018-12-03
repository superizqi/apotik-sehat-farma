<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->string("name");
          $table->string("description");
          // $cekKolomDescription  = $table->hasColumn("description");
          // if ($cekKolomDescription) {
          //   // code...
          // }else{
          //   $table->string("description");
          // }
          $table->timestamps();
      });

      // Schema::table('products', function (Blueprint $table) {
      //     $table->increments('id');
      //     $cekKolomDescription  = $table->hasColumn("description")
      //     if ($cekKolomDescription) {
      //       // code...
      //     }else{
      //       $table->string("description");
      //     }
      //     $table->timestamps();
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
