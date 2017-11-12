<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class ikan extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'penawaranIkan';
    protected $primaryKey = 'idPenawaran';
    protected $fillable = ['idPenawaran','tanggalPenawaran','idAgen', 'opsiIkan','jenisIkan','jumlahIkan','hargaIkan','status'];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    /**
   protected $inner_join = golekiwak('SELECT penawaranIkan.idPenawaran, penawaranIkan.tanggalPenawaran, penawaranIkan.jenisIkan, penawaranIkan.jumlahIkan, penawaranIkan.hargaIkan, statusPenawaran.Keterangan FROM penawaranIkan INNER JOIN statusPenawaran ON penawaranIkan.statusPenawaran=statusPenawaran.idStatusPenawaran');
 */
	public $timestamps = false;
    }