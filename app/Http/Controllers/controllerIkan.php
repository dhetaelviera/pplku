<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ikan;


use Carbon\Carbon;

/**
* 
*/
class controllerIkan extends Controllers
{
	
	public function kriteria
	{
		# code...
		$tampil= ikan::paginate(7);
		 
		return view('daftarPenawaran',compact('tampil'));


	}
}