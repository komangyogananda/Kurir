<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $fillable = ['kota_id', 'nama_kecamatan'];

    public function kota(){
        return $this->belongsTo('App\Models\Kota');
    }
    public function kelurahan(){
        return $this->hasMany('App\Models\Kelurahan');
    }
}
