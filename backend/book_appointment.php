<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: http://localhost/eazy_baber_v2/frontend/book.php?msg=" . urlencode("Login required"));
    exit;
}

if (!isset($_POST["slot_id"])) {
    header("Location: http://localhost/eazy_baber_v2/frontend/book.php?msg=" . urlencode("Error: slot_id not provided."));
    exit;
}

$slot_id = intval($_POST["slot_id"]);
$user_id = $_SESSION['user_id'];

// Check if slot is available
$check = $conn->query("SELECT slot_date, slot_time FROM time_slots WHERE id=$slot_id AND is_booked=0");
if ($check->num_rows > 0) {
    $slot = $check->fetch_assoc();

    // Book the slot
    $conn->query("INSERT INTO appointments (user_id, slot_id) VALUES ($user_id, $slot_id)");
    $conn->query("UPDATE time_slots SET is_booked=1 WHERE id=$slot_id");

    // Confirmation with date and time
    $date = $slot['slot_date'];
    $time = $slot['slot_time'];
    $msg = "Booked! Slot: $date at $time";

    header("Location: http://localhost/eazy_baber_v2/frontend/book.php?msg=" . urlencode($msg));
} else {
    header("Location: http://localhost/eazy_baber_v2/frontend/book.php?msg=" . urlencode("Slot taken!"));
}
?>
