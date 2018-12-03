<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
class ProdukController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // return view("products.list",
    // ["products"=>\App\Product::paginate(25)]);
    // $daftar_produk = \App\Produk::all();
    $daftar_produk = \App\Produk::orderBy('id','DESC')->paginate(9);
    return view("welcome", ["daftar_produk" =>
    $daftar_produk]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function lihat()
  {
    $daftar_produk = \App\Produk::all();
    return view("admin/lihat_produk", ["daftar_produk" =>
    $daftar_produk]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  // public function hapus(Request $request)
  // {
  //
  //   $produk = Produk::findOrFail(21);
  //   $produk->delete();
  //
  //   $daftar_produk = \App\Produk::all();
  //   return view("admin/lihat_produk", ["daftar_produk" =>
  //   $daftar_produk]);
  // }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function hapus($id)
  {
      $produk = Produk::where('id',$id)->first();
      $produk = Produk::findOrFail($id);
      $produk->delete();

      $daftar_produk = \App\Produk::all();
      return view("admin/lihat_produk", ["daftar_produk" =>
      $daftar_produk]);

      // return view('admin/lihat_produk');
  }

    // public function lihat(){
    //   $daftar_produk = \App\Produk::all();
    //   return view("lihat_produk", ["daftar_produk" =>
    //   $daftar_produk]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

          Produk::create([
            'nama'       => $request->nama_produk ,
            'gambar'     => $file,
            'keterangan' => $request->keterangan,
            'harga'      => $request->harga_produk
          ]);
          $daftar_produk = \App\Produk::all();

          return view("admin/lihat_produk", ["daftar_produk" =>
          $daftar_produk]);
          // return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::where('id',$id)->first();
        return view('beli', compact('produk'));
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
