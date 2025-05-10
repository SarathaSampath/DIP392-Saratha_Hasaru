<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password, contact) VALUES ('$name', '$email', '$password', '$contact')";
if ($conn->query($sql)) {
    header("location:http://localhost/eazy_baber_v2/frontend/register.php?msg=Successfully Registerd!"); // Redirect with an message
} else {
    echo "Error: " . $conn->error;
}
?>