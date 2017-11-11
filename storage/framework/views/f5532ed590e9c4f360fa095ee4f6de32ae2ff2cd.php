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
							<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Penawaran Ikan </a>
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
									<h3 class="panel-title">Data Penawaran Ikan</h3>
									  <span class="text-grey">oleh agen penyedia ikan</span>
								</div>
								<div class="panel-body">
									<form action="/insertPenawaran" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
										<div class="form-group">
											<label class="col-sm-3 control-label">Tanggal Penawaran </label>
											<div class="col-sm-6">
												<input type="date" placeholder="YYYY-MM-DD" class="form-control" name="tanggalPenawaran" required>
											</div>
											</div>

											<div class="form-group">
											<label class="col-sm-3 control-label">Jenis Ikan</label>
											<div class="col-sm-6"> 
												 <select name="opsiIkan" class="form-control">
        	                       					 <option value="1">ikan tawar</option>
    	                            				<option value="2">ikan laut</option>
	                            				</select>
	                            				</div>
											</div> 

										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Ikan</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="jenisIkan" placeholder="contoh: nila, gurami, tongkol" required>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label">Jumlah Ikan (kg)</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="jumlahIkan" placeholder="jumlahIkan" required>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label">Harga Ikan (kg)</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="hargaIkan" placeholder="hargaIkan" required>
											</div>
										</div> 
											 
										<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
										<div class="form-group">
											<div class="col-sm-9" align="right">
												<button class="btn btn-success" type="submit">Kirim Penawaran</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebarAgen', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>