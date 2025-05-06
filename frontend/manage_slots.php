<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eazy Barber is a web-based salon management system offering professional salon services, easy appointment booking, and great styles.">
  <meta name="keywords" content="Eazy Barber, salon management, online booking, barber services, appointment scheduling, professional salon, haircuts, grooming, barber shop, salon software">
	<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!--my_style-->
  <link rel="stylesheet" href="http://localhost/eazy_baber_v2/frontend/css/style.css" />
  <title>Eazy Barber - Manage Slots</title>
  <style>
    .page-bg {
      background-image: url('http://localhost/eazy_baber_v2/frontend/images/coverImage3.png'); 
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      min-height: 100vh;
      color: #ffffff;
    }
    form {
      margin: 0 auto;
      max-width: 400px;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    input {
      padding: 10px;
      font-size: 16px;
      width: 100%;
      margin-bottom: 20px;
    }
    button {
      background-color: #28a745;
      color: white;
      font-size: 18px;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
      width: 100%;
    }
    button:hover {
      background-color: #f17f15;
    }
    .appointment-output {
      text-align: left;
      font-size: 16px;
      color: #ffffff;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border-radius: 5px;
      margin: 5px 0;
      width: 100%;
    }
    h2 {
      text-align: center;
      font-size: 26px;
      color: #ffffff;
      margin-bottom: 20px;
      margin-top: 3%;
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
  <div class="page-bg">
    <header>
      <nav>
        <a href="index.php">Home</a>
        <a href="contact.php">Contact Us</a>
        <div class="right">
          <a href="register.php">Sign Up</a>
          <a href="login.php">Login</a>
        </div>
      </nav>
    </header>
    <div class="admin-buttons">
      <a href="http://localhost/eazy_baber_v2/frontend/admin_panel.php" class="btn-custom">Admin Panel</a>
    </div>
    <h2>Manage Appointments</h2>
<div class="container mt-4">
  <div class="row w-100">
    <div class="col-md-2"></div>    
    <div class="col-md-8">
      <table class="table table-bordered table-striped table-hover table-light">
        <thead class="table-dark">
          <tr>
            <th>Slot Date</th>
            <th>Slot Time</th>
            <th>Status</th>
            <th>Booked By</th>
            <th>Contact</th>
            <th>Delete Slot</th>
            <th>Cancel Appointment</th>
          </tr>
        </thead>
        <tbody>
          <?php include '../backend/admin/manage_slots.php'; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<form method="POST">
  <div class="mb-3">
    <label for="slot_date" class="form-label text-white">Slot Date</label>
    <input type="date" id="slot_date" name="slot_date" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="slot_time" class="form-label text-white">Slot Time</label>
    <input type="time" id="slot_time" name="slot_time" class="form-control" required>
  </div>
  <button type="submit">Add Slot</button>
</form>

  </div>
</body>
</html>
