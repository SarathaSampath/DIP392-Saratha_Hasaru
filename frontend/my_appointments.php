<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Eazy Barber is a web-based salon management system offering professional salon services, easy appointment booking, and great styles.">
  <meta name="keywords" content="Eazy Barber, salon management, online booking, barber services, appointment scheduling, professional salon, haircuts, grooming, barber shop, salon software">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!--my_style-->
  <link rel="stylesheet" href="http://localhost/eazy_baber_v2/frontend/css/style.css">
  <!--Favicon-->
  <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/eazy_baber_v2/frontend/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/eazy_baber_v2/frontend/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/eazy_baber_v2/frontend/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <title>Eazy Barber -Book Appointment</title>
  <style>
    .page-bg {
      background-image: url('http://localhost/eazy_baber_v2/frontend/images/coverImage3.png'); 
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      min-height: 100vh;
      color:#ffffff;
    }
    #appointments {
      text-align: center;
      padding: 10px;
      font-size: 20px;
    }
    h2 {
      text-align: center;
      font-size: 26px;
      color: #ffffff;
      margin-bottom: 20px;
      margin-top: 10%;
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
    <h2>My Appointments</h2>

<div class="container mt-4">
  <div class="row w-100">
    <div class="col-md-2"></div>    
    <div class="col-md-8">
      <table class="table table-bordered table-striped table-hover table-light">
        <thead class="table-dark">
          <tr>
            <th>Slot Date</th>
            <th>Slot Time</th>
            <th>Booked On</th>
          </tr>
        </thead>
        <tbody id="appointments">
          <!-- Rows will be added here by JS -->
        </tbody>
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<script>
  fetch('http://localhost/eazy_baber_v2/backend/my_appointments.php')
  .then(res => res.json())
  .then(data => {
    let tableBody = document.getElementById('appointments');
    data.forEach(app => {
      // Convert booking_time to just the time part
      let bookingTime = new Date(app.booking_time).toLocaleTimeString([], {
        hour: '2-digit',
        minute: '2-digit',
        hour12: true
      });

      let row = `
        <tr>
          <td>${app.slot_date}</td>
          <td>${app.slot_time}</td>
          <td>${bookingTime}</td>
        </tr>
      `;
      tableBody.innerHTML += row;
    });
  });

</script>



</body>