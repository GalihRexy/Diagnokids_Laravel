<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diagnokids | Profile</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light mt-2 navbar-costume">
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
		        <a class="nav-link mt-1 active" href="{{url('profile')}}">User Profile</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mt-1" href="{{url('diagnosa')}}">Diagnosa</a>
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

	<div class="container">
		<div class="card mt-5 mb-3" id="card-profile" style="max-width: 100%;">
		  <div class="row no-gutters" style="min-height: 500px;">
		    <div class="col-6 bg-cyan card-body" data>
		    	<div class="d-flex justify-content-center mt-5 mb-4">
		    		<svg class="bi bi-person-circle" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
					  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
					</svg>
		    	</div>
				<h4 class="d-flex justify-content-center mt-2"><?= $name; ?></h4>
				<p class="d-flex justify-content-center grey">Orang Tua</p>
				<img class="mom-girl" src="/img/mom-girl.png" width="180">
		    </div>
		    <div class="col-6 bg-pink">
		    	<div class="row" id="containerTambah">
		    		<div class="col align-self-center" >
		    			<span class="grey" id="tambahAnak" data-toggle="modal" data-target="#tambahAnakModal" type="button">Tambah Anak</span>
		    		</div>
		    		<div class="col-1 mt-4" id="tambahIcon" data-toggle="modal" data-target="#tambahAnakModal" type="button">
		    			<svg class="bi bi-plus-circle" width="30px" height="30px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
						  <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
						  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						</svg>
		    		</div>
		    	</div>
		    	
		    	<div class="row mt-5"></div>
		    	<div class="row mt-5"></div>

		    	<div class="row" id="containerAnak">
		    		<!-- Data anak -->
		    		<?php foreach ($anak as $row) { ?> 
			    	<div class="row mb-2 dataAnak">
			    		<div class="col-2 ml-3 ">
			    			<svg class="bi bi-person" width="4em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							</svg>
			    		</div>
			    		<div class="col align-self-center">
			    			<h5 class=""><?= $row->nama; ?></h5>
			    			<p class="grey mt-n1"><?= $row->jenis_kelamin; ?></p>
			    		</div>			
			    	</div>
			    	<?php } ?>
			    	<!-- end data anak -->

		    	</div>

		    	<img src="/img/kaktus.png" id="kaktus" width="50px">    
		    </div>
		  </div>
		</div>
	</div>
	

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
</html>