<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "budgetwise");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize form data
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Fetch user from database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();
  if (password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['user_name'] = $user['name'];
    header("Location: home.php");
    exit();
  } else {
    echo "<script>alert('Invalid password'); window.history.back();</script>";
    exit();
  }
} else {
  echo "<script>alert('Email not found'); window.history.back();</script>";
  exit();
}

$conn->close();
?>
