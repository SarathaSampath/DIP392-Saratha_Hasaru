<?php
include 'db.php';
$res = $conn->query("SELECT * FROM time_slots WHERE is_booked=0");
$slots = [];
while ($row = $res->fetch_assoc()) {
    $slots[] = $row;
}
echo json_encode($slots);
?>