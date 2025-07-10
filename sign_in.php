<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In - BudgetWise</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .nav-bar {
      background-color: #000;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
    }
    .nav-bar .brand {
      font-size: 24px;
      font-weight: bold;
    }
    .nav-bar a {
      color: #fff;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
    }
    .signin-container {
      max-width: 400px;
      margin: 80px auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
    }
    .signin-container h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 6px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #333;
    }
    .signup-link {
      text-align: center;
      margin-top: 20px;
    }
    .signup-link a {
      color: #000;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="nav-bar">
    <div class="brand">BudgetWise</div>
    <div>
      <a href="sign_up.php">Sign Up</a>
    </div>
  </div>

  <div class="signin-container">
    <h2>Sign In</h2>
    <form action="signin_process.php" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="submit-btn">Sign In</button>
    </form>
    <div class="signup-link">
      Don't have an account? <a href="sign_up.php">Sign Up</a>
    </div>
  </div>

</body>
</html>
