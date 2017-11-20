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
							<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Notifikasi </a>
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
									<h3 class="panel-title"> </h3>

									<div class="panel-body table-responsive table-full">
									<table class="table table-stripped table-bordered">
									
									<tr>
											<td class="text-center text-nowrap">ID Transaksi</td>
											<td class="text-center text-nowrap">Tanggal Beli</td>
											<td class="text-center text-nowrap">Pengusaha</td>
											<td class="text-center text-nowrap">Action</td>
										</tr>

										<?php $__currentLoopData = $tampils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td class="text-center text-nowrap"><?php echo e($data->idTransaksi); ?></td>
											<td class="text-center text-nowrap"><?php echo e($data->tanggal); ?></td> 
											<td class="text-center text-nowrap"><?php echo e($data->orang->name); ?></td>
											 <td class="text-center text-nowrap">
											<a href="/lanjutkanTransaksi/<?php echo e($data->idTransaksi); ?>"><button type="submit" class="btn btn-success"> <font color="white">Lanjutkan</font></button></a>
											 
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</table> 
									</div>
									  
								</div>
								 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebarPengusaha', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>