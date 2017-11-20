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
							<h3 class="panel-title">Beli Penawaran Ikan</h3>

						</div>
						<div class="panel-body">
							<form action="/updateBeli/<?php echo e($beli->idPenawaran); ?>" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
								<?php echo e(csrf_field()); ?>


									<div class="form-group">  
										<label class="col-sm-3 control-label">ID Penawaran</label>
										<div class="col-sm-6">
											<input type="text" placeholder="Placeholder text" readonly="readonly" class="form-control" name="id" value="<?php echo e($beli->idPenawaran); ?>" required> 
										</div>
									</div>

									<div class="form-group">  
										<label class="col-sm-3 control-label">Tanggal Beli</label>
										<div class="col-sm-6">
											<input type="date" placeholder="yyyy-mm-dd" class="form-control" name="tanggal" required> 
										</div>
									</div>

									<div class="form-group">  
										<label class="col-sm-3 control-label">Tanggal Penawaran</label>
										<div class="col-sm-6">
											<input type="date" placeholder="Placeholder text" class="form-control" name="tanggalPenawaran" value="<?php echo e($beli->tanggalPenawaran); ?>" readonly="readonly" required> 
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Jenis Ikan</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="opsiIkan" value="<?php echo e($beli->tes->opsi); ?>" readonly="readonly" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Ikan</label>
										<div class="col-sm-6">
											<input type="text" readonly="readonly" class="form-control" name="jenisIkan" value="<?php echo e($beli->jenisIkan); ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Jumlah Ikan(kg)</label>
										<div class="col-sm-6">
											<input type="text" placeholder="kg" readonly="readonly" class="form-control" name="jumlahIkan" value="<?php echo e($beli->jumlahIkan); ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Harga Ikan (Rp)</label>
										<div class="col-sm-6">
											<input type="text" placeholder="Rp" class="form-control" readonly="readonly" name="hargaIkan" value="<?php echo e($beli->hargaIkan); ?>" required>
										</div>
									</div> 
									<div class="form-group">
										<label class="col-sm-3 control-label">Pembeli</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" readonly="readonly" name="user" value="<?php echo e(Auth::user()->name); ?>" required>
											<input type="hidden" class="form-control" readonly="readonly" name="user1" value="<?php echo e(Auth::user()->id); ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Agen</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" readonly="readonly" name="agen" value="<?php echo e($beli->pemilik->name); ?>" required>
											<input type="hidden" class="form-control" readonly="readonly" name="agen1" value="<?php echo e($beli->pemilik->id); ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Status Penawaran</label>
										<div class="col-sm-6">
											<select name="statusPenawaran" class="form-control">
												<option value="2">Beli</option>
											</select>
											<input type="hidden" class="form-control" name="status" value="3" required>
										</div>
									</div> 
									<div class="form-group">
										<div class="col-sm-9" align="right">
											<br>
											<br>
											<div class="form-group">
												<div class="col-sm-9" align="right">
													<button class="btn btn-success" type="submit" value="beli" name="submit">Beli</button>
												</div>
											</div>
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
<?php echo $__env->make('layouts.sidebarPengusaha', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>