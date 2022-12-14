@extends('layouts.layout1')
@section('content')
<?php 
use App\Http\Controllers\PatientController;
use App\Models\Patient;
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Have an account?</h3>
				  <form action="{{route('login')}}" method="post" class="login-form">
						{{@csrf_field()}}
					<div class="form-group">
					<input type="text" class="form-control rounded-left" name="email" value="<?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?>"  placeholder="Email" required>
				</div>
				<span>
						{{Cookie::get('name')}}
				</span>
			<div class="form-group d-flex">
				<input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
			</div>
			<div class="form-group d-md-flex">
				<div class="w-50">
					<label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" name="remember">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="w-50 text-md-right">
								<a href="#">Forgot Password</a>
							</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success rounded submit p-3 px-5">Login</button>
			</div>
			</form>	
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

@endsection 