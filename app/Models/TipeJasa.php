<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeJasa extends Model
{
    protected $table = 'tipe_jasa';
    protected $fillable = ['nama_jasa', 'harga_jasa'];

    public function pegawai(){
        return $this->hasMany('App\Models\Pegawai');
    }
}
