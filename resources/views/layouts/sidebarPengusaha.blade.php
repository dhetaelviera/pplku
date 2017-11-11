<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Golek Iwak</title>
	<link rel="stylesheet" href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/theme-floyd.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/theme-helper.css')}}">
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
					<div class="sidebar-avatar-image"><img src="assets/images/logo2.png" alt=""></div><br>
					
				</div>
				<div class="sidebar-avatar">
					<div class="sidebar-avatar-image"><img src="assets/images/2.png" alt="" class="img-circle"></div>
					<div class="sidebar-avatar-text"> {{ Auth::user()->name }} </div>
				</div>
				<ul class="sidebar-nav">
					
					<li><a href="{{ url('/profilPengusaha') }}"> <span>Profil</span></a></li>
					
					<li><a href="{{ url('/daftarPenawaranPengusaha') }}"> <span>Lihat Penawaran Ikan</span></a></li>

					<li><a href="{{ url('/notifikasiPengusaha') }}"><span>Notifikasi</span></a></li>
					
					<li><a href="{{ url('/transaksi') }}"><span>Transaksi</span></a></li>
					
					<li><a href="{{ url('/home') }}"><span>Keluar</span></a></li>
					
					
					</ul>
				<div class="sidebar-footer">
					<hr style="border-color: #DDD">
					created by PPL-Agro Tim 10  </a><br>
				</div>
				<div class="sidebar-avatar-image"><img src="assets/images/logo2.png" alt=""></div><br>
			</div>
		</div>
		
			@yield('content')
	</div>
</body> 
<script src="{{url('assets/plugins/jquery/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/theme-floyd.js')}}"></script>
</html>