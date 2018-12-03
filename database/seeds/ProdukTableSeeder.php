<?php

use Illuminate\Database\Seeder;
use App\Produk;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 5; $i++) {
        $produk1 = new Produk;
        $produk1->nama = "Parasetamol";
        $produk1->keterangan = "Obat Demam Paling Manjur";
        $produk1->harga = "10000";
        $produk1->gambar = "public/images/para.jpg";
        $produk1->save();
      }
    }
}
