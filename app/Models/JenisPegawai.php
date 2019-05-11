<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPegawai extends Model
{
    protected $table = 'jenis_pegawai';
    protected $fillable = ['posisi'];

    public function pegawai(){
        return $this->hasMany('App\Models\JenisPegawai');
    }
}
