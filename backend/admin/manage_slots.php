<?php
include __DIR__ . '/../db.php';

// Handle deletion of slot
// Handle deletion of slot (only if not booked)
if (isset($_GET['delete_slot'])) {
    $slot_id = intval($_GET['delete_slot']);
    
    // Check if slot is booked
    $check = $conn->query("SELECT is_booked FROM time_slots WHERE id = $slot_id");
    $slot = $check->fetch_assoc();

    if ($slot && $slot['is_booked']) {
        echo "<div class='alert alert-danger'>Cannot delete a slot that has an appointment. Please cancel the appointment first.</div>";
    } else {
        $conn->query("DELETE FROM time_slots WHERE id = $slot_id");
        echo "<div class='alert alert-success'>Slot deleted!</div>";
    }
}


// Handle cancellation of appointment
if (isset($_GET['cancel_appointment'])) {
    $slot_id = intval($_GET['cancel_appointment']);
    $conn->query("DELETE FROM appointments WHERE slot_id = $slot_id");
    $conn->query("UPDATE time_slots SET is_booked = 0 WHERE id = $slot_id");
    echo "<div class='alert alert-warning'>Appointment cancelled!</div>";
}

// Handle slot addition
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $time = $_POST['slot_time'];
    $date = $_POST['slot_date'];
    $conn->query("INSERT INTO time_slots (slot_time, slot_date) VALUES ('$time', '$date')");
    echo "<div class='alert alert-success'>Slot added!</div>";
}

// Fetch slots
$res = $conn->query("
    SELECT time_slots.id AS slot_id, time_slots.slot_date, time_slots.slot_time, time_slots.is_booked, 
           users.name, users.contact
    FROM time_slots
    LEFT JOIN appointments ON time_slots.id = appointments.slot_id
    LEFT JOIN users ON appointments.user_id = users.id
");

while ($row = $res->fetch_assoc()) {
    $slot_id = $row['slot_id'];
    echo "<tr>";
    echo "<td>" . $row['slot_date'] . "</td>";
    echo "<td>" . $row['slot_time'] . "</td>";
    echo "<td>" . ($row['is_booked'] ? 'Booked' : 'Available') . "</td>";
    echo "<td>" . ($row['is_booked'] ? htmlspecialchars($row['name']) : '-') . "</td>";
    echo "<td>" . ($row['is_booked'] ? htmlspecialchars($row['contact']) : '-') . "</td>";

    // Delete Slot button
    echo "<td><a href='?delete_slot=$slot_id' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure to delete this slot?\")'>Delete</a></td>";

    // Cancel Appointment button
    if ($row['is_booked']) {
        echo "<td><a href='?cancel_appointment=$slot_id' class='btn btn-warning btn-sm' onclick='return confirm(\"Cancel this appointment?\")'>Cancel</a></td>";
    } else {
        echo "<td>-</td>";
    }

    echo "</tr>";
}
?>
