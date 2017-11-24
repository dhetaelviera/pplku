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
							<a class="navbar-brand text-size-24" href="#"><i class="fa fa-home"></i> Profil</a>
							</div>
					</div>
				</nav>
			</div>
			<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Profil Pengusaha</h3>

								</div>
								<div class="panel-body">
									<form action="/updateProfil/{{Auth::user()->id}}" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
									{{ csrf_field() }}	 
									<div class="form-group">
											<label class="col-sm-3 control-label">Nama</label>
											<div class="col-sm-6">
												<input type="text" value="{{ Auth::user()->name }}" name="name" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Status</label>
											<div class="col-sm-6">
												<input type="text"   value="{{ Auth::user()->lev->level }} " name="sebagai" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">E-mail</label>
											<div class="col-sm-6">
												<input type="text"   value=" {{ Auth::user()->email }}" name="email" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">No. Telepon</label>
											<div class="col-sm-6">
												<input type="text"   value="{{ Auth::user()->noTelepon }} " name="noTelepon" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Alamat</label>
											<div class="col-sm-6">
												<input type="text"   value=" {{ Auth::user()->alamat}}" name="alamat" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kecamatan</label>
											<div class="col-sm-6">
												<input type="text"   value=" {{ Auth::user()->kecamatan}}" name="kecamatan" name="alamat" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kabupaten</label>
											<div class="col-sm-6">
												<input type="text"   value=" {{ Auth::user()->kabupaten}}" name="kabupaten" name="alamat" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Provinsi</label>
											<div class="col-sm-6">
												<input type="text"   value=" {{ Auth::user()->provinsi}}" name="provinsi" name="alamat" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">No. Rekening</label>
											<div class="col-sm-6">
												<input type="text"   value=" {{ Auth::user()->rekening}}" name="rekening" class="form-control">
											</div>
										</div>
										 
										 <div class="form-group">
											<div class="col-sm-9" align="right">
												<button class="btn btn-success" type="submit">Ubah Profil</button>
											</div>
										</div>
										 -->
										
									</form>
								</div>
							</div>
						</div>
					</div>
	</div>
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme-floyd.js"></script>
</html>