<?php
$conn = new mysqli("localhost", "root", "", "budgetwise");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
