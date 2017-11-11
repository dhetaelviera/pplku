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
									  <span class="text-grey">oleh <?php echo e(Auth::user()->name); ?></span>
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
											<td class="text-center text-nowrap">Status</td>
											 <td class="text-center text-nowrap">Action</td>
										</tr>

										<?php $__currentLoopData = $tampil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td class="text-center text-nowrap"><?php echo e($data->idPenawaran); ?></td>
											<td class="text-center text-nowrap"><?php echo e($data->tanggalPenawaran); ?></td>
											<td class="text-center text-nowrap"><?php echo e($data->opsiIkan); ?></td> 
											<td class="text-center text-nowrap"><?php echo e($data->jenisIkan); ?></td>
											<td class="text-center text-nowrap"><?php echo e($data->jumlahIkan); ?></td>
											<td class="text-center text-nowrap"><?php echo e($data->hargaIkan); ?></td>
											<td class="text-center text-nowrap"><?php echo e($data->status); ?></td>
											 
											<td class="text-center text-nowrap">
											<a href="/editPenawaran/<?php echo e($data->idPenawaran); ?>"><button type="submit" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Ubah</font></button></a>
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



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
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebarAgen', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>