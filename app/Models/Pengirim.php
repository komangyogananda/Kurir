<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
{
    protected $table = 'pengirim';
    protected $fillable = [
        'kelurahan_id',
        'transaksi_id',
        'nama_pengirim',
        'alamat_pengirim',
        'no_hp_pengirim',
    ];

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan');
    }

    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi');
    }
}
