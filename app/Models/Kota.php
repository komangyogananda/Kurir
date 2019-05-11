<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';
    protected $fillable = ['provinsi_id', 'nama_kota'];

    public function provinsi(){
        return $this->belongsTo('App\Models\Provinsi');
    }
    public function kecamatan(){
        return $this->hasMany('App\Models\Kecamatan');
    }
}
