<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - BudgetWise</title>
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
    .signup-container {
      max-width: 500px;
      margin: 80px auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
    }
    .signup-container h2 {
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
    .signin-link {
      text-align: center;
      margin-top: 20px;
    }
    .signin-link a {
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
      <a href="sign_in.php">Sign In</a>
    </div>
  </div>

  <div class="signup-container">
    <h2>Create an Account</h2>
    <form action="signup_process.php" method="POST">
      <div class="form-group">
        <label for="user_id">User Id</label>
        <input type="user_id" id="user_id" name="user_id" required>
      </div>
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
      </div>
      <button type="submit" class="submit-btn">Sign Up</button>
    </form>
    <div class="signin-link">
      Already have an account? <a href="sign_in.php">Sign In</a>
    </div>
  </div>

</body>
</html>
