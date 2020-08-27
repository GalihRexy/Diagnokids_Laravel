<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diagnokids | Data Diagnosa</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&amp;display=swap" rel="stylesheet">
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
		        <a class="nav-link mt-1" href="{{url('diagnosa')}}">Diagnosa</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mt-1 active" href="{{url('data-diagnosa')}}">Data Diagnosa</a>
		      </li>
		      <button class="btn-nav-secondary mr-3 ml-5 align-self-center"><a href="{{route('logout')}}" style="text-decoration: none; color: #232D42;">Sign Out</a></button>
		      <!-- <button class="btn-nav-primary align-self-center">Sign Up</button> -->
		    </ul>

		  </div>
	  </div>
	</nav>

	<section id="diagnosaDetail" class="container mt-5">
		<h3 class="d-flex justify-content-center">Hasil Diagnosa</h3>
		<div class="row container">
			<p class="mt-5 "><b>Nomor Diagnosa:</b> DGNS/<?= $diagnosa->kode_diagnosa; ?></p>
			<p class="mt-5 ml-auto"><b>Tanggal:</b> <?= date('d-m-Y', $diagnosa->date_created); ?></p>			
		</div>
		<p class="mt-n3"><b>Nama:</b> <?= $diagnosa->getNama($diagnosa->id_anak); ?></p>
		<div class="mt-5">
			<p>Berdasarkan diagnosa yang telah dilakukan anak anda memiliki gejala berupa:</p>
			<ul>
				<?php foreach($detail as $row) { ?>
				<li><?= $row->getGejala($row->kode_gejala); ?></li>
				<?php } ?>
			</ul>
		</div>
		<div>
			<p>Dan penyakit yang terdiagnosa berdasarkan gejala diatas adalah:</p>
			<ul>
				<?php foreach($detail as $row) { ?>
				<li><?= $row->getPenyakit($row->kode_gejala); ?></li>
				<?php } ?>
			</ul>
		</div>
	</section>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body></html>