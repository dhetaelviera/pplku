<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class ikan extends Model
{

 

    protected $table = 'penawaranIkan';
    protected $primaryKey = 'idPenawaran';
    protected $fillable = ['idPenawaran','tanggalPenawaran','idAgen', 'opsiIkan','jenisIkan','jumlahIkan','hargaIkan','status','totalSAW'];

    public function pemilik() {

        return  $this->belongsTo('App\User','idAgen'); 

    }
    public function tes() {

    	return	$this->belongsTo('App\jenis','opsiIkan'); 

    }

    public function nawar(){
        return $this -> belongsTo ('App\statusPenawaran','status');
    }
 

    public function ranks(){
        return $this -> belongsTo ('App\rank','idPenawaran');
    }

    public function kans(){
        return $this -> belongsTo ('App\transaksi','idTransaksi');
    }
 


    public $timestamps = false;
}