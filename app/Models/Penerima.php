<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';
    protected $fillable = [
        'kelurahan_id',
        'nama_penerima',
        'alamat_penerima',
        'no_hp_penerima',
    ];

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan');
    }
    public function transaksi(){
        return $this->hasOne('App\Models\Transaksi');
    }
}
