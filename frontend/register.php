<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eazy Barber is a web-based salon management system offering professional salon services, easy appointment booking, and great styles.">
    <meta name="keywords" content="Eazy Barber, salon management, online booking, barber services, appointment scheduling, professional salon, haircuts, grooming, barber shop, salon software">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--Boostrap Icons-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<!--my_style-->
	<link rel="stylesheet" href="http://localhost/eazy_baber_v2/frontend/css/style.css">
	<!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/eazy_baber_v2/frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/eazy_baber_v2/frontend/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/eazy_baber_v2/frontend/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
	<title>Eazy Barber- Register</title>
	<style>  
		.page-bg {
		background-image: url('http://localhost/eazy_baber_v2/frontend/images/coverImage3.png'); 
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		min-height: 100vh;
		}
	</style>
</head>
<body>
	<div class="page-bg">
		<header>
			<nav>
				<a href="http://localhost/eazy_baber_v2/frontend/index.php">Home</a>
				<a href="http://localhost/eazy_baber_v2/frontend/contact.php">Contact Us</a>
				<div class="right">
					<a href="http://localhost/eazy_baber_v2/frontend/register.php">Sign Up</a>
					<a href="http://localhost/eazy_baber_v2/frontend/login.php">Login</a>
				</div>
			</nav>
		</header>
		<div class="container">
			<div class="row mt-4">
				<div class="col-md-3"></div>	
				<div class="col-md-6">
					<div class="card">
						<div class="card-body p-5">
							<center><img src="http://localhost/eazy_baber_v2/frontend/images/logo.jpg" width="70px" height="70px"></center>
							<form action="http://localhost/eazy_baber_v2/backend/register.php" method="POST">
								<!--name-->
								<div class="mb-3">
								<label for="name" class="form-label">Name: </label>
								<input type="text" name="name" class="form-control" id="name" required>
								</div>
								<!--contact-->
								<div class="mb-3">
								<label for="contact" class="form-label">Contact Number:</label>
								<input type="text" name="contact" class="form-control" id="contact" required>
								</div>
								<!--Email-->
								<div class="mb-3">
								<label for="email" class="form-label">E-mail:</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
								</div>
								<!--Password-->
								<div class="mb-3">
								<label for="password" class="form-label">Password:</label>
								<input type="password" name="password" class="form-control" id="password" required>
								</div>
								<!--submit button-->
								<input type="submit" name="Submit" class="btn btn-success" value="Register">
								<!--error message-->
								<center>
									<?php if (isset($_GET['msg'])): ?>
										<div class="alert" role="alert">
											<?php echo htmlspecialchars($_GET['msg']); ?>
										</div>
									<?php endif; ?>
								</center>
							</form>
							<a href="http://localhost/eazy_baber_v2/frontend/login.php"> <p>Login here</p> </a>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>