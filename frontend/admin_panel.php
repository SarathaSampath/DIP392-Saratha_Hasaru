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
  <title>Eazy Barber- Admin Panel</title>
  <style>
		.page-bg {
			background-image: url('http://localhost/eazy_baber_v2/frontend/images/coverImage3.png'); 
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			min-height: 100vh; 
		}
    .admin-buttons {
      text-align: center;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 50px;
      border-radius: 15px;
    }
    .admin-buttons h2 {
      margin-top: 10%;
      margin-bottom: 30px;
      color: #fff;
    }
    .admin-buttons a.btn-custom {
      display: block;
      margin: 15px auto;
      background-color: #28a745;
      color: white;
      font-size: 20px;
      padding: 15px 15px;
      border: none;
      border-radius: 8px;
      width: 250px;
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
      <h2>Admin Panel</h2>
      <a href="manage_slots.php" class="btn-custom">Manage Appointments</a>
      <a href="customer_details.php" class="btn-custom">Customer Details</a>
    </div>
  </div>
</body>
</html>
