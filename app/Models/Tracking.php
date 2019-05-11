<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = 'tracking';
    protected $fillable = ['cabang_id', 'transaksi_id', 'kurir_id'];

    public function cabang(){
        return $this->belongsTo('App\Models\Cabang');
    }
    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi');
    }
    public function kurir(){
        return $this->belongsTo('App\Models\Kurir');
    }
}
