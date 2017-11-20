<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ikan;
use App\jenis;
use Auth;
use App\transaksi;
use App\User;

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

	public function profil($id)
	{
		$prof= User::where('id',$id);
		return view('profilAgen', compact('prof'));

	}

public function updateProfil(Request $request, $id){ 

		$prof=User::find($id);

			$prof = ([
				'name' =>   $request->name,
            'email' =>   $request->email,
            'alamat' =>   $request->alamat,
            'kecamatan' =>   $request->kecamatan,
            'kabupaten' =>   $request->kabupaten,
            'provinsi' =>   $request->provinsi,
            'noTelepon' =>   $request->noTelepon,
            'rekening' =>   $request->rekening,
            'username' =>   $request->username,
            'password' =>  $request->password,
            'sebagai' =>   $request->sebagai,
				]);
 			$prof->save(); 
 
			return redirect()->back();
		 

	}

	public function view($id)
	{ 
		$tampils= ikan::where('idAgen',$id)->get() ;
		return view ('daftarPenawaran',compact('tampils'));
	}

	public function notif($id)
	{

		$tampils= transaksi::where('agen',$id)->where('status',3)->get();
		return view ('notifikasiAgen',compact('tampils'));
	}


	public function penawaran()
	{
		return view('buatPenawaran');

	} 

	public function keluar()
	{
		return view('home');

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
		$edit->status= $request->statusPenawaran;
		$edit->save(); 

		return redirect()->back();
	}

	public function terimaTransaksi($id)
	{
		$edit= transaksi::find($id);
		return view('terima',compact('edit'));
	}

	public function updateTransaksi(Request $request, $id){ 
		
		$edit=transaksi::find($id);
		$edit->status='1';
		$edit->save(); 

		return redirect()->back();
	}

	public function tolakTransaksi($id)
	{
		$edit= transaksi::find($id);
		return view('tolak',compact('edit'));
	}

	public function updateTolakTransaksi(Request $request, $id){ 
		
		$edit=transaksi::find($id);
		$edit->status='2';
		$edit->save(); 

		return redirect()->back();
	}


	



}