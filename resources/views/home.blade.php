<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diagnokids | Home</title>
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
		        <a class="nav-link mt-1 active" href="{{url('home')}}">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mt-1" href="{{url('profile')}}">User Profile</a>
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

	<section class="container mt-2" id="hero">
		<div class="row">
			<div class="col align-self-center">
				<h1 class="mb-4">Sayangi Anak Anda, Dengan Cek Kesehatan Si Kecil. </h1>
				<p class="mb-5">Aplikasi ini membantu mengecek kesehatan buah hati anda agar langkah penanganan dapat lebih cepat.</p>
				<button class="btn-hero mt-2"><a href="{{url('diagnosa')}}" style="text-decoration: none; color: #fff;">Mulai Periksa</a></button>
			</div>
			<div class="col d-none d-lg-block d-xl-block">
				<img class="align-self-center " src="/img/illustration-pasien.png" width="604.35" height="494.83">
			</div>
		</div>
	</section>


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body></html>