<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request; 
use App\ikan;
use App\User;
use App\transaksi;
use Carbon\Carbon;
use Auth;

use Illuminate\Support\Facades\DB;
/**
* 
*/
class controllerPengusaha extends Controller
{
	

	public function home()
	{
		return view('dashboardPengusaha');

	}

	public function view(Request $request)
	{

		$tampil= ikan::where('status',1)->get();
		
		return view('daftarPenawaranPengusaha',compact('tampil'));
	}

	public function agen(Request $request)
	{

		$tampil= User::where('sebagai',1)->get();
		
		return view('daftarAgen',compact('tampil'));
	}

	public function profil($id)
	{
		$prof= User::where('id',$id);
		return view('profilPengusaha');

	} 
	public function updateProfil(Request $request){ 

		$prof=Auth::user();
		$prof->name= $request->name;
		$prof->email= $request->email;
		$prof->kecamatan= $request->kecamatan;
		$prof->kabupaten= $request->kabupaten;
		$prof->provinsi= $request->provinsi;
		$prof->noTelepon= $request->noTelepon;
		$prof->rekening= $request->rekening;
  		
  		$prof->save(); 
  		return view('profilPengusaha', compact(Auth::user()->id)); 
	}



	public function keluar()
	{
		return view('home');

	}

	public function notif($id)
	{
		$tampils= transaksi::where('pengusaha',$id)->where('status',1)->get();    
		return view('notifikasiPengusaha',compact('tampils'));

	}  


	public function beliPenawaran($id){
		$beli= ikan::find($id);
		return view('beliIkan',compact('beli'));
	}

	public function updateBeli(Request $request, $id){ 

		$beli=ikan::find($id);
		$beli->status= $request->statusPenawaran;
		if ($beli->save()) {
      # code...
			$beli->save(); 

			$insert = ([
				'tanggal' => $request->tanggal,
				'penawaran' => $request->id,
				'agen' => $request->agen1,
				'pengusaha' => $request->user1,
				'status' => $request->status,

				]);
			transaksi::create($insert);

			return redirect()->back();
		}

	}

	public function lanjutkanTransaksi($id){
		$edit= transaksi::find($id);
		return view('lanjut',compact('edit'));
	}

	public function konfirmTransaksi($id){
		$edit= transaksi::find($id);
		$edit->status= '4';
		$edit->bukti=$fileName;
		$edit->save();
 
		return redirect()->to('notifikasiPengusaha');
		}

	 

	public function transaksi($id){
		$tampils= transaksi::where('pengusaha',$id)->where('status',4)->get();    
		
		return view('transaksiPengusaha',compact('tampils'));
		}
 

	public function hitung() {
		$hargas=ikan::all();
 		$hargamin=ikan::orderBy('hargaIkan','ASC')->limit(1)->value('hargaIkan');
		$prices=array();
		$result=array();
		$a=0;
		foreach ($hargas as $harga) {
			$prices[$a]=$harga->hargaIkan;
			$result[$a]=$prices[$a]/$hargamin;
			$a++;

		} 


		$jumlahs=ikan::all();
		$jumlahmax=ikan::orderBy('jumlahIkan','DESC')->limit(1)->value('jumlahIkan');
		$totals=array();
		$result2=array();
		$b=0;
		foreach ($jumlahs as $jumlah) {
			$totals[$b]=$jumlah->jumlahIkan;
			$result2[$b]=$totals[$b]/$jumlahmax;
			$b++;
		} 

		$jeniss=ikan::all();
		$jenismin=ikan::orderBy('opsiIkan','ASC')->limit(1)->value('opsiIkan');
		$types=array();
		$result3=array();
		$c=0;
		foreach ($jeniss as $jenis) {
			$types[$c]=$jenis->opsiIkan;
			$result3[$c]=$types[$c]/$jenismin;
			$c++;
		} 

		 
		$semua=ikan::all();
		$results=array();
		$d=0;
		foreach ($semua as $sem) {
			$results[$d]=($result[$d]*0.4) +($result2[$d]*0.4 )+($result3[$d]*0.2);
			$d++;

		}
 
		 $e=0; 
		foreach ($results as $tes) {
			$test=ikan:: findOrFail($e+1);
			$test->totalSAW=$results[$e];
			$e++; 
			$test->save();
		}
		$tampil=ikan::orderBy('totalSAW','DESC')->where('status',1)->get();
		 
 		return view('daftarPenawaranPengusaha',compact('tampil'));


	}
}