<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class transaksiFinal extends Model
{

 

    protected $table = 'transaksiFinal';
    protected $primaryKey = 'id';
    protected $fillable = ['id','transaksi','bukti'];

    public function trans(){
       return $this-> belongsTo('App\transaksi','transaksi');
    }

 
    public $timestamps = false;
}