<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    protected $fillable = ['kecamatan_id', 'nama_kelurahan'];
    public $incrementing = false;

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan');
    }
    public function cabang(){
        return $this->hasMany('App\Models\Cabang');
    }
    public function pengirim(){
        return $this->hasMany('App\Models\Pengirim');
    }
    public function penerima(){
        return $this->hasMany('App\Models\Penerima');
    }
}
