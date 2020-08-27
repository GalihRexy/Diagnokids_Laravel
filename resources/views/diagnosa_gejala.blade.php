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

	<section class="container mt-5" id="gejala" style="height: 80vh;padding-top: 50px;">
		<div class="p-2" style="margin: 0 auto;">
			<h4 class="d-flex justify-content-center mb-5">Pilih gejala</h4>
			<div id="detailGejala" class="ml-5" >
				<form method="post" action="{{ url('diagnosa/proses') }}">
					<?= csrf_field(); ?>
					<ul class="list-group " style="margin-left: 30%;">
					  <?php foreach($gejala as $row) { ?>
					  	<div>
					  		<li class="list-group-item noBorder">
					  			<input class="" type="checkbox" name="gejala[]" id="<?= $row['kode_gejala']; ?>" value="<?= $row['kode_gejala']; ?>" style="cursor: pointer;">
					  			<label class="ml-2 " for="<?= $row['kode_gejala']; ?>" style="cursor: pointer;"><?= $row['nama_gejala']; ?></label>
					  		</li>
					  	</div>
					  <?php } ?>
					</ul>
					<button class="btn btn-primary mt-5" style="margin-left: 40%;">Submit</button>
				</form>
				
			</div>
		</div>
	</section>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
</html>