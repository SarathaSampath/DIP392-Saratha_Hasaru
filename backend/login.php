<?php
include 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$res = $conn->query("SELECT * FROM users WHERE email='$email'");
$user = $res->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("location:http://localhost/eazy_baber_v2/frontend/my_appointments.php"); // Redirect
} else {
    header("location:http://localhost/eazy_baber_v2/frontend/login.php?msg=Invalid User name and Password!"); // Redirect with an error message
    exit(); // Ensure script execution stops after redirection
}
?>