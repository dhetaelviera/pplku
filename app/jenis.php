<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class jenis extends Model
{

 

    protected $table = 'opsiikan';
    protected $primaryKey = 'id';
    protected $fillable = ['id','opsi'];

    
    public function penawarans() {

    return  $this->hasMany('app\ikan');
    }
 

   


    public $timestamps = false;
}