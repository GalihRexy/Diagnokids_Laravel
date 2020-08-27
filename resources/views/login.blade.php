<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diagnokids | Login</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<section id="login" class="container-fluid">
		<div class="row">
			<div class="col form-part">
				<div class="content mt-5 ml-5">
	  	  			<img id="logo" src="/img/logo.png" width="140">
	  	  			<div id="log">
	  	  				<h1 class="mt-5">Selamat Datang!</h1>
	  	  				@if (session('alert-success'))
	  	  				<div class="alert alert-success" role="alert">
	  	  					{{ session('alert-success') }}
						</div>
	  	  				@endif
	  	  				@if (session('alert-danger'))
	  	  				<div class="alert alert-danger" role="alert">
	  	  					{{ session('alert-danger') }}
						</div>
	  	  				@endif
	  	  				@if (session('alert-info'))
	  	  				<div class="alert alert-info" role="alert">
	  	  					{{ session('alert-info') }}
						</div>
	  	  				@endif
		  	  			<form class="mt-5" method="post" action="{{url('auth/proses_login')}}">
		  	  			{{ csrf_field() }}
						  <div class="form-group">
						    <label for="email" @error('email') class="text-danger" @enderror>Alamat Email @error('email') | {{$message}} @enderror</label>
						    <input type="email" class="form-control" name="email" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="password" @error('password') class="text-danger" @enderror>Kata Sandi @error('email') | {{$message}} @enderror</label>
						    <input type="password" class="form-control" name="password" autocomplete="off">
						  </div>
						  <button class="mt-5">Log In</button>
						</form>
						<span>Belum punya akun? <a href="{{ url('auth/register') }}" class="toggle" id="login-button">Resigter</a></span>
	  	  			</div>
				</div>
			</div>
			<div class="col illustration-part container d-none d-lg-block d-xl-block">
				<div class="decoration">
					<img class="flower1" src="/img/flower1.png" width="200">
				</div>
				<div class="ilustration">
					<img src="/img/docktor.png" width="400">
				</div>
				
			</div>	
		</div>
		
	</section>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
</html>