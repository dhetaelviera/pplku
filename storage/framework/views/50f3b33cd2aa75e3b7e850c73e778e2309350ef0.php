<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Golek Iwak</title>
	<link rel="stylesheet" href="<?php echo e(url('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/plugins/fontawesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/css/theme-floyd.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(url('assets/css/theme-helper.css')); ?>">
	<style>
            html, body {
                background: url("bg/WALLPAPER 1.jpg");
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            </style>
</head>

<body>
	<div id="wrapper">
		<div id="sidebar">
			<div id="sidebar-wrapper">
				<div class="sidebar-title">
				 
				</div>
				<div class="sidebar-avatar">
					 
					<div class="sidebar-avatar-text">  <?php echo e(Auth::user()->name); ?>  </div>
				</div>
				<ul class="sidebar-nav">
					
					<!-- <li><a href="<?php echo e(url('/profilAgen')); ?>"> <span>Ubah Profil</span></a></li>
					 -->
					<li><a href="<?php echo e(url('/profilAgen/'.Auth::user()->id)); ?>"> <span>Profil</span></a></li>

					<li><a href="<?php echo e(url('/daftarPengusaha')); ?>"> <span>Daftar Pengusaha</span></a></li>

					<li><a href="<?php echo e(url('/buatPenawaran')); ?>"> <span>Buat Penawaran Ikan</span></a></li>

					<li><a href="<?php echo e(url('/daftarPenawaran/'.Auth::user()->id)); ?>"><span>Daftar Penawaran </span></a></li>
					
					<li><a href="<?php echo e(url('/notifikasiAgen/'.Auth::user()->id)); ?>"><span>Notifikasi</span></a></li>
					
					<li><a href="<?php echo e(url('/welcome')); ?>"><span>Transaksi</span></a></li>
					
					<li><a href="<?php echo e(url('/home')); ?>"><span>Kembali ke Awal</span></a></li>
					
					
					</ul>
				<div class="sidebar-footer">
					<hr style="border-color: #DDD">
					created by PPL-Agro Tim 10  </a><br>
				</div>
				<div class="sidebar-avatar-image"><img src="assets/images/logo2.png" alt=""></div><br>
			</div>
		</div>
		
			<?php echo $__env->yieldContent('content'); ?>
	</div>
</body>
<script src="<?php echo e(url('assets/plugins/jquery/jquery-3.1.1.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/theme-floyd.js')); ?>"></script>
</html>