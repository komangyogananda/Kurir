<?php

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

Route::get('/', function () {
    return view('table.index');
});

Route::get('/home', function(){
    return view('table.index');
});

Route::get('/table', 'show_table@index')->name('table_index');
Route::get('/table/cabang', 'show_table@cabang')->name('table_cabang');
Route::get('/table/detail_barang', 'show_table@detail_barang')->name('table_detail_barang');
Route::get('/table/jenis_pegawai', 'show_table@jenis_pegawai')->name('table_jenis_pegawai');
Route::get('/table/kategori_barang', 'show_table@kategori_barang')->name('table_kategori_barang');
Route::get('/table/kecamatan', 'show_table@kecamatan')->name('table_kecamatan');
Route::get('/table/kelurahan', 'show_table@kelurahan')->name('table_kelurahan');
Route::get('/table/kota', 'show_table@kota')->name('table_kota');
Route::get('/table/kurir', 'show_table@kurir')->name('table_kurir');
Route::get('/table/pegawai', 'show_table@pegawai')->name('table_pegawai');
Route::get('/table/penerima', 'show_table@penerima')->name('table_penerima');
Route::get('/table/pengirim', 'show_table@pengirim')->name('table_pengirim');
Route::get('/table/provinsi', 'show_table@provinsi')->name('table_provinsi');
Route::get('/table/tipe_jasa', 'show_table@tipe_jasa')->name('table_tipe_jasa');
Route::get('/table/tracking', 'show_table@tracking')->name('table_tracking');
Route::get('/table/transaksi', 'show_table@transaksi')->name('table_transaksi');

Route::get('/table/kurir/hapus/{id}', 'delete@kurir');
Route::get('/table/pegawai/hapus/{id}', 'delete@pegawai');
Route::get('/table/transaksi/hapus/{id}', 'delete@transaksi');
Route::get('/table/tracking/hapus/{id}', 'delete@tracking');

Route::get('/transaksi/baru', 'create@formTransaksi');

Route::get('/tracking', 'tracking@tracking')->name('tracking');

Route::get('/tracking/{id}', 'tracking@getTracking')->name('form_hasil_tracking');
Route::post('/tracking', 'tracking@redirectTracking')->name('redirect_tracking');

Route::get('/kota/get/{provinsi}', 'dependency@getKota');
Route::get('/kecamatan/get/{kota}', 'dependency@getKecamatan');
Route::get('/kelurahan/get/{kecamatan}', 'dependency@getKelurahan');
Route::get('/cabang/get/{kelurahan}', 'dependency@getCabang');

Route::post('/transaksi/baru', 'create@storeTransaksi');
Route::get('/transaksi/edit/{id}', 'create@editGet')->name('transaksi_edit');
Route::post('/transaksi/edit/{id}', 'create@editPost')->name('transaksi_edit_store');
