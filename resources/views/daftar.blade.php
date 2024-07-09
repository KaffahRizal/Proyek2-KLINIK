<!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('loginform') }}/assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					{{-- <h2 class="heading-section">Login #04</h2> --}}
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{ asset('covido') }}/assets/images/carousel.jpg)">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Daftar</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Nama</label>
			      			<input type="text" class="form-control" placeholder="Nama Pengguna" required>
			      		</div>
								<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="email" class="form-control" placeholder="Email" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Sandi</label>
		              <input type="password" class="form-control" placeholder="Sandi" required>
		            </div>
								<div class="form-group mb-3">
		            	<label class="label" for="password">Konfirmasi Sandi</label>
		              <input type="password" class="form-control" placeholder="Konfirmasi Sandi" required>
		            </div>
		            <div class="form-group">
		            	<a href="/masuk" type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</a>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Sudah Punya Akun? <a data-toggle="tab" href="/masuk">Masuk</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('login') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('login') }}/assets/js/popper.js"></script>
  <script src="{{ asset('login') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ asset('login') }}/assets/js/main.js"></script>

	</body>
</html>

