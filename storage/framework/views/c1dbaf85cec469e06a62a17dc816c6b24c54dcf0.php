<?php $__env->startSection('content'); ?>
<style>
	.tab{
 
width: 1000px;
text-align: left;
padding-top: 10px;
padding-bottom: 10px; 
}

.deskripsi{
	width: 920px;
	height: 100px;
} 

table{ 
	width: 90%;
	margin-left: 50px;
	margin-right: 20px;
	background-color: white;

}
td,th{ 
	border: 1px solid #dddddd;
	text-align: center;
	font-size: 13px;
	padding: 5px;/*buat ukuran kotak2*/
}
</style>

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
									  
								</div>
								 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebarPengusaha', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>