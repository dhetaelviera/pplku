<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class statusPenawaran extends Model
{

 

    protected $table = 'statuspenawaran';
    protected $primaryKey = 'idStatus';
    protected $fillable = ['idStatus','keteranganStatus'];

    public function stats(){
       return $this-> hasMany('App\ikan');
    }

 
    public $timestamps = false;
}