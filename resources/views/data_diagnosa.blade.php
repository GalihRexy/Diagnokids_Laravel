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

	<section class="container mt-2" id="data-diagnosa">
			<h4 class="d-flex justify-content-center row mt-5">Data Diagnosa</h4>
			<p class="d-flex justify-content-center row">Diurutkan berdasarkan diagnosa terbaru</p>
			<div class="row mt-5" style="margin-left: 10%;">
			<table class="table table-borderless ">
			  <thead>
			    <tr>
			      <th scope="col">Nomor</th>
			      <th scope="col">Nama Anak</th>
			      <th scope="col">Tanggal</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	$i = 1;
			  	foreach($diagnosa as $row) { ?>	
			    <tr>
			      <th scope="row"><?= $i; ?></th>
			      <td><?= $row->getNama($row['id_anak']); ?></td>
			      <td><?= date('d-m-Y  H:i:s',$row['date_created']); ?></td>
			      <td>
			      	<a href="{{ url('data-diagnosa/detail/'.$row['kode_diagnosa'].'') }}">Detail</a>
			      </td>
			    </tr>
				<?php $i++; } ?>
			  </tbody>
			</table>
			</div>
	</section>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body></html>