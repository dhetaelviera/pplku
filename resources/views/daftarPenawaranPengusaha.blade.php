@extends('layouts.sidebarPengusaha')

@section('content')
 
<div id="main-panel">
			<div id="top-nav">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<!-- Navbar toggle button -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
								<i class="fa fa-bars"></i>
							</button>
							<!-- Sidebar toggle button -->
							<button type="button" class="sidebar-toggle">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Daftar Penawaran Ikan </a>
						</div>
					</div>
				</nav>
			</div>
<div id="content">
				<div class="container-fluid">
					<!-- basic form -->
					
					<!-- Basic element -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Penawaran Ikan</h3>
									  <span class="text-grey">oleh agen penyedia ikan</span>
								</div>
								 <div class="panel-body table-responsive table-full">
									<table class="table table-stripped table-bordered">
									
									<tr>
											<td class="text-center text-nowrap">ID Penawaran</td>
											<td class="text-center text-nowrap">Tanggal</td>
											<td class="text-center text-nowrap">Jenis Ikan</td>
											<td class="text-center text-nowrap">Nama Ikan</td>
											<td class="text-center text-nowrap">Jumlah (kg)</td>
											<td class="text-center text-nowrap">Harga (Rp)</td>
										 	<td class="text-center text-nowrap">Action</td>
										</tr>

										@foreach($tampil as $data)
										<tr>
											<td class="text-center text-nowrap">{{$data->idPenawaran}}</td>
											<td class="text-center text-nowrap">{{$data->tanggalPenawaran}}</td>
											<td class="text-center text-nowrap">{{$data->opsiIkan}}</td>
											<td class="text-center text-nowrap">{{$data->jenisIkan}}</td>
											<td class="text-center text-nowrap">{{$data->jumlahIkan}}</td>
											<td class="text-center text-nowrap">{{$data->hargaIkan}}</td>
											 <td class="text-center text-nowrap">
											<a href="/beliPenawaran/{{$data->idPenawaran}}"><button type="submit" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Beli</font></button></a>
											</td>
										</tr>
										@endforeach

									</table>

									<div class="text-grey">
									<p>Keterangan</p>
										<p>Jenis Ikan 1: ikan laut</p>
										<p>Jenis Ikan 2: ikan tawar</p>
										<p>Status 1: ditawarkan</p>
										<p>Status 2: terjual</p>
									</div>
									</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection