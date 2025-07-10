<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "budgetwise");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize form data
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

// Check password match
if ($password !== $confirm_password) {
  echo "<script>alert('Passwords do not match'); window.history.back();</script>";
  exit();
}

// Check if email already exists
$check = $conn->query("SELECT * FROM users WHERE email = '$email'");
if ($check->num_rows > 0) {
  echo "<script>alert('Email already exists'); window.history.back();</script>";
  exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into users table
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
if ($conn->query($sql) === TRUE) {
  $_SESSION['user_name'] = $name;
  $_SESSION['user_id'] = $conn->insert_id;
  header("Location: home.php");
  exit();
} else {
  echo "<script>alert('Error: Unable to create account'); window.history.back();</script>";
}

$conn->close();
?>
