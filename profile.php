<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - BudgetWise</title>
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
    .nav-bar .menu {
      display: flex;
      gap: 20px;
    }
    .nav-bar a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    .container {
      max-width: 600px;
      margin: 60px auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
    }
    .profile-pic {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }
    .profile-pic label {
      display: inline-block;
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background-color: #ccc;
      overflow: hidden;
      cursor: pointer;
      background-size: cover;
      background-position: center;
    }
    .profile-pic input[type="file"] {
      display: none;
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
  </style>
</head>
<body>

  <div class="nav-bar">
    <div class="menu">
      <a href="#">Home</a>
      <a href="#">Transactions</a>
      <a href="#">Budget</a>
      <a href="#">Goal</a>
      <a href="#">Notifications</a>
      <a href="#">Profile</a>
    </div>
    <div>
      <a href="about.php">Logout</a>
    </div>
  </div>

  <div class="container">
    <form action="update_profile.php" method="POST" enctype="multipart/form-data">
      <div class="profile-pic">
        <label for="profileImage" id="avatar" style="background-image: url('default-avatar.png');"></label>
        <input type="file" id="profileImage" name="profileImage" accept="image/png, image/jpeg">
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
        <input type="password" id="password" name="password">
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password">
      </div>

      <button type="submit" class="submit-btn">Update</button>
    </form>
  </div>

  <script>
    const profileImageInput = document.getElementById('profileImage');
    const avatar = document.getElementById('avatar');

    profileImageInput.addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          avatar.style.backgroundImage = `url(${e.target.result})`;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>

</body>
</html>
