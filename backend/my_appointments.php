<?php
include 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) die(json_encode([]));

$res = $conn->query("
    SELECT t.slot_date, t.slot_time, a.booking_time 
    FROM appointments a 
    JOIN time_slots t ON a.slot_id = t.id 
    WHERE a.user_id = {$_SESSION['user_id']}
");

$apps = [];
while ($row = $res->fetch_assoc()) {
    $apps[] = $row;
}
echo json_encode($apps);
?>
