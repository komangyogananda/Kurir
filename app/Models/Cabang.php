<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = 'cabang';
    protected $fillable = ['kelurahan_id', 'nama_cabang', 'alamat_cabang'];

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan');
    }
    public function pegawai(){
        return $this->hasMany('App\Models\Pegawai');
    }
    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi');
    }
    public function tracking(){
        return $this->hasMany('App\Models\Tracking');
    }
}
