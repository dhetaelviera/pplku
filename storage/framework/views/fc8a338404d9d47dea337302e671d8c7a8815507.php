<?php $__env->startSection('content'); ?>
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
									<h3 class="panel-title">Profil <?php echo e(Auth::user()->name); ?></h3>

								</div>
								<div class="panel-body">
									<form action="/updateProfil/<?php echo e(Auth::user()->id); ?>" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
										 <?php echo e(csrf_field()); ?>

										<div class="form-group">
											<label class="col-sm-3 control-label">Nama</label>
											<div class="col-sm-6">
												<input type="text" value="<?php echo e(Auth::user()->name); ?>" name="name" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Status</label>
											<div class="col-sm-6">
												<input type="text" readonly="readonly"  value="<?php echo e(Auth::user()->lev->level); ?> " class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">E-mail</label>
											<div class="col-sm-6">
												<input type="text"  name="email" value=" <?php echo e(Auth::user()->email); ?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">No. Telepon</label>
											<div class="col-sm-6">
												<input type="text"  name="noTelepon" value="<?php echo e(Auth::user()->noTelepon); ?> " class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Alamat</label>
											<div class="col-sm-6">
												<input type="text"  name="alamat" value=" <?php echo e(Auth::user()->alamat); ?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kecamatan</label>
											<div class="col-sm-6">
												<input type="text"  name="kecamatan" value=" <?php echo e(Auth::user()->kecamatan); ?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kabupaten</label>
											<div class="col-sm-6">
												<input type="text"  name="kabupaten" value=" <?php echo e(Auth::user()->kabupaten); ?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Provinsi</label>
											<div class="col-sm-6">
												<input type="text"  name="provinsi" value=" <?php echo e(Auth::user()->provinsi); ?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">no. Rekening</label>
											<div class="col-sm-6">
												<input type="text"  name="rekening" value=" <?php echo e(Auth::user()->rekening); ?>" class="form-control">
											</div>
										</div>
										 
										 <div class="form-group">
											<div class="col-sm-9" align="right">
												<button class="btn btn-success" type="submit">Ubah Profil</button>
											</div>
										</div>
										  
										 
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
<?php echo $__env->make('layouts.sidebarAgen', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>