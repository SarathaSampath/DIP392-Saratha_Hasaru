<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eazy Barber is a web-based salon management system offering professional salon services, easy appointment booking, and great styles.">
    <meta name="keywords" content="Eazy Barber, salon management, online booking, barber services, appointment scheduling, professional salon, haircuts, grooming, barber shop, salon software">
    <title>Eazy Barber - Home</title>
    <link rel="stylesheet" href="http://localhost/eazy_baber_v2/frontend/css/style.css">
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/eazy_baber_v2/frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/eazy_baber_v2/frontend/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/eazy_baber_v2/frontend/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
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
    <main>
        <section class="hero">
            <div class="image-container">
                <img src="http://localhost/eazy_baber_v2/frontend/images/coverImage3.png" alt="Welcome to Eazy Barber" class="cover-img">
                <div class="overlay-text">
                    <div class="logo-container">
                        <img src="http://localhost/eazy_baber_v2/frontend/images/logo.jpg" alt="Eazy Barber Logo" class="logo-img">
                        <span class="company-name">Eazy Barber</span> 
                    </div>
                    <h1>Upgrade your look</h1>
                    <p>Professional salon services, easy booking, and great styles!</p>
                    <button onclick="window.location.href='book.php'" class="book-btn">Book Appointment</button>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-row">
          <div class="footer-column">Address: 123 Barber St, City</div>
          <div class="footer-column">Phone: 123-456-7890</div>
        </div>
        <div class="footer-row second">
          <div class="footer_link"><a href="http://localhost/eazy_baber_v2/frontend/index.php">Home</a></div>
          <div class="footer_link"><a href="http://localhost/eazy_baber_v2/frontend/my_appointments.php">My Bookings</a></div>
          <div class="footer_link"><a href="http://localhost/eazy_baber_v2/frontend/contact.php">Contact</a></div>
          <div class="footer_link"><a href="http://localhost/eazy_baber_v2/frontend/admin_login.php">Admin</a></div>
        </div>
        <div>
        <hr class="separator"></hr> 
        </div>
        <div class="copyright">
            <p style="color: rgb(255, 255, 255); font-size:small;"> &copy; 2025 Our University Project. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
