<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'cabang_id', 
        'pengirim_id', 
        'penerima_id', 
        'kurir_id', 
        'pegawai_id', 
        'tipe_jasa_id', 
        'harga'
    ];

    public function cabang(){
        return $this->belongsTo('App\Models\Cabang');
    }
    public function tracking(){
        return $this->hasMany('App\Models\Tracking');
    }
    public function pegawai(){
        return $this->belongsTo('App\Models\Pegawai');
    }
    public function tipe_jasa(){
        return $this->belongsTo('App\Models\TipeJasa');
    }
    public function kurir(){
        return $this->belongsTo('App\Models\Kurir');
    }
    public function pengirim(){
        return $this->hasOne('App\Models\Pengirim');
    }
    public function penerima(){
        return $this->hasOne('App\Models\Penerima');
    }
    public function detail_barang(){
        return $this->hasOne('App\Models\DetailBarang');
    }
}
