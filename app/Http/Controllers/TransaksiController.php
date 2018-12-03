<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $daftar_transaksi = \App\Transaksi::all();
       return view("transaksi", ["daftar_transaksi" =>
       $daftar_transaksi]);
     }

     public function lihat()
     {
       $daftar_transaksi = \App\Transaksi::all();
       return view("admin/transaksi_admin", ["daftar_transaksi" =>
       $daftar_transaksi]);
     }

     public function hapus($id)
     {
         $transaksi = Transaksi::find($id);
         $transaksi->status = "Pesanan Ditolak";
         $pesan = "Mohon Maaf Pesanan Anda Ditolak";
         $nohp =  $transaksi->nomor_telepon;
         $url = "https://api.whatsapp.com/send?phone=".$nohp."&text=".$pesan." %20%20%20 -- Terima Kasih (Asri, Admin 1) --";
         echo "<script>window.open('".$url."', '_blank')</script>";
         $transaksi->save();
         $daftar_transaksi = \App\Transaksi::all();
         return view("admin/transaksi_admin", ["daftar_transaksi" =>
         $daftar_transaksi]);
     }

     public function konfirmasi($id)
     {
         $transaksi = Transaksi::find($id);
         $nohp =  $transaksi->nomor_telepon;
         $transaksi->status = "Pesanan Sudah Di Konfirmasi dan Sedang Dikirim";
         $url = "https://api.whatsapp.com/send?phone=".$nohp."&text=".$transaksi->status." %20%20%20 -- Terima Kasih (Asri, Admin 1) --";
         echo "<script>window.open('".$url."', '_blank')</script>";
         $transaksi->save();
         $daftar_transaksi = \App\Transaksi::all();
         return view("admin/transaksi_admin", ["daftar_transaksi" =>
         $daftar_transaksi]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $file = $request->file('gambar')->store('gambar');
      Transaksi::create([
        'user_id'       => '1',
        'produk_id'     => $request->nampro,
        'total' => $request->harga_produk,
        'nama_penerima' => $request->nama_penerima,
        'alamat_pengiriman' => $request->alamat_penerima,
        'nomor_telepon' => '62'.$request->nomor_telepon,
        'bukti_pembayaran' => $file,
        'status' => 'Belum Dikonfirmasi'
      ]);

      $daftar_transaksi = \App\Transaksi::all();
      return view("transaksi", ["daftar_transaksi" =>
      $daftar_transaksi]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
