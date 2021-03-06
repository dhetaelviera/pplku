@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>


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
							<h3 class="panel-title">Konfirmasi Pembelian</h3>
							<span class="text-grey">oleh {{ Auth::user()->name }}</span>
						</div>
						<div class="panel-body">
							<form action="/konfirmTransaksi/{{$edit->idTransaksi}}"  enctype="multipart/form-data"  method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
								{{ csrf_field() }}

								<div class="form-group">  
									<label class="col-sm-3 control-label">Tanggal Beli</label>
									<div class="col-sm-6">
										<input type="date" placeholder="Placeholder text" class="form-control" name="tanggal" value="{{$edit->tanggal}}" readonly="readonly" required> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">ID Transaksi</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="id" value="{{$edit->idTransaksi}}" readonly="readonly" required>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Pengusaha</label>
									<div class="col-sm-6">
										<input type="text" readonly="readonly" class="form-control" name="pengusaha" value="{{$edit->orang->name}}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Agen</label>
									<div class="col-sm-6">
										<input type="text" readonly="readonly" class="form-control" name="agen" value="{{$edit->dari->name}}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">No. Rekening Agen</label>
									<div class="col-sm-6">
										<input type="text" readonly="readonly" class="form-control" name="rekening" value="{{$edit->orang->rekening}}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Total</label>
									<div class="col-sm-6">
										<input type="text" readonly="readonly" class="form-control" name="jenisIkan" value="{{$edit->orang->rekening}}" required>
									</div>
								</div>
								  
								  <div class="form-group">
									<label class="col-sm-3 control-label">Bukti transfer</label>
									<div class="col-sm-6" style="border: none;">
										<img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
										<input type="file"  class="form-control" name="bukti"   required>
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-sm-9" align="right">
										<br>
										<br>
										<div class="form-group">
											<div class="col-sm-9" align="right">
												<button class="btn btn-success" type="submit" value="edit" name="submit">Konfirmasi</button>
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
@endsection