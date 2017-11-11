<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request; 
use App\ikan;
use Carbon\Carbon;
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

		$tampil= ikan::paginate(7);
		 
		return view('daftarPenawaranPengusaha',compact('tampil'));
	}

	public function profil()
	{
		return view('profilPengusaha');

	} 

	public function daftarPenawaran()
	{
		return view('daftarPenawaranPengusaha');

	}

	public function keluar()
	{
		return view('home');

	}

	public function notif()
	{
		return view('notifikasiPengusaha');

	}  


  public function beliPenawaran($id){
    $beli= ikan::find($id);
    if(!$beli)
     dd('kosong');

    return view('beliIkan',compact('beli'));
  }

  public function jadiBeli( Request $request, $id){
    $beli= ikan::find($id);
    $beli->statusPenawaran='2';
    $beli->save();

    return view('dashboardPengusaha', $id);
  }

/*
public function hitung(){

 //Setelah bobot terbuat select semua di tabel Matrik
 $bobot = array(0.2,0.4,0.4);
 $sql = mysqli_query("SELECT * FROM penawaranIkan");
 //Buat tabel untuk menampilkan hasil
 echo "<p> Matrik Awal </p>
 <table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
  <tr>
   <td>No</td>
   <td>idPenawaran</td>
   <td>C1</td>
   <td>C2</td>
   <td>C3</td>
  </tr>
  ";
$no = 1;
 while ($dt = mysqli_fetch_array($sql)) {
  $jumlah= ($dt['opsiIkan'])+($dt['hargaIkan'])+($dt['jumlahIkan']);
  echo "<tr>
   <td>$no</td>
   <td>".getPenawaran($dt['idPenawaran'])."</td>
   <td>$dt[opsiIkan]</td>
   <td>$dt[hargaIkan]</td>
   <td>$dt[jumlahIkan]</td> 
  </tr>";
 $no++;
 }
 echo "</table>";

$crMax = mysqli_query("SELECT max(jumlahIkan) as maxK3 FROM penawaranIkan");
 $max = mysqli_fetch_array($crMax);

$crMin = mysqli_query("SELECT min(opsiIkan) as minK1, min(hargaIkan) as minK2 FROM penawaranIkan");
 $min = mysqli_fetch_array($crMin);

 //Hitung Normalisasi tiap Elemen
 $sql2 = mysqli_query("SELECT * FROM penawaranIkan");
 //Buat tabel untuk menampilkan hasil
 echo "<p>Matrik Normalisasi</p>
 <table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
  <tr>
   <td>No</td>
   <td>Nama</td>
   <td>C1</td>
   <td>C2</td>
   <td>C3</td>
  </tr>
  ";
 $no = 1;
 while ($dt2 = mysqli_fetch_array($sql2)) {
  echo "<tr>
   <td>$no</td>
   <td>".getPenawaran($dt2['idPenawaran'])."</td>
   <td>".round($dt2['opsiIkan']/$max['minK1'],2)."</td>
   <td>".round($dt2['hargaIkan']/$max['minK2'],2)."</td>
   <td>".round($dt2['jumlahIkan']/$max['maxK3'],2)."</td>
  </tr>";
 $no++;
 }
 echo "</table>";


 //Proses perangkingan dengan rumus langkah 3
 $sql3 = mysqli_query("SELECT * FROM penawaranIkan");
 //Buat tabel untuk menampilkan hasil
 echo "<H3>Perangkingan</H3>
 <table width=500 style='border:1px; #ddd; solid; border-collapse:collapse' border=1>
  <tr>
   <td>no</td>
   <td>id Penawaran</td>
   <td>SAW</td>
</tr>
  ";

//Kita gunakan rumus (Normalisasi x bobot)
 while ($dt3 = mysql_fetch_array($sql3)) {
  $jumlah= ($dt3['opsiIkan'])+($dt3['hargaIkan'])+($dt3['jumlahIkan']);
  $poin= round(
   (($dt3['opsiIkan']/$min['minK1'])*$bobot[0])+
   (($dt3['hargaIkan']/$min['minK2'])*$bobot[1])+
   (($dt3['jumlahIkan']/$max['maxK3'])*$bobot[2])

  $data['selesai']=array('idPenawaran'=>getPenawaran($dt3['idPenawaran']),
      'poin'=>$poin);

 }


//mengurutkan data
   foreach ($data as $key => $isi) {
    $idPenawaran[$key]=$isi['idPenawaran'];
    $poin1[$key]=$isi['poin'];
   }
   array_multisort($poin1,SORT_DESC,$data);
   $no=1;

   foreach ($data as $item) { ?>
   <tr>
   <td><?php echo $no ?></td>
   <td><?php echo$item['idPenawaran'] ?></td>
   <td><?php echo$item['poin'] ?></td>
   </tr>
   return redirect('daftarPenawaranPengusaha');

}*/



}