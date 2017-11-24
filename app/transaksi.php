<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class transaksi extends Model
{

 

    protected $table = 'transaksi';
    protected $primaryKey = 'idTransaksi';
    protected $fillable = ['idTransaksi','tanggal','penawaran','agen', 'pengusaha','status','bukti'];

//ini buat pengusaha
    public function orang(){
        return $this->belongsTo('App\User','pengusaha');
    }

    //ini buat agen

    public function dari(){
        return $this-> belongsTo('App\User','agen');

    } 

    public function ikans(){
    	return $this-> belongsTo('App\ikan','idPenawaran');

    }
  

    public $timestamps = false;
}