<?php

Route::get("/", "ProdukController@index");
Route::get("/beli", "ProdukController@show");
Route::get("/lihat", "ProdukController@lihat");
Route::get("/transaksi_admin", "TransaksiController@lihat");
Route::get("produk/{id?}","ProdukController@hapus")->name('hapus');
Route::get("transaksi/{id?}","TransaksiController@hapus")->name('hapustransaksi');
Route::get("transaksi/konfirmasi/{id?}","TransaksiController@konfirmasi")->name('konfirmasitransaksi');

// Route::get("/lihat_produk","ProdukController@index")

Route::resource('produk', 'ProdukController');
Route::resource('beli', 'ProdukController');
Route::resource('transaksi', 'TransaksiController');
Route::get("transaksi_user","TransaksiController@index");

Route::get('/beli', function () {
    return view("beli");
});

Route::get('/login', function () {
    return view("login");
});

Route::get('/admin', function () {
    return view("admin/menu_admin");
});

// Route::get('/lihat_produk', function () {
//     return view("admin/lihat_produk");
// });

Route::get('/tambah_produk', function () {
    return view("admin/tambah_produk");
});

// Route::get('/transaksi_admin', function () {
//     return view("admin/transaksi_admin");
// });

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/helo', function () {
//     return "Hello World";
// });

// Route::get('/transaksi', function () {
//     return view("transaksi");
// });



// Route::get("products/{id?}","ProductController@show");
// Route::get('/product/display', 'ProductController@showAll');
// Route::get('/product/save', 'ProductController@saveNew');
// Route::get("/","ProdukController@index");

// Route::get("/pintu-masuk", function(){
//   return ("Selamat datang");
// });
// Route::get("/pintu-masuk","TestController@pintuMasuk");
// Route::resource("/categories","CategoryController");
// Route::get("/ucapkan-salam" , "SalamController@beriSalam");
// Route::get("/kategori","CategoryController@index");
// Route::get("/about",function(){
//   return view("pages/about");
// });





// Route::group(["prefix" => "latihan" ], function(){
//   Route::view("layouts","child");
//   Route::get("/kategori/all","CategoryController@index");
//   Route::get("/kategori/search","CategoryController@search");
//   Route::get("/kategori/{id}/delete","CategoryController@delete");
//   Route::get("/kategori/{id}/restore","CategoryController@restore");
//   Route::get("/kategori/{id}/permanent-delete","CategoryController@permanentDelete");
// });
