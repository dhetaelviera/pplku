<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ikan;
use Auth;


use Carbon\Carbon;
/**
* 
*/
class controllerAgen extends Controller
{
	

	public function home()
	{
		return view('dashboardAgen');

	}

	public function profil()
	{
		$prof= users::where('id','=',$id)->get();
		return view('profilAgen', compact('prof'));

	}

	public function notif()
	{
		return view('notifikasiAgen');

	}

	public function penawaran()
	{
		return view('buatPenawaran');

	}

	public function daftarPenawaran()
	{
		return view('daftarPenawaran');

	}

	public function keluar()
	{
		return view('home');

	}

	public function view()
	{
		$id=Auth::user()->id;;
		$agen=ikan::
		$tampil= ikan::findOrFail('idAgen',$id);		
		return view('daftarPenawaran',compact('tampil'));
	}



	public function insertPenawaran(Request $request)
	{
		
		$insert = ([
			'tanggalPenawaran' => $request->tanggalPenawaran,
			'idAgen' => $request->agen,
			'opsiIkan' => $request->opsiIkan,
			'jenisIkan' => $request->jenisIkan,
			'jumlahIkan' => $request->jumlahIkan,
			'hargaIkan' => $request->hargaIkan,
			'statusPenawaran' => $request->statusPenawaran
			]);
		ikan::create($insert);
		return redirect('/buatPenawaran'); 
	}

	public function editPenawaran($id){
		$edit= ikan::find($id);
  		return view('daftarPenawaranUbah',compact('edit'));
	}

	public function updatePenawaran(Request $request, $id){ 
		
		$edit=ikan::find($id);
		$edit->statusPenawaran= $request->statusPenawaran;
		$edit->save(); 

		return redirect()->back;
  

	}

	

	

	



}