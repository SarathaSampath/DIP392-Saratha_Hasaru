<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eazy_baber";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>