<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eazy Barber is a web-based salon management system offering professional salon services, easy appointment booking, and great styles.">
    <meta name="keywords" content="Eazy Barber, salon management, online booking, barber services, appointment scheduling, professional salon, haircuts, grooming, barber shop, salon software">
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
    }
    h2 {
      text-align: center;
      font-size: 26px;
      color: #ffffff;
      margin-bottom: 20px;
      margin-top: 10%;
    }
    form {
      margin: 0 auto;
      max-width: 380px;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    select {
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
    .alert {
      margin: 20px auto;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
      background-color:rgb(249, 231, 231); /* Light red background */
      color:rgb(149, 80, 80); /* Dark red text */
      max-width: 380px;
      font-size: 16px;
      font-weight: bold;
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
    <h2>Book an Appointment</h2>
<form action="http://localhost/eazy_baber_v2/backend/book_appointment.php" method="POST">
  <select name="slot_id" id="slotDropdown" class="form-select mb-3"></select>
  <button type="submit" class="btn btn-success">Book</button>
</form>
<center>
  <?php if (isset($_GET['msg'])): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo htmlspecialchars($_GET['msg']); ?>
    </div>
  <?php endif; ?>
</center>
<script>
  fetch('http://localhost/eazy_baber_v2/backend/get_slots.php')
    .then(res => res.json())
    .then(data => {
      let dropdown = document.getElementById('slotDropdown');
      data.forEach(slot => {
        let option = document.createElement('option');
        option.value = slot.id;
        option.text = `${slot.slot_date} at ${slot.slot_time}`;  
        dropdown.add(option);
      });
    });
</script>

</body>
</html>