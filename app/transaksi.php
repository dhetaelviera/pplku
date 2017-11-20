<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class transaksi extends Model
{

 

    protected $table = 'transaksi';
    protected $primaryKey = 'idTransaksi';
    protected $fillable = ['idTransaksi','tanggal','penawaran','agen', 'pengusaha','status'];

//ini buat pengusaha
    public function orang(){
        return $this->belongsTo('App\User','pengusaha');
    }

    //ini buat agen

    public function dari(){
        return $this-> belongsTo('App\User','agen');

    }
     public function tran(){
    	return $this-> belongsTo('App\transaksiFinal','idTransaksi');

    }
  

    public $timestamps = false;
}