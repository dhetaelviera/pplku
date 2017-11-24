<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     
    protected $fillable = [
        'id','name', 'email','alamat','kecamatan','kabupaten','provinsi','noTelepon','rekening','username', 'password','sebagai',
    ];
 
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ikans() {

    return  $this->hasMany('app\ikan');
    }
//ini buat pengusaha
    public function transactions() {

    return  $this->hasMany('App\transaksi');
    }
//ini buat agen
    public function agens() {

    return  $this->hasMany('App\transaksi');
    }

    public function lev() {
        return $this-> belongsTo('App\level','sebagai');
    }

}
