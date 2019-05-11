<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    protected $table = 'detail_barang';
    protected $fillable = ['kategori_barang_id', 'transaksi_id', 'deskripsi_barang', 'berat', 'tinggi', 'lebar', 'panjang'];

    public function kategori_barang(){
        return $this->belongsTo('App\Models\KategoriBarang');
    }

    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi');
    }
}
