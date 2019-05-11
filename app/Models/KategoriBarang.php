<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $table = 'kategori_barang';
    protected $fillable = ['nama_kategori'];

    public function detail_barang(){
        return $this->hasMany('App\Models\DetailBarang');
    }
}
