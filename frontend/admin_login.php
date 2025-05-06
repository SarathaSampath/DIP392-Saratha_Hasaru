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
    <title>Eazy Barber- Admin Login</title>
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
	<!--Navigation-->
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
					<!--Empty card-->
					<div class="card">
						<div class="card-body p-5">
							<center><img src="http://localhost/eazy_baber_v2/frontend/images/logo.jpg" width="70px" height="70px"></center>
							<!--Form-->
							<form onsubmit="login(); return false;">
								<!--User Name-->
								<div class="mb-3">
								<label for="login_email" class="form-label">User Name :</label>
                                <input type="text" id="username" class="form-control" placeholder="Enter username">
								</div>
								<!--Password-->
								<div class="mb-3">
								<label for="password" class="form-label">Password :</label>
                                <input type="password" id="password" class="form-control" placeholder="Enter password">
								</div>
								<!--submit button-->
								<input type="submit" class="btn btn-success" value="Login">
							</form>
                            <br>
                            <p id="error-message" style="color: red;"></p>
							<br>
							<a href="http://localhost/eazy_baber_v2/frontend/index.php"> <p>Go back</p> </a>	
						</div>
					</div>
				</div>	
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
    <script>
        function login() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === "admin" && password === "admin") {
                window.location.href = "http://localhost/eazy_baber_v2/frontend/admin_panel.php"; // Redirects to another page
            } else {
                document.getElementById("error-message").innerText = "Admin Only";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>