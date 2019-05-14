<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    use Notifiable;
    protected $table = 'pegawai';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis_pegawai_id', 'cabang_id', 'nama_pegawai', 'no_hp_pegawai', 'username', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi');
    }
    public function jenis_pegawai(){
        return $this->belongsTo('App\Models\JenisPegawai');
    }
    public function cabang(){
        return $this->belongsTo('App\Models\Cabang');
    }
}
