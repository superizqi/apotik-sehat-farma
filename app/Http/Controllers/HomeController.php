<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
      // $daftar_produk = \App\Produk::all();
      // return view("welcome", ["daftar_produk" =>
      // $daftar_produk]);
        return view('home');
    }
}
