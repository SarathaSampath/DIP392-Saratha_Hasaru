<?php
include __DIR__ . '/../db.php';

$res = $conn->query("SELECT id, name, email, contact FROM users");

while ($row = $res->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
    echo "</tr>";
}
?>
