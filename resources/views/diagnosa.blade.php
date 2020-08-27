<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diagnokids | Diagnosa</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light mt-2">
	  <div class="container">
	  	  <a class="navbar-brand" href="#">
	  	  	<img class="align-self-center" id="logo" src="/img/logo.png" width="140">
	  	  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto align-self-center">
		      <li class="nav-item">
		        <a class="nav-link mt-1" href="{{url('home')}}">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mt-1" href="{{url('profile')}}">User Profile</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mt-1 active" href="{{url('diagnosa')}}">Diagnosa</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mt-1" href="{{url('data-diagnosa')}}">Data Diagnosa</a>
		      </li>
		      <button class="btn-nav-secondary mr-3 ml-5 align-self-center"><a href="{{route('logout')}}" style="text-decoration: none; color: #232D42;">Sign Out</a></button>
		      <!-- <button class="btn-nav-primary align-self-center">Sign Up</button> -->
		    </ul>

		  </div>
	  </div>
	</nav>

	<section class="container mt-5" id="diagnosa1">
		<div class="p-2">
			<h3 class="d-flex justify-content-center">Aplikasi ini diperuntukan untuk anak yang kisaran berusia 1 s/d 5 tahun.</h3>
			<p class="d-flex justify-content-center">Silahkan pilih mulai untuk melanjutkan proses diagnosa untuk anak anda.</p>
			<img src="/img/doctor_2x.jpg" width="400px" class="img-fluid d-flex justify-content-center" style="margin: 0 auto;"><br>
			<button class="btn-primary d-flex justify-content-center" style="margin: 0 auto;" id="btnMulai">Mulai</button>
		</div>
	</section>

	<section class="container mt-5 none" id="diagnosa2" >
		<div class="p-2">
			<h4 class="d-flex justify-content-center mb-5">Pilih Anak</h4>
			<?php if(count($anak) != null) { ?>
				<?php foreach ($anak as $row) { ?>
					<div class="row mb-3 dataAnak2" style="max-width: 400px; margin: 0 auto;">			
						<div class="col-2 ml-3 ">
			    			<svg class="bi bi-person" width="4em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							</svg>
			    		</div>
			    		<div class="col align-self-center">
			    			<h5 class=""><a href="{{ url('diagnosa/'.$row->id.'') }}" style="text-decoration: none;color: #232D42;"><?= $row->nama ; ?></a></h5>
			    			<p class="grey mt-n1"><?= $row->jenis_kelamin; ?></p>
			    		</div>				    			
			    	</div>
				<?php } ?>
			<?php } else { ?>
	    	<!-- Jika belum ada data anak yang ditambahkan -->
	    	<div class="row mb-3" style="max-width: 400px; margin: 0 auto;">
	    		<p class="grey" style="margin: 0 auto;">Belum ada data anak yang ditambahkan</p>		
	    		<button class="btn-primary mt-2" data-toggle="modal" data-target="#tambahAnakModal" style="font-weight: 400;margin: 0 auto;">Tambah</button>
	    	</div>
	    	<?php } ?>
		</div>
	</section>

	<section class="container mt-5" id="keluhan" style="height: 80vh;padding-top: 50px;display: none;">
		<div class="p-2">
			<h4 class="d-flex justify-content-center mb-5">Pilih Keluhan</h4>
			<div id="detailKeluhan" class="row" >
				<form style="margin: 0 auto;">
					<ul class="list-group " >
					  <li class="list-group-item noBorder"><input class="" type="checkbox" name="" id="keluhan1"><label class="ml-2 " for="keluhan1">Keluhan</label></li>
					  <li class="list-group-item noBorder"><input type="checkbox" name="" id="keluhan2"><label class="ml-2" for="keluhan2">Keluhan</label></li>
					  <li class="list-group-item noBorder"><input type="checkbox" name="" id="keluhan3"><label class="ml-2" for="keluhan3">Keluhan</label></li>
					</ul>
				</form>
				
			</div>
		</div>
	</section>

	<section class="container mt-5 none" id="gejala" style="height: 80vh;padding-top:">
		<div class="p-2">
			<h4 class="d-flex justify-content-center mb-5">Pilih Gejala</h4>
			<div id="detailKeluhan" class="row" >
				<form style="margin: 0 auto;">
					<ul class="list-group " >
					  <li class="list-group-item noBorder"><input class="" type="checkbox" name="" id="gejala1"><label class="ml-2 " for="gejala1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, .</label></li>
					  <li class="list-group-item noBorder"><input type="checkbox" name="" id="gejala2"><label class="ml-2" for="gejala2">lorem</label></li>
					  <li class="list-group-item noBorder"><input type="checkbox" name="" id="gejala3"><label class="ml-2" for="gejala3">Gejala</label></li>
					</ul>
				</form>
				
			</div>
		</div>
	</section>








	<!-- Modal -->
	<div class="modal fade" id="tambahAnakModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah data anak</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="{{ url('profile/tambah_data_anak') }}">
	          <?= csrf_field() ?>
			  <div class="form-group">
			    <label for="nama">Nama Lengkap</label>
			    <input type="text" class="form-control" id="nama" name="nama">
			    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Jenis Kelamin</label>
			    <div>
			    	<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline1" name="jenis_kelamin" class="custom-control-input" value="Laki-laki">
					  <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="jenis_kelamin" class="custom-control-input" value="Perempuan">
					  <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
					</div>
			    </div>
			  </div>
			  <div class="form-group">
			  	<label>Umur</label>
			  	<select class="custom-select" name="umur">
				  <option selected>Pilih umur...</option>
				  <option value="1">Satu Tahun</option>
				  <option value="2">Dua Tahun</option>
				  <option value="3">Tiga Tahun</option>
				  <option value="4">Empat Tahun</option>
				  <option value="5">Lima Tahun</option>
				</select>
			  </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
		</form>	
	    </div>
	  </div>
	</div>
	<!-- End Modal -->





</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#btnMulai").click(function(){
			$("#diagnosa1").slideToggle(1000);
			$("#diagnosa2").slideToggle(3500);
		})

		// $(".dataAnak2").click(function(){
		// 	$("#diagnosa2").fadeToggle(1000);
		// 	$("#keluhan").fadeToggle(2500);
		// })
	});

</script>
</html>