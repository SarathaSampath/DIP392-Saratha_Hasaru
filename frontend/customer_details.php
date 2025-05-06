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
    <title>Eazy Barber- customer details</title>
	<style>  
		.page-bg {
			background-image: url('http://localhost/eazy_baber_v2/frontend/images/coverImage3.png'); 
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			min-height: 100vh; 
      color: #fff;
		}
    .admin-buttons {
      text-align: center;
      margin-top: 2%;
      margin-left: 2%;
    }
    .admin-buttons h2 {
      color: #fff;
    }
    .admin-buttons a.btn-custom {
      display: block;
      
      background-color: #28a745;
      color: white;
      font-size: 15px;
      padding: 6px 4px;
      border: none;
      border-radius: 8px;
      width: 150px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .admin-buttons a.btn-custom:hover {
      background-color: #f17f15;
      color: white;
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
    <div class="admin-buttons">
      <a href="http://localhost/eazy_baber_v2/frontend/admin_panel.php" class="btn-custom">Admin Panel</a>
    </div>
    <div class="container mt-5">
      <h2 class="mb-4 text-center">Customer Details</h2>
      <table class="table table-bordered table-striped table-hover table-light">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
          </tr>
        </thead>
        <tbody>
          <?php include '../backend/admin/get_customer_data.php'; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
